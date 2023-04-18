<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'index'] );
Route::get('/admin/login',[RegisterController::class,'login'])->name('admin.login');
Route::post('/admin/login/store',[RegisterController::class,'loginstore'])->name('admin.login.store');
Route::get('/dashboard',[DashboardController::class,'dashboard'])->middleware('guard');
Route::get('/composeemail',[DashboardController::class,'composeemail'])->middleware('guard');
Route::get('/admin/logout',[RegisterController::class,'logout'])->name('admin.logout');
Route::get('/register',[RegisterController::class,'register'] );
Route::post('/register/store',[RegisterController::class,'registerstore'] );
Route::get('/edituser',[DashboardController::class,'edituser'] );
Route::get('/thanksforregister',[HomeController::class,'thanksforregister'] );
Route::get('/coursedetail',[HomeController::class,'coursedetail'] );
Route::get('/uploadvoucher',[DashboardController::class,'uploadvoucher'] );
Route::get('/userslist',[DashboardController::class,'userslist'] );
Route::get('/mail',[HomeController::class,'mail'] );

Route::get('/allsession',function(){

    // session()->flush();

    print_r(session()->all());

});
