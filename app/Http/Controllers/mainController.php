<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Vaccination;
use App\Models\Vaccin;
use App\Models\Madical_data;
use App\Models\Medication;
use App\Models\Base_medication;
use App\Models\Drug_allergy;
use App\Models\Medical_test;
use App\Models\Physician_note;
use App\Models\Doctor;
use App\Models\Chronic_disease;
use App\Models\General_disease;
use App\Models\Genetic_disease;
use App\Models\List_Patient;
use App\Models\Surgery;
use App\Models\Nurse;
use App\Models\Publish;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class mainController extends Controller
{
    public function singin(Request $request){
        $username= request()->username;
        $password = request()->password;
        $userType = $request->input('user_type');
      if ($userType == 'patient') {
        $patient = Patient::where('card_nbr', $username)
                       ->where('password_p',$password)   
                       ->first();
         if ($patient) {
            $patients=Patient::where('card_nbr',$username)->first();
            $id = $patients->id_patient;
    
          return to_route('information_m.patient',['id_patient'=>$id]);
         } else {
          return redirect()->back()->with('error', 'Card number or password is wrong!');
        }
       }
     
    elseif ($userType == 'doctor') {
           $doctor = Doctor::where('email_d', $username )
                  ->where( 'num_MD',$password)
                  ->first();
         if ($doctor) {
          // dd($doctor->id_doctor);
          return view('doctor',['doctor'=>$doctor]);
         } else {
           $nurse = Nurse::where('email_n', $username)
                  ->where( 'nurse_password',$password)
                  ->first();
                  if($nurse){
                     return view('nurse',['nurse'=>$nurse]);
                  }else{
                            return redirect()->back()->with('error', 'email or password is wrong!');}
        }
       }
    }
      public function page_info($id_patient){
        $patient=Patient::find($id_patient);
         if (!$patient) {
              return redirect()->back()->with('error', 'Patient not found.');} 
        return view('information_m',['patient'=>$patient]);
       }

    public function update_info($id_patient){
       $patient_infor=Patient::where('id_patient',$id_patient)->first();
      return view("update_infor",['patient'=>$patient_infor]);
    }





    public function info_updated(Request $request,$id_patient){
        $first_name = request()->first_name;
        $last_name = request()->last_name;
        $email = request()->email;
        $date_birth = request()->date_birth;
        $blood = request()->blood;
        $phone = request()->phone;
        $region= request()->region;
        $city= request()->city;
        $address= request()->address;
        $patient=Patient::where('id_patient', $id_patient)->first();
         // dd($patient);
       if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imagePath = $image->store('patients', 'public'); // يخزن الصورة في storage/app/public/patients
        $patient->image_p = $imagePath;
    }  
         $patient->first_name_p = $first_name;
         $patient->last_name_p = $last_name;
         $patient->blood_p= $blood;
         $patient->phone_p= $phone;
         $patient->region_p= $region;
         $patient->city_p= $city;
         $patient->date_birth_p= $date_birth;
         $patient->address_p= $address;
         $patient->email_p= $email;
         $patient->save();
        return to_route('information_m.patient',$id_patient);
    }
    





    public function medical_h($id){
      $patient=Patient::where('id_patient',$id)->first();
      return view("medical_h",['patient'=>$patient]);
    }
    public function medical_h_v($id){
     $vaccination=Vaccination::all();
     $vacc=Vaccin::where('id_patient',$id)->get();
      return view("medical_h_v",['vaccinations'=>$vaccination ,'vaccins'=>$vacc]);
    }
    public function medical_data($id){
      return view("medical_data",['id_patient'=>$id]);
    }
    public function save_data(Request $request,$id){
        $date_now=now();
        $weight = request()->weight;
        $height = request()->height;
        $blood_pressure = request()->blood_pressure;
        $blood_glucose = request()->blood_glucose;
        $body_temp = request()->body_temp;
        $heart_Rate = request()->heart_Rate;
        $current_symptoms= request()->current_symptoms;
        $feel= request()->feel;
        $effect_medical= request()->effect_medical;
        $medicale = Madical_data::where('id_patient', $id)
            ->whereDate('date_examination', now()->toDateString())
            ->first();
       
        if($medicale){
        $medicale->weight = $weight; 
        $medicale->height = $height;
        $medicale->blood_p = $blood_pressure; 
        $medicale->blood_glucose = $blood_glucose; 
        $medicale->body_temprerature = $body_temp; 
        $medicale->heart_rate = $heart_Rate; 
        $medicale->current_symptoms = $current_symptoms; 
        $medicale->change_feel = $feel; 
        $medicale->effects_medication = $effect_medical; 
        $medicale->save();
        }else{
        $medical=new Madical_data;
        $medical->weight = $weight; 
        $medical->height = $height;
         $medical->blood_p = $blood_pressure; 
        $medical->blood_glucose = $blood_glucose; 
        $medical->body_temprerature = $body_temp; 
        $medical->heart_rate = $heart_Rate; 
        $medical->current_symptoms = $current_symptoms; 
        $medical->change_feel = $feel; 
        $medical->effects_medication = $effect_medical; 
        $medical->date_md_data =now();
        $medical->id_patient=$id;
        $medical->save();}
        $patient=Patient::where('id_patient',$id)->first();
        return to_route('information_m.patient', ['id_patient' => $id]);  
      }


