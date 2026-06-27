<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Madical_data;
use App\Models\Genetic_disease;
use App\Models\Chronic_disease;
use App\Models\General_disease;
use App\Models\Medication;
use App\Models\Surgery;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Console\View\Components\Alert;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class MyController extends Controller
{
  public $timestamps = false;
  public function create_account()
  {
    
    //  $data=request()->all();$patient->save();   give all data
        $first_name = request()->first_name;
        $last_name = request()->last_name;
        $email = request()->email;
        $date_birth = request()->date_birth;
        $blood_type = request()->blood;
        $card_nbr=request()->card_nbr;
        $phone = request()->phone;
        $gender= request()->gender;
        //insert information in data base "Pfe"
        $patient=new Patient;
     $patient->first_name_p = $first_name;
     $patient->last_name_p = $last_name;
     $patient->email_p=$email;
     $patient->date_birth_p=$date_birth;
     $patient->blood_p=$blood_type;
     $patient->card_nbr=$card_nbr;
     $patient->phone_p=$phone;
     $patient->gender=$gender;
     $patient->image_p = 'patients/img_user.jpg';
    // if ($gender == '') {
    // // Redirect back with error message
    // return redirect()->back()->with('error', 'Please select a gender.');
    // }
     $patient->save();
     //inssert (first_name , last_name ......)
     return view('page_info1',['card_nbr'=>$card_nbr]);
  }

public function collect_information(Request $request,$card_nbr)
  {
    // dd($card_nbr);
   $anixiety= $request->input('anixiety');
   $sport= $request->input('sport');
   $smok= $request->input('smok');
   $drink= $request->input('drink');
   if($anixiety=='yes'){$anixiety="have constant anixiety and tension";}
   if($sport=='regular'){ $sport="Exercise regularly";}else $sport="Doing little exercise";
   if($smok == 'yes'){$smok="i smoke";}
   if($drink=='yes'){$drink="person is addicted to drugs or alcohol";}else{$drink="sometimes drinking";}
   $patientid=Patient::where('card_nbr',$card_nbr)->first();
    $id=$patientid->id_patient;  
   $patient=Patient::where('id_patient',$id)->first() ;
   $patient->negative_habits = $anixiety . ' | ' . $sport . ' | ' . $smok . ' | ' . $drink;  
   $patient->id_patient = $id;
   $patient->save();
  $address= request()->address;
  $city_p= request()->city_p;
  $region_p= request()->region_p;
$patientcu=Patient::where('card_nbr',$card_nbr)->first();
$patientcu->update([
  'address_p'=>$address,
  'city_p'=>$city_p,
  'region_p'=>$region_p,
]);
 
  return view('page_info2', ['card_nbr' => $card_nbr]);
     
  }
  
public function collect_information2(Request $request,$card_nbr)
  {
 $genetic = [];
    for ($i = 1; $i <= 8; $i++) {
        $value = $request->input('genetic' . $i);
        if ($value == '' || $value === null) break;
        $genetic[$i] = $value;
    }
    $patient = Patient::where('card_nbr', $card_nbr)->first();
    if ($patient) {
        $patientid = $patient->id_patient;
        foreach ($genetic as $g) {
            if ($g != '' && $g !== null) {
                $geneticDisease = new Genetic_disease;
                $geneticDisease->name_diseaese = $g;
                $geneticDisease->id_patient = $patientid;
                $geneticDisease->save();
            }
        }
    }


  $chronic = [];
    for ($i = 1; $i <= 8; $i++) {
        $value = $request->input('chronic' . $i);
        if ($value == '' || $value === null) break;
        $chronic[$i] = $value;
    }
    $patient = Patient::where('card_nbr', $card_nbr)->first();
    if ($patient) {
        $patientid = $patient->id_patient;
        foreach ($chronic as $g) {
            if ($g != '' && $g !== null) {
                $chronicDisease = new Chronic_disease;
                $chronicDisease->name_diseaese = $g;
                $chronicDisease->id_patient = $patientid;
                $chronicDisease->save();
            }
        }
    }

  $surgery = [];
$date = [];
for ($i = 1; $i <= 8; $i++) {
    $surgeryValue = $request->input('surgery' . $i);
    $dateValue = $request->input('date' . $i);
    if (($surgeryValue == '' || $surgeryValue === null) && ($dateValue == '' || $dateValue === null)) {
        continue;
    }
    $surgery[$i] = $surgeryValue;
    $date[$i] = $dateValue;
} if ($patient) {
    $patientid = $patient->id_patient;
    for ($i = 1; $i <= 8; $i++) {
        if (!empty($surgery[$i])) {
            $surg = new Surgery; 
            $surg->type_surgery = $surgery[$i];
            $surg->date_surgery = $date[$i] ?? null;
            $surg->id_patient = $patientid;
            $surg->save();
        }
    }
  }
  $gendesease = [];
    for ($i = 1; $i <= 8; $i++) {
        $value = $request->input('inputd' . $i);
        if ($value == '' || $value === null) break;
        $gendesease[$i] = $value;
    }
    $patient = Patient::where('card_nbr', $card_nbr)->first();
    if ($patient) {
        $patientid = $patient->id_patient;
        foreach ($gendesease as $g) {
            if ($g != '' && $g !== null) {
                $generalDisease = new General_disease;
                $generalDisease->name_disease = $g;
                $generalDisease->id_patient = $patientid;
                $generalDisease->save();
            }
        }
   }
   return view('regstration');
  }

public function home_page(){
  return view('home');
}
public function admin(){
  return view('admin');
}
public function singin_admin(){
        $email = request()->email;
        $password_admin = request()->password;
        $admin = Admin::where('email', $email)
                  ->first();
    if ($admin && $admin->password_admin === $password_admin) {
        return view('dashbored');
    } else {
        return ("please your email or password is wrong");
    }
  }
public function dashbord_admin(){
    return view('dashbored');
  }







}














