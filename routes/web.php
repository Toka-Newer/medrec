<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/Patients', function () {
    return view('patients');
})->name('patients');
Route::get('/Doctors', function () {
    return view('doctors');
})->name('doctors');
Route::get('/Diganous/{id}', function () {
    return view('diganous');
})->name('diganous');
Route::get('/Report/{id}', function () {
    return view('report');
})->name('report');
Route::get('/EditReport/{id}', function () {
    return view('editReport');
})->name('editReport');
Route::get('/ShowReport/{id}', function () {
    return view('showReport');
})->name('showReport');
Route::get('/ShowDiganous/{id}', function () {
    return view('showDiganous');
})->name('showDiganous');
Route::get('/ShowDiganousDoctor/{id}', function () {
    return view('showDiganosisDoctor');
})->name('showDiganosisDoctor');
Route::get('/EditDiganous/{id}', function () {
    return view('editDiganosis');
})->name('editDiganosis');
Route::get('/Contact', function () {
    return view('contact');
})->name('contact');
Route::get('/PatientDiganous/{id}', function () {
    return view('pDiganous');
})->name('pDiganous');
Route::get('/PatientDiganousDoctor/{id}/{Sid}', function () {
    return view('patientDiagnosisD');
})->name('patientDiagnosisD');
Route::get('/DoctorDiagnosis/{id}', function () {
    return view('dDiagnosis');
})->name('dDiagnosis');
Route::get('/PatientHomePage/{id}', function () {
    return view('pHome');
})->name('pHome');
Route::get('/PatientProfile/{id}', function () {
    return view('pProfile');
})->name('pProfile');
Route::get('/EditPatientProfile', function () {
    return view('editPProfile');
})->name('editPProfile');
Route::get('/EditPatientHome', function () {
    return view('editPHome');
})->name('editPHome');
Route::get('/EditDoctor', function () {
    return view('editDoctor');
})->name('editDoctor');
Route::get('/DoctorDetails/{id}', function () {
    return view('dDetails');
})->name('dDetails');
// Route::get('/Registration', function () {
//     return view('registration');
// })->name('registration');
// Route::get('/SignIn', function () {
//     return view('signIn');
// })->name('signIn');
Route::get('/CompleteRegister', function () {
    return view('completeRegister');
})->name('completeRegister');
Route::get('/Favourite', function () {
    return view('favourite');
})->name('favourite');
Route::get('/AboutUs', function () {
    return view('about');
})->name('about');
// Route::get('/Day', function () {
//     return view('day');
// })->name('day');
// Route::get('/Calendar', function () {
//     return view('calendar');
// })->name('calendar');

Route::group(['middleware' => 'prevent-back-history'],function(){
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
});


