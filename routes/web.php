<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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
    return view('welcome');
});

Route::get('about',function(){
    return view('about');
})->middleware('userCheck');

Route::view('EmployeeRegister','employee_registration');
Route::post('EmployeeRegister',[EmployeeController::class,'fnSaveEmployeeDetails']);
Route::get('EmployeeDetails',[EmployeeController::class,'fnRetrieveEmployees']);

Route::get('DeleteEmployee/{Id}',[EmployeeController::class,'fnDeleteEmployee']);
Route::get('EmployeeDetailsView/{Id}',[EmployeeController::class,'fnRetrieveAnEmployee']);
Route::post('UpdateEmployeeDetails/{id}',[EmployeeController::class,'fnUpdateEmployeeDetails']);

Route::view('LoginEmployee','employee_login');
Route::post('LoginEmployee',[EmployeeController::class,'fnGetEmployeeLogin']);
Route::get('Profile',[EmployeeController::class,'fnRetrieveEmployeeProfile']);
Route::get('LogOut',[EmployeeController::class,'fnLogout']);

// Route::view('FileUpload','fileupload');
// Route::post('FileUpload',[EmployeeController::class,'fnFileUpload']);
// Route::get('FileDisplay',[EmployeeController::class,'fnFileDisplay']);

Route::view('customerregister','customer_registr');
Route::post('customerregister',[EmployeeController::class,'fnSaveCustomer']);

Route::view('mailex','mailexample');
Route::post('sendmail',[EmployeeController::class,'fnSendMail']);
