<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageToPatient;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function create_card()
{
$status_n="new";
$newpatients=Patient::where('staut_patient', $status_n)->get();
return view('create_card',compact('newpatients'));    
}
//   $name="fackyou";
// Mail::to('bahazemmal05@gmail.com')->send(new MessageToPatient($name));
public function send_email(Request $request, $email_p, $last_name)
{
    $password_g = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 5);
    $email=$email_p;
    $name=$last_name;
    Mail::to($email)->send(new MessageToPatient($name,$password_g));
    // return view("emails.message_to_patient",compact('password_g','email','name'));
    $old="old";
    $newpatients=Patient::where('email_p',$email)
                        ->where('first_name_p', $name)
                        ->first();
 if ($newpatients) {
    $newpatients->staut_patient = $old;
    $newpatients->password_p = $password_g;
    $newpatients->save();
    return view("secseccful");
} else {
    return back()->with('error', 'Patient not found!');
}
}

function publish_admin(){
    return view('publish');   
}
function list_pation_admin(){
    $patients=Patient::all();
    return view('list_patient_admin',compact('patients'));  
 }


 function admin_exit(){
    return view('home');
 }



























}