public function information_m($id_patient){
    $patient = Patient::find($id_patient);

    // تحقق إذا كان لدى المريض موعد قادم
    $hasAppointment = Appointment::where('id_patient', $id_patient)
        ->where('date', '>=', now())
        ->exists();
    return view('information_m', [
        'patient' => $patient,
        'hasAppointment' => $hasAppointment
    ]);
}

public function medication($id_patient){
    $list_medication = [];
    $list_medication_m = [];
    $id_pre_m = [];
    $id_pre = [];

    $medications = Medication::where('id_patient', $id_patient)->get();

    foreach ($medications as $medic) {
        // get base medication once
        $baseMed = Base_medication::where('id_medication', $medic->id_medication)->first();
        $durationDays = $baseMed ? (int) $baseMed->duration : 0;

        // compute end date using duration from base medication
        $end_date = \Carbon\Carbon::parse($medic->date_prescribed)->addDays($durationDays);
        if ($end_date >= now()) {
            // show active prescriptions (use baseMed for info and $medic for prescription record)
            if ($baseMed) $list_medication[] = $baseMed;
            $id_pre[] = $medic;
        }

        // also check 30-day window
        $end_date_m = \Carbon\Carbon::parse($medic->date_prescribed)->addDays(30);
        if ($end_date_m >= now()) {
           if ($baseMed) $list_medication_m[] = $baseMed;
           $id_pre_m[] = $medic;
        }
    }

    $allergy = Drug_allergy::where('id_patient', $id_patient)->get();
    $list_medication_allergy = [];
    foreach ($allergy as $medication_allergy) {
        $l_medication_allergy = Base_medication::where('id_medication', $medication_allergy->id_medication)->first();
        if ($l_medication_allergy) $list_medication_allergy[] = $l_medication_allergy;
    }

    $list_test = [];
    $tests = Medical_test::where('id_patient', $id_patient)->get();
    foreach ($tests as $test) {
        if (\Carbon\Carbon::parse($test->date_test) >= now()) {
            $list_test[] = $test;
        }
    }

    return view("medical_h_mt", [
        'list_medication' => $list_medication,
        'medications' => $id_pre,
        'medications_m' => $id_pre_m,
        'list_medication_m' => $list_medication_m,
        'allergy' => $allergy,
        'list_medication_allergy' => $list_medication_allergy,
        'list_test' => $list_test
    ]);
}


  public function medical_visits($id_patient){
    $notes=Physician_note::where('id_patient',$id_patient)->get();
    if(!$notes->isEmpty()){
    $max = null;
    $note_current=NULL;
    foreach ($notes as $note) {
    if ($max === null || $note->date > $max) {
        $max = $note->date;
        $note_current=$note->id_notes;
    }
}
   $note=Physician_note::where('id_notes',$note_current)->first();   
   $doctor=Doctor::where('id_doctor',$note->id_doctor)->first();
   $name_doctor=$doctor->first_name_d;
   }else{
    $note="";
    $name_doctor="";
   }
   $chronicDisease =Chronic_disease::where('id_patient',$id_patient)->get();
   $geneticDisease =Genetic_disease::where('id_patient',$id_patient)->get();

   $last_diseases=Madical_data::where('id_patient',$id_patient)->get();
    $max = null;
    $last_examination=NULL;
   foreach($last_diseases as $last_disease){
    if ($max === null || $last_disease->date_examination > $max) {
        $max = $last_disease->date_examination;
        $last_examination=$last_disease->id_md_data;
  }
   }
  $last_examination=Madical_data::where('id_md_data',$last_examination)->first();
  //  ========== surgery ========  //
  $surgryies=Surgery::where('id_patient',$id_patient)->get();
    $min = null;
    $last_surg=null;
foreach($surgryies as $surgry){
    if ($min === null ||$surgry->date_surgery < $min && $surgry->date_surgery >= now()) {
        $min = $surgry->date_surgery;
        $last_surg = $surgry->id_surgery;
  }
   }
   $last_surgery_s=Surgery::where('id_surgery',$last_surg)->first();

    return view('medical_h_mv',['id_patient'=>$id_patient,'note'=>$note,'name_doctor'=>$name_doctor,'chronicDiseases'=>$chronicDisease,'geneticDiseases'=>$geneticDisease,'last_examination'=>$last_examination,'surgeries'=>$surgryies,'last_surgery'=>$last_surgery_s]);
  }  
    
  public function file_record($id_patient){
  $h_m_d=Madical_data::where('id_patient',$id_patient)->orderBy('date_examination', 'desc')->get();
  $notes=Physician_note::where('id_patient',$id_patient)->orderBy('date_note', 'desc')->get();
$doctors = [];
if ($notes && !$notes->isEmpty()) {
    foreach ($notes as $note) {
        $doctor = Doctor::where('id_doctor', $note->id_doctor)->first();
        if ($doctor) {
            $doctors[] = $doctor;
        }
    }
} else {
    $notes = null;
}
    return view('file_recorde',['id_patient'=>$id_patient,'medical_hs'=>$h_m_d,'notes'=>$notes,'doctors'=>$doctors ]);
}



