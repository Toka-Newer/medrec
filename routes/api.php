<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\DepartmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PatientController;
use App\Http\Controllers\Api\DiagnosisController;
use App\Http\Controllers\Api\DoctorController;
use App\Http\Controllers\Api\FavouriteController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\MedicinesController;
use App\Http\Controllers\Api\SurgeryController;
use App\Http\Controllers\Api\CompainesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// all routes / api here must br authenticated

// Route::group(['middleware' => ['api'],'namespace' => 'Api'], function (){

//     Route::post('/get-user-byId',[PatientController::class, 'getUserById']);
//     Route::post('/change-user-name',[PatientController::class, 'changeUserName']);



Route::middleware('auth')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['auth:sanctum']], function () {  //security
    Route::get('/get_users', [LoginController::class, 'index']);
    Route::get('/get-user/{userId}', [LoginController::class, 'getuser']);
    Route::post('/update-user-profile-first/{userId}', [LoginController::class, 'updateUserProfile1']);
    Route::get('/get-user-nationalId/{nationalId}', [LoginController::class, 'getUserNationalID']);
    Route::group(['prefix' => 'patients'], function () {
        Route::get('/get-user-data', [PatientController::class, 'index']);
        Route::post('/insert-user', [PatientController::class, 'insert']);
        Route::get('/get-user/{userId}', [PatientController::class, 'getUser']);
        Route::get('/get-user-by-user/{userId}', [PatientController::class, 'getPatientByUserId']);
        Route::get('/get-user-nationalId/{nationalId}', [PatientController::class, 'getUserNationalID']);
        Route::post('/update-user/{userId}', [PatientController::class, 'updateUser']);
        Route::post('/update-user-profile-first/{userId}', [PatientController::class, 'updateUserProfile1']);
        Route::post('/delete-user/{userId}', [PatientController::class, 'deleteUser']);
    });

    // ------------------
    Route::group(['prefix' => 'diagnosis'], function () {
        Route::post('/insert-diagnosis', [DiagnosisController::class, 'insertDiagnosis']);
        Route::get('/get-diagnosis', [DiagnosisController::class, 'index']);
        Route::get('/get-last-record', [DiagnosisController::class, 'getLastRecord']);
        Route::get('/get-diagnosis/{diagnosisId}', [DiagnosisController::class, 'getDiagnosis']);
        Route::get('/get-diagnosis-by-patient/{patientId}', [DiagnosisController::class, 'getDiagnosisByPatient']);
        Route::get('/get-diagnosis-by-doctor/{doctorId}', [DiagnosisController::class, 'getDiagnosisByDoctor']);
        Route::post('/update-diagnosis/{diagnosisId}', [DiagnosisController::class, 'updateDiagnosis']);
        Route::post('/update-diagnosis-patient/{diagnosisId}', [DiagnosisController::class, 'updateDiagnosisPatient']);
        Route::post('/delete-diagnosis/{diagnosisId}', [DiagnosisController::class, 'deleteDiagnosis']);
    });
    // ------------------
    Route::group(['prefix' => 'doctors'], function () {
        Route::post('/insert-doctor', [DoctorController::class, 'insertDoctor']);
        Route::get('/get-doctor', [DoctorController::class, 'index']);
        Route::get('/get-doctor/{doctorId}', [DoctorController::class, 'getDoctor']);
        Route::get('/get-doctor-by-user/{userId}', [DoctorController::class, 'getDoctorByUserID']);
        Route::post('/update-doctor/{doctorId}', [DoctorController::class, 'updateDoctor']);
        Route::post('/delete-doctor/{doctorId}', [DoctorController::class, 'deleteDoctor']);
    });
    // ------------------
    Route::group(['prefix' => 'departments'], function () {
        Route::post('/insert-department', [DepartmentController::class, 'insertDepartment']);
        Route::get('/get-department', [DepartmentController::class, 'index']);
        Route::get('/get-department/{departmentId}', [DepartmentController::class, 'getDepartment']);
        Route::post('/update-department/{departmentId}', [DepartmentController::class, 'updateDepartment']);
        Route::post('/delete-department/{departmentId}', [DepartmentController::class, 'deleteDepartment']);
    });
    // -------------------
    Route::group(['prefix' => 'companies'], function () {
        Route::post('/insert-company', [CompainesController::class, 'insertCompany']);
        Route::get('/get-company', [CompainesController::class, 'index']);
        Route::post('/get-company/{companyId}', [CompainesController::class, 'getCompany']);
        Route::post('/update-company/{companyId}', [CompainesController::class, 'updateCompany']);
        Route::post('/delete-company/{companyId}', [CompainesController::class, 'deleteCompany']);
    });
    // -------------------
    Route::group(['prefix' => 'medicines'], function () {
        Route::post('/insert-medicine', [MedicinesController::class, 'insertMedicine']);
        Route::post('/get-medicine', [MedicinesController::class, 'index']);
        Route::post('/get-medicine/{medicineId}', [MedicinesController::class, 'getMedicine']);
        Route::get('/get-medicine-diagnosis/{diagnosisId}', [MedicinesController::class, 'getMedicineDiagnosis']);
        Route::get('/get-medicine-by-patient/{patientId}', [MedicinesController::class, 'getMedicineByPatient']);
        Route::post('/update-medicine/{medicineId}', [MedicinesController::class, 'updateMedicine']);
        Route::post('/delete-medicine/{medicineId}', [MedicinesController::class, 'deleteMedicine']);
    });
    // -------------------
    Route::group(['prefix' => 'surgeries'], function () {
        Route::post('/insert-surgery', [SurgeryController::class, 'insertSurgery']);
        Route::get('/get-surgery', [SurgeryController::class, 'index']);
        Route::get('/get-surgery/{surgeryId}', [SurgeryController::class, 'getSurgery']);
        Route::get('/get-surgery-by-patient/{patientId}', [SurgeryController::class, 'getSurgeryByPatient']);
        Route::get('/get-surgery-by-doctor/{doctorId}', [SurgeryController::class, 'getSurgeryByDoctor']);
        Route::post('/update-surgery/{surgeryId}', [SurgeryController::class, 'updateSurgery']);
        Route::post('/delete-surgery/{surgeryId}', [SurgeryController::class, 'deleteSurgery']);
    });
    // -------------------
    Route::group(['prefix' => 'favourites'], function () {
        Route::post('/insert-favourite', [FavouriteController::class, 'insertFavourite']);
        Route::post('/get-favourite', [FavouriteController::class, 'index']);
        Route::post('/get-favourite/{favouriteId}', [FavouriteController::class, 'getFavourite']);
        Route::get('/get-favourite-by-user/{userId}', [FavouriteController::class, 'getFavouriteByUser']);
        Route::get('/get-favourite-by-patient/{userId}', [FavouriteController::class, 'getFavouriteByPatient']);
        Route::post('/update-favourite/{favouriteId}', [FavouriteController::class, 'updateFavourite']);
        Route::post('/delete-favourite/{favouriteId}', [FavouriteController::class, 'deleteFavourite']);
        Route::post('/delete-favourite-by-patient/{patientId}/{doctorId}', [FavouriteController::class, 'deleteFavouriteByPatient']);
    });
    // -------------------
    Route::group(['prefix' => 'contact'], function () {
        Route::post('/insert-contact', [ContactController::class, 'insertContact']);
        Route::post('/get-contact', [ContactController::class, 'index']);
        Route::post('/get-contact/{contactId}', [ContactController::class, 'getContact']);
        Route::post('/update-contact/{contactId}', [ContactController::class, 'updateContact']);
        Route::post('/delete-contact/{contactId}', [ContactController::class, 'deleteContact']);
    });
    // ------------------

});

// // -------------------
//     Route::post('/register',[LoginController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);








    // Request::all();
// });
