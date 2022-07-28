<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoleController;
use App\Http\Controllers\AdminprofileController;
use App\Http\Controllers\ProfilesettingsController;

use App\Http\Controllers\PmtofficeController;
use App\Http\Controllers\PmtemployeeController;
use App\Http\Controllers\PmtstrategicplanController;
use App\Http\Controllers\PmtprofileController;

use App\Http\Controllers\OfficetaskController;
use App\Http\Controllers\OfficeprofileController;

use App\Http\Controllers\EmployeetaskController;
use App\Http\Controllers\EmployeeprofileController;



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

//auth route for both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});



// for admin
Route::group(['middleware' => ['auth', 'role:admin']], function() { 
    Route::resource('role', RoleController::class);
    Route::resource('register-new-user', RegisterduserController::class);
    Route::resource('admin-profile', AdminprofileController::class);
    Route::resource('admin-profile-settings', ProfilesettingsController::class);
    
});


// for pmt
Route::group(['middleware' => ['auth', 'role:pmt']], function() { 
    Route::resource('pmt-office', PmtofficeController::class);
    Route::resource('pmt-employee', PmtemployeeController::class);
    Route::resource('pmt-strategic-plan', PmtstrategicplanController::class);
    Route::resource('pmt-profile', PmtprofileController::class);
});


// for office
Route::group(['middleware' => ['auth', 'role:office']], function() { 
    Route::resource('office-task', OfficetaskController::class);
    Route::resource('office-profile', OfficeprofileController::class);
});


// for employees
Route::group(['middleware' => ['auth', 'role:employee']], function() { 
    Route::resource('employee-task', EmployeetaskController::class);
    Route::resource('employee-profile', EmployeeprofileController::class);
});


require __DIR__.'/auth.php';