public function new_patient($id_doctor){
    return(view('new_patient_d',['id_doctor'=>$id_doctor]));
}




public function sing_page_patient(){
  $id_pre_m=[];
  $list_medication_m =[] ;
  $list_medication_allergy=[];
  $password=request()->password;
  $id_doctor=request()->id_doctor;
$patient=Patient::where('card_nbr',$password)->first();
if($patient){
  //retive the information
$medications=Medication::where('id_patient',$patient->id_patient)->get();
foreach($medications as $medication){
$end_date_m = \Carbon\Carbon::parse($medication->date_prescribed)->addDays(30);
        if($end_date_m >= now()){
           $medic_c_m=Base_medication::where('id_medication',$medication->id_medication)->first();
           $base_c_m = Medication::where('id_medication', $medication->id_medication)->first();
           $list_medication_m[] = $medic_c_m;
           $id_pre_m[]=$base_c_m;
        }}
$allergy=Drug_allergy::where('id_patient', $patient->id_patient)->get();
foreach($allergy as $allerg){
$medication_allergy=Base_Medication::where('id_medication', $allerg->id_medication)->first();
$list_medication_allergy[]=$medication_allergy;}
  $chronicDisease =Chronic_disease::where('id_patient',$patient->id_patient)->get();
  $geneticDisease = Genetic_disease::where('id_patient',$patient->id_patient)->get();
  $surgryies=Surgery::where('id_patient',$patient->id_patient)->get();
  $medicale_data=Madical_data::where('id_patient',$patient->id_patient)->get();
    $max = null;
    $last_examination=null;
   foreach($medicale_data as $medicale){
    if ($max === null ||$medicale->date_examination > $max) {
        $max = $medicale->date_examination;
        $last_examination=$medicale->id_md_data;
  }}
 $last_diseases=Madical_data::where('id_md_data',$last_examination)->first();
 $notes=Physician_note::where('id_patient',$patient->id_patient)->get();
 $doctors='';
 if($notes){
  foreach($notes as $note){
    $doctors=Doctor::where('id_doctor',$note->id_doctor)->first()?:"";
  }}
return view('record_file_d',['patient'=>$patient,'medications'=>$id_pre_m,'list_medication_m'=>$list_medication_m,'allergy'=>$allergy,
'list_medication_allergy'=>$list_medication_allergy,
'chronicDisease'=>$chronicDisease,
'geneticDisease'=>$geneticDisease,
'surgryies'=>$surgryies,
'last_diseases'=>$last_diseases,
'id_doctor'=>$id_doctor,
'notes'=>$notes,
'doctors'=>$doctors]);
}else{
  return "the card number not existe";
}
}
 public function check($id_doctor,$id_patient){
  $doctor=Doctor::where('id_doctor',$id_doctor)->first();
  $spe=$doctor->specialty;
  if($spe == 'G'){
    $all_medications = Base_medication::select('name_medication')->get();
    return(view("check_g",['id_patient'=>$id_patient,'all_medications' => $all_medications,'id_doctor'=>$id_doctor]));
  }
  if($spe == 'O'){
    return(view("",['id_patient'=>$id_patient,'id_doctor'=>$id_doctor]));
  }
  if($spe == 'E'){
    return(view("",['id_patient'=>$id_patient,'id_doctor'=>$id_doctor]));
  }
  if($spe == 'S'){
    return(view("",['id_patient'=>$id_patient,'id_doctor'=>$id_doctor]));
  }

 }


