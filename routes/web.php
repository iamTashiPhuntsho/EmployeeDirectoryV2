<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectoryController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\SignatureController;
use App\Http\Controllers\InfoController;
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
// Route::get('/', [DirectoryController::class, 'getDirectorySearch'])->name('get_search_path');

require __DIR__.'/auth.php';
require __DIR__.'/backend.php';



Route::get('/org', function () {
    return view('org');
});
Route::get('/', [DirectoryController::class, 'getDirectorySearch']);
Route::get('/BNBLEmployeeDirectory', [DirectoryController::class, 'getDirectorySearch'])->name('get_search_path');
Route::get('/BNBLEmployeeDirectory/result', [DirectoryController::class, 'getResult'])->name('result_path');
Route::get('/BNBLEmployeeDirectory/result/{id}/show/{ename}/{location}/{department}/{vehicle_number}', [DirectoryController::class, 'getShow'])->name('show_result_path');
Route::post('/BNBLEmployeeDirectory', [DirectoryController::class, 'searchDirectory'])->name('search_directory_path');

//Routes for vehicle directory
Route::get('/BNBLEmployeeOrgChart', [VehicleController::class, 'vehicle'])->name('get_vehicle_path');
//Route::get('/BNBLEmployeeOrg/orgchart/search', [VehicleController::class, 'search'])->name('search');
//Route::get('/BNBLEmployeeOrg/orgchartresult', [VehicleController::class, 'getResult'])->name('vehicle_path');
//Route::get('/BNBLEmployeeOrg/orgchartresult/{id}/show/{ename}/{location}/{department}', [VehicleController::class, 'getShow'])->name('show_vehicle_path');
//Route::post('/BNBLEmployeeOrg', [VehicleController::class, 'searchDirectory@searchDirectory'])->name('search_vehicle_path');

/*
|----------------------------------------------------------------------------------
| Routes for Employee Information Edit
|----------------------------------------------------------------------------------
*/ 
Route::get('/BNBLEmployeeDirectory/edit', [InfoController::class, 'getEmployee'])->name('login_info_path');
Route::get('/BNBLEmployeeDirectory/otp-verification/{eid}', [InfoController::class, 'getOtp'])->name('otp_path');
Route::get('/BNBLEmployeeDirectory/edit/{eid}/info', [InfoController::class, 'getEditForm'])->name('edit_info_path');
Route::post('/BNBLEmployeeDirectory/otp-verification', [InfoController::class, 'sendOTP'])->name('get_employee_and_send_otp_path');
Route::post('BNBLEmployeeDirectory/verify_otp', [InfoController::class, 'verifyOTP'])->name('verify_otp_path');
Route::post('BNBLEmployeeDirectory/update-employee-info/{id}', [InfoController::class, 'updateInfo'])->name('update_employee_info_path');
/*
|----------------------------------------------------------------------------------
|Routes for Employee Registration
|----------------------------------------------------------------------------------
*/ 
Route::get('BNBLEmployeeDirectory/registration', [InfoController::class, 'getRegistration'])->name('employee_registration_path');
Route::post('BNBLEmployeeDirectory/registration', [InfoController::class, 'sendAdditionRequest'])->name('contact_addition_request_path');

/*
|----------------------------------------------------------------------------------
| Routes for Mail Signature Generator
|----------------------------------------------------------------------------------
*/ 
Route::get('MailSignatureGenerator/search', [SignatureController::class, 'getSearch'])->name('sign_index_path');
Route::post('MailSignatureGenerator/generate-sign',  [SignatureController::class, 'searchDirectory'])->name('sign_search_directory_path');
Route::get('MailSignatureGenerator/generate-sign-code',  [SignatureController::class, 'generateCode'])->name('get_signature_code_path');

