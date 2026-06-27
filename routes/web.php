<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Mail\MessageToPatient;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['ar', 'fr', 'en'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
});

// Route::get('/', function () {
//     return view('home');
// })->name("home");
Route::get('/sing_up', function () {
    return view('sing_up');
});
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar', 'fr'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
});
// Route::get('/test', function () {
// //     $name="fackyou";
// // Mail::to('bahazemmal05@gmail.com')->send(new MessageToPatient($name));
// });
Route::get('/', [MyController::class, 'home_page'])->name("home");
// Route::get('',[MyController::class,'home_page'])->name("home_page");
Route::get('/sing_page', function () {
    return view('sing_page');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/connect', function () {
    return view('contactus');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/publication', [mainController::class, 'view_publication'])->name('publication');
Route::match(['get', 'post'], '/sing_page/page_personnel', [mainController::class,'singin'])->name("sing_page.actors");
Route::get('/sing_page/page_personnel/appointment/remove_appointment/{id_appointment}/{id_patient}', [mainController::class,'remove_appointment'])->name("remove_appointment.patient");
Route::get('/information/{id_patient}', [mainController::class, 'information_m'])->name('information_m.patient');//
Route::get('/sing_page/page_personnel/appointment/{id_patient}', [mainController::class,'appointment'])->name("appointment.patient");
Route::get('/sing_page/page_personnel/retrived_card/{id_patient}', [mainController::class,'retrived'])->name("retrived.patient");
Route::post('/sing_page/page_personnel/file_medical/{id_nurse}', [mainController::class,'consult_nurse'])->name("file_medical.nurse");
Route::get('/sing_page/page_personnel/vaccination/{id_patient}/{id_nurse}', [mainController::class,'vaccination'])->name("vaccination.nurse");


Route::get('/sing_page/page_personnel/medical_h/{id}', [mainController::class,'medical_h'])->name("medical_hestory.patient");
Route::get('/sing_page/page_personnel/medical_h_v/{patient}', [mainController::class,'medical_h_v'])->name("medical_h_v.patient");
Route::post('/sing_page/page_personnel/medical_data/save_data/{id}', [mainController::class,'save_data'])->name("save_data.patient");
Route::get('/sing_page/page_personnel/medical_data/{patient}', [mainController::class,'medical_data'])->name("medical_data.patient");
Route::get('/sing_page/page_personnel/medication/{patient}', [mainController::class,'medication'])->name("medication.patient");
Route::get('/sing_page/page_personnel/medical_visits/{patient}', [mainController::class,'medical_visits'])->name("medical_visits.patient");
Route::get('/sing_page/page_personnel/file_record/{id_patient}', [mainController::class,'file_record'])->name("file_record.patient");
Route::get('/sing_page/personnel_information/{id_doctor}', [mainController::class,'personnel_page_d'])->name("personnel_page_d");
Route::get('/sing_page/personnel_information/{id_doctor}/update_information', [mainController::class,'doctor_update'])->name("doctor.update");
Route::post('/sing_page/page_personnel/personnel_page_d', [mainController::class,'sing_page_patient'])->name("sing_page_patient.patient");
Route::get('/sing_page/page_personnel/newpatient/{id_patient}', [mainController::class,'new_patient'])->name("new_patient_d.patient");
Route::get('/sing_page/page_personnel/list_patient/remove-patient/{id_patient}/{id_doctor}', [mainController::class,'remove_list_patinet_d'])->name("remove_patient.list_patient");
Route::get('/sing_page/page_personnel/list_patient/{id_doctor}', [mainController::class,'list_patient'])->name("list_patient_d.patient");
Route::get('/sing_page/page_personnel/check_patient/{id_doctor}/{id_patient}', [mainController::class,'check'])->name("check.patient");
Route::post('/sing_page/page_personnel/check_patient/save_check/{id_doctor}/{id_patient}', [mainController::class,'save_check'])->name("save_check.patient");
Route::post('/sing_page/page_personnel/save_misure/{id_patient}', [mainController::class,'save_misure'])->name("misure.nurse");



//


Route::get('/sing_page/page_personnel/{id}', [mainController::class,'page_info'])->name("page_personel"); 
// Route::get('/admin', [MyController::class,'admin']);
Route::post('/admin', [MyController::class,'singin_admin'])->name("singin.admin");
Route::get('/admin/dashbord', [MyController::class,'dashbord_admin'])->name("dashbord_admin");
Route::post('/admin/dashbord', [mainController::class,'save_publish'])->name("save_publish");
Route::get('/admin/publish_admin', [adminController::class,'publish_admin'])->name("publish_admin");
Route::get('/admin/dashbord/create_card', [adminController::class,'create_card'])->name("create_card.admin");
Route::get('/admin/dashbord/manage_pation', [adminController::class,'list_pation_admin'])->name("list_pation_admin");
// Route::get('/admin/dashbord/create_card/yy', [adminController::class,'return_create'])->name("return.create");
Route::get('/admin/dashbord/send_email/{email}/{name}', [adminController::class,'send_email'])->name("send_email.admin");
Route::post('/sing_up/create_account', [MyController::class,'create_account'])->name("account.create");
Route::post('/sing_up/create_account/collect_information1/collect_information2/{card_nbr}', [MyController::class,'collect_information2'])->name("information.collect2");
Route::post('/sing_up/create_account/collect_information1/{card_nbr}', [MyController::class,'collect_information'])->name("information.collect1");

Route::put('/update_information/information_updated/{id_patient}', [mainController::class,'info_updated'])->name("information.update");
Route::get('/update_information/{id_patient}', [mainController::class,'update_info'])->name("update_info.patient");