public function list_patient($id_doctor){
   $query = DB::table('list_patients')
        ->join('patients', 'list_patients.id_patient', '=', 'patients.id_patient')
        ->where('list_patients.id_doctor', $id_doctor)
        ->select('patients.*', 'list_patients.*');
       if (request()->has('search') && request()->search != '') {
        $query->where('patients.first_name_p', 'like', '%' . request()->search . '%');
    }

    $patients = $query->get();
    return view('list_patient_doctor', [
        'id_doctor' => $id_doctor,
        'patients' => $patients
    ]);
}
public function remove_list_patinet_d($id_patient,$id_doctor){
   $deleted = DB::table('list_patients')->where('id_patient', $id_patient)->delete();
   return to_route('list_patient_d.patient', ['id_doctor' => $id_doctor]);
  }





public function consult_nurse($id_nurse){
$card_number= request()->card_number;
$patient = Patient::where('card_nbr', $card_number)->first();
if (!$patient) {
    return 'patient not found !!!!!';
}
  $chronicDisease =Chronic_disease::where('id_patient',$patient->id_patient)->get();
  $geneticDisease = Genetic_disease::where('id_patient',$patient->id_patient)->get();
  $medicale_data=Madical_data::where('id_patient',$patient->id_patient)->get();
  $last_examination=NULL;
  $max = null;
   foreach($medicale_data as $medicale){
    if ($max === null || $medicale->date_examination > $max) {
        $max = $medicale->date_examination;
        $last_examination=$medicale->id_md_data;
  }}
 $last_diseases=Madical_data::where('id_md_data',$last_examination)->first();
    return view('medical_f_n',['patient'=>$patient,'chronicDisease'=>$chronicDisease,
'geneticDisease'=>$geneticDisease,'id_nurse'=>$id_nurse,'last_diseases'=>$last_diseases]);
}






public function save_misure($id_patient,$id_nurse){
  // dd($id_patient);
    $weight = request()->weight;
    $height = request()->height;
    $blood_pressure = request()->blood_pressure;
    $blood_glucose = request()->blood_glucose;
    $body_temp = request()->body_temperature;
    $heart_rate = request()->heart_rate;
    $current_symptoms = request()->symptoms;
    $date_now=now();
    $test=Madical_data::where('id_patient', $id_patient)
        ->whereDate('date_examination', now()->toDateString())
        ->first();
        if($test){
    $test->weight = $weight;
    $test->height = $height;
    $test->blood_p = $blood_pressure;
    $test->blood_glucose = $blood_glucose;
    $test->body_temprerature = $body_temp;
    $test->heart_rate = $heart_rate;
    $test->date_examination = $date_now;
    $test->current_symptoms =$current_symptoms;
    $test->save();
    }else{
    $medical=new Madical_data;
    $medical->weight = $weight; 
    $medical->height = $height;
    $medical->blood_p = $blood_pressure; 
    $medical->blood_glucose = $blood_glucose; 
    $medical->body_temprerature = $body_temp; 
    $medical->heart_rate = $heart_rate; 
    $medical->date_examination=$date_now;
    $medical->id_patient=$id_patient;
    $medical->current_symptoms =$current_symptoms;
    $medical->save();
    }
  return to_route('medical_data.patient', [ 'id_nurse' => $id_nurse]);
        
}







