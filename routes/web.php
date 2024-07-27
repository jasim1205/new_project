<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController as auth;
use App\Http\Controllers\UserController as user;
use App\Http\Controllers\RoleController as role;
use App\Http\Controllers\DashboardController as dashboard;
use App\Http\Controllers\PermissionController as permission;
use App\Http\Controllers\EmployeeController as employee;
use App\Http\Controllers\CustomerController as customer;
use App\Http\Controllers\CommodityController as container;
use App\Http\Controllers\CategoryController as category;
use App\Http\Controllers\DepartmentController as department;
use App\Http\Controllers\JobController as job;
use App\Http\Controllers\PackingTypeController as packing;
use App\Http\Controllers\DescriptionOfGoodsController as description;
use App\Http\Controllers\SheedYardController as sheedyard;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/register', [auth::class, 'signUpForm'])->name('register');
Route::post('/register', [auth::class, 'signUpStore'])->name('register.store');
Route::get('/login', [auth::class, 'signInForm'])->name('login');
Route::post('/login', [auth::class, 'signInCheck'])->name('login.check');
Route::get('/logout', [auth::class, 'signOut'])->name('logOut');

Route::middleware(['checkauth'])->prefix('admin')->group(function () {
    Route::get('dashboard', [dashboard::class, 'index'])->name('dashboard');
});
Route::middleware(['checkrole'])->prefix('admin')->group(function(){
    Route::get('employees', [user::class, 'employees'])->name('employees');
    Route::resource('user', user::class);
    Route::resource('role', role::class);
    Route::get('permission/{role}', [permission::class,'index'])->name('permission.list');
    Route::post('permission/{role}', [permission::class,'save'])->name('permission.save');
    Route::resource('department', department::class);
});



Route::middleware(['checkauth'])->prefix('employee')->group(function () {
   Route::get('dashboard', [dashboard::class, 'index'])->name('employee.dashboard');
   Route::get('profile', [employee::class, 'index'])->name('employee.profile');
   Route::get('apply-leave', [employee::class, 'leave_apply'])->name('employee_leave_apply');
   Route::get('assignment', [employee::class, 'assignment'])->name('assignment');
   Route::get('changepassword', [employee::class, 'changePassword'])->name('change_password');
   Route::get('report-panel', [employee::class, 'report_panel'])->name('report_panel');
   Route::get('profile_update', [employee::class, 'profile_update'])->name('profile_update');
   Route::post('/profile/save', [employee::class, 'save_profile'])->name('profile.save');
   Route::post('/profile/savePass', [employee::class, 'change_password'])->name('change.password');
   Route::delete('/profile/delete-image', [employee::class, 'deleteImage'])->name('profile.deleteImage');
});

Route::get('/', function () {
    return view('authentication.login');
});
