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


// Dashboard Routing 
Route::get('/dashboard',[DashboardController::class,'dashboard'])->middleware('guard');



// student routing 
Route::get('/dashboard/student',[DashboardController::class,'student'])->middleware('guard');
Route::get('/dashboard/student-add',[DashboardController::class,'studentadd'])->middleware('guard');
Route::post('/dashboard/student-add-store',[DashboardController::class,'studentaddstore'])->middleware('guard');
Route::get('/dashboard/student-edit/{id}',[DashboardController::class,'studentedit'])->middleware('guard');
Route::post('/dashboard/student-update/{id}',[DashboardController::class,'studentupdate'])->middleware('guard');
Route::get('/dashboard/student-delete/{id}',[DashboardController::class,'studentdelete'])->middleware('guard');

// Qualification routing 

Route::get('/dashboard/qualification',[DashboardController::class,'qualification'])->middleware('guard');
Route::get('/dashboard/qualification-add',[DashboardController::class,'qualificationadd'])->middleware('guard');
Route::post('/dashboard/qualification-add-store',[DashboardController::class,'qualificationaddstore'])->middleware('guard');
Route::get('/dashboard/qualification-edit/{id}',[DashboardController::class,'qualificationedit'])->middleware('guard');
Route::post('/dashboard/qualification-update/{id}',[DashboardController::class,'qualificationupdate'])->middleware('guard');
Route::get('/dashboard/qualification-delete/{id}',[DashboardController::class,'qualificationdelete'])->middleware('guard');


// Course routing 

Route::get('/dashboard/course',[DashboardController::class,'course'])->middleware('guard');
Route::get('/dashboard/course-add',[DashboardController::class,'courseadd'])->middleware('guard');
Route::post('/dashboard/course-add-store',[DashboardController::class,'courseaddstore'])->middleware('guard');
Route::get('/dashboard/course-edit/{id}',[DashboardController::class,'courseedit'])->middleware('guard');
Route::post('/dashboard/course-update/{id}',[DashboardController::class,'courseupdate'])->middleware('guard');
Route::get('/dashboard/course-delete/{id}',[DashboardController::class,'coursedelete'])->middleware('guard');

// enrollment routing 

Route::get('/dashboard/enrollment',[DashboardController::class,'enrollment'])->middleware('guard');
Route::get('/dashboard/enrollment-add',[DashboardController::class,'enrollmentadd'])->middleware('guard');
Route::post('/dashboard/enrollment-add-store',[DashboardController::class,'enrollmentaddstore'])->middleware('guard');
Route::get('/dashboard/enrollment-edit/{id}',[DashboardController::class,'enrollmentedit'])->middleware('guard');
Route::post('/dashboard/enrollment-update/{id}',[DashboardController::class,'enrollmentupdate'])->middleware('guard');
Route::get('/dashboard/enrollment-delete/{id}',[DashboardController::class,'enrollmentdelete'])->middleware('guard');

// announcement routing 

Route::get('/dashboard/announcement',[DashboardController::class,'announcement'])->middleware('guard');
Route::get('/dashboard/announcement-add',[DashboardController::class,'announcementadd'])->middleware('guard');
Route::post('/dashboard/announcement-add-store',[DashboardController::class,'announcementaddstore'])->middleware('guard');
Route::get('/dashboard/announcement-edit/{id}',[DashboardController::class,'announcementedit'])->middleware('guard');
Route::post('/dashboard/announcement-update/{id}',[DashboardController::class,'announcementupdate'])->middleware('guard');
Route::get('/dashboard/announcement-delete/{id}',[DashboardController::class,'announcementdelete'])->middleware('guard');


// email routing 
Route::get('/dashboard/email',[DashboardController::class,'email'])->middleware('guard');
Route::get('/dashboard/email-add',[DashboardController::class,'emailadd'])->middleware('guard');
Route::post('/dashboard/email-add-store',[DashboardController::class,'emailaddstore'])->middleware('guard');
Route::get('/dashboard/email-edit/{id}',[DashboardController::class,'emailedit'])->middleware('guard');
Route::post('/dashboard/email-update/{id}',[DashboardController::class,'emailupdate'])->middleware('guard');
Route::get('/dashboard/email-delete/{id}',[DashboardController::class,'emaildelete'])->middleware('guard');

// youtube video routing 

Route::get('/dashboard/youtube-course',[DashboardController::class,'youtube-course'])->middleware('guard');
Route::get('/dashboard/youtube-course-add',[DashboardController::class,'youtube-courseadd'])->middleware('guard');
Route::post('/dashboard/youtube-course-add-store',[DashboardController::class,'youtube-courseaddstore'])->middleware('guard');
Route::get('/dashboard/youtube-course-edit/{id}',[DashboardController::class,'youtube-courseedit'])->middleware('guard');
Route::post('/dashboard/youtube-course-update/{id}',[DashboardController::class,'youtube-courseupdate'])->middleware('guard');
Route::get('/dashboard/youtube-course-delete/{id}',[DashboardController::class,'youtube-coursedelete'])->middleware('guard');


// Login & Logout Routing  

Route::get('/admin/login',[RegisterController::class,'login'])->name('admin.login');
Route::post('/admin/login/store',[RegisterController::class,'loginstore'])->name('admin.login.store');
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