public function save_check(Request $request,$id_doctor,$id_patient){
    $name_diseaese = request()->name_disease;
    $desc_disease = request()->desc_disease;
    $general_exam = request()->general_exam;
    $date_now = now();
    $medical_data=Madical_data::where('id_patient', $id_patient)
                               ->where('id_doctor',$id_doctor)
                               ->whereDate('date_examination', now()->toDateString())
                               ->first();
if($medical_data){
    $medical_data->desc_disease = $desc_disease;
    $medical_data->general_examination_notes = $general_exam;
    $medical_data->name_disease = $name_diseaese;
    $medical_data->save();
}else{
    $medical_data = new Madical_data;
    $medical_data->id_patient = $id_patient;
    $medical_data->id_doctor=$id_doctor;
    $medical_data->desc_disease = $desc_disease;
    $medical_data->general_examination_notes = $general_exam;
    $medical_data->date_examination = $date_now;
    $medical_data->name_disease= $name_diseaese;
    $medical_data->save();
}
    $desc_note = request()->desc_note;
$note = Physician_note::where('id_patient',$id_patient)
        ->where('id_doctor',$id_doctor)
        ->whereDate('date_note', now()->toDateString())
        ->first();
if($note){
    $note->desc_note = $desc_note;
    $note->save();
} else {
    $new_note = new Physician_note;
    $new_note->id_patient = $id_patient;
    $new_note->id_doctor = $id_doctor;
    $new_note->desc_note = $desc_note;
    $new_note->date_note = now();
    $new_note->save();
}
    $next_appointment = request()->next_appointment;
    $type_appointment = request()->type_appointment;
    $note_appointment = request()->note_appointment;
    if($next_appointment){
    $appiontment=new Appointment;
    $appiontment->id_patient = $id_patient;
    $appiontment->id_doctor = $id_doctor;
    $appiontment->date = $next_appointment;
    $appiontment->Type_Appointment = $type_appointment;
    $appiontment->note = $note_appointment?$note_appointment : '';
    $appiontment->save();
    }

$all_tests = [];
$tests = $request->input('tests', []); 

foreach ($tests as $test_name) {
    if ($test_name && !in_array($test_name, $all_tests)) {
        $med = new Medical_test;
        $med->id_patient = $id_patient;
        $med->name_test = $test_name;
        $med->date_test = now();
        $med->id_doctor = $id_doctor;
        $med->save();
        $all_tests[] = $test_name;
    }
}

    $medicine_name = request()->medicine_name;
    $type_all = request()->type_all;
    $ii = request()->ii;
    $pam = request()->pam;
    $duration = request()->duration;
    
    $medication_allergy=Drug_allergy::where('id_patient', $id_patient)
        ->where('id_medication', $medicine_name)
        ->first();
if(!$medication_allergy && $medicine_name){
    $medication_allergy = new Drug_allergy;
    $medication_allergy->id_patient = $id_patient;
    $medication_allergy->id_medication = $medicine_name;
    $medication_allergy->type_allgergic = $type_all;
    $medication_allergy->instensity_interaction = $ii;
    $medication_allergy->alternative_medication = $pam;
    $medication_allergy->duration = $duration;
    $medication_allergy->save();
}


    $genetic_diseases = request()->genetic_diseases;
    if($genetic_diseases){
    $genitic=new Genetic_disease;
    $genitic->id_patient = $id_patient;
    $genitic->name_diseaese = $genetic_diseases;
    $genitic->date_appearence = now();
    $genitic->save();
    }
    $chronic_diseases = request()->chronic_diseases;
    if($chronic_diseases){
    $chronic=new Chronic_disease;
    $chronic->id_patient = $id_patient;
    $chronic->name_diseaese = $chronic_diseases;
    $chronic->date_injury= now();
    $chronic->save();
 }

$all_medications = [];
$doctor = Doctor::where('id_doctor', $id_doctor)->first();
$medications = $request->input('medications', []); 
foreach ($medications as $medication) {
        $medication_id = Base_medication::where('name_medication', $medication)->first()->id_medication ?? null;
    if ($medication && $medication_id && !in_array($medication_id, $all_medications)) {
        $med = new Medication;
        $med->id_patient = $id_patient;
        $med->id_medication = $medication_id;
        $med->date_prescribed = now();
        $med->doctor_symbol = $doctor->doctor_symbol;
        $med->save();
        $all_medications[] = $medication_id;
    }
}
  //add to list patient
      $desc_disease = request()->desc_disease;
$existing = DB::table('list_patients')
    ->where('id_patient', $id_patient)
    ->where('id_doctor', $id_doctor)
    ->first();

$data = [
    'condition_p' => $desc_disease,
    'last_visit_date' => now(),
];

if (!$existing) {
    $data['id_patient'] = $id_patient;
    $data['id_doctor'] = $id_doctor;
    DB::table('list_patients')->insert($data);
} else {
    DB::table('list_patients')
        ->where('id_patient', $id_patient)
        ->where('id_doctor', $id_doctor)
        ->update($data);
}
return view("succsusful_check",["id_doctor"=>$id_doctor]);
}



