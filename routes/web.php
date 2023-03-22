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

Route::get('/login',[RegisterController::class,'login'] );
Route::get('/register',[RegisterController::class,'register'] );
Route::get('/edituser',[DashboardController::class,'edituser'] );
Route::get('/',[HomeController::class,'index'] );
Route::get('/coursedetail',[HomeController::class,'coursedetail'] );
Route::get('/dashboard',[DashboardController::class,'dashboard'] );
Route::get('/uploadvoucher',[DashboardController::class,'uploadvoucher'] );
Route::get('/userslist',[DashboardController::class,'userslist'] );
Route::get('/mail',[HomeController::class,'mail'] );