public function appointment($id_patient){
    $appointments = Appointment::where('appointments.id_patient', $id_patient)
        ->join('doctors', 'appointments.id_doctor', '=', 'doctors.id_doctor')
        ->orderBy('appointments.date', 'asc')
        ->select('appointments.*', 'doctors.doctor_symbol', 'doctors.first_name_d','doctors.last_name_d', 'doctors.specialty')
        ->get();
        $doctor = null;
    if (request()->has('doctor_symbol') && request('doctor_symbol')) {
        $doctor = \App\Models\Doctor::where('doctor_symbol', request('doctor_symbol'))->first();
    }

    return view('appointment', [
        'id_patient' => $id_patient,
        'appointments' => $appointments,
        'doctor' => $doctor
        
    ]);
}


public function remove_appointment($id_appointment, $id_patient) {
    $appointment = Appointment::where('id_appointment', $id_appointment)->first();
    if ($appointment) {
        // حذف كل البيانات الطبية المرتبطة بهذا الموعد
        $appointment->madical_datas()->delete();
        // ثم حذف الموعد نفسه
        $appointment->delete();
    }
    return to_route('appointment.patient', ['id_patient' => $id_patient]);
}




public function vaccination($id_patient,$id_nurse){
  $all_vaccins = DB::table('vaccins')
        ->join('vaccinations', 'vaccins.id_vacc', '=', 'vaccinations.id_vacc')
        ->where('vaccins.id_patient', $id_patient)
        ->where('vaccins.status_vacc', 'T')
        ->select('vaccins.*', 'vaccinations.*')
        ->get();
    return view('vaccination', ['id_patient'=>$id_patient, 'id_nurse' => $id_nurse,'all_vaccins' => $all_vaccins]);

}
public function retrived($id_patient){
    return view('rest_card', ['id_patient' => $id_patient]);
}


function save_publish(Request $request){
    $title = request()->title;
    $author = request()->author;
    $summery = request()->summary;
    $date_now = request()->published_at; ;
    $body = request()->body;
    $imagePath = null;

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imagePath = $image->store('publishes', 'public'); // يخزن الصورة في storage/app/public/publishes
    }  

    // إنشاء سجل جديد في جدول النشرات
    $publish = new Publish();
    $publish->body = $body;
    $publish->author = $author;
    $publish->summery = $summery;
    $publish->subject = $title;
    $publish->date = $date_now;
    if ($imagePath) {
        $publish->image_path = $imagePath;
    }
    $publish->save();

    return view('publish');
}

function view_publication(){
    $publications = Publish::all();
    return view('publication', ['publications' => $publications]);
}
function personnel_page_d($id_doctor){
    $doctor=Doctor::where('id_doctor',$id_doctor)->first();
    return view('personne_page_d',['doctor'=>$doctor]);
}

function doctor_update($id_doctor){
    $doctor_infor=Doctor::where('id_doctor',$id_doctor)->first();
   return view("doctor_update",['doctor'=>$doctor_infor]);
 }

}