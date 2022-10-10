<?php

use App\Http\Controllers\Admin\AdminController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix'=>'site/admin'],function(){

   // here is the admin show 
    Route::get('login',[AdminController::class,'adminLogin'])->name('adminloginpage')->middleware('guest:admin');
    Route::post('/doAdminLogin',[AdminController::class,'doAdminLogin'])->name('doAdminLogin');
    Route::get('dashboard',[AdminController::class,'adminDshboard'])->name('admindashboard')->middleware('auth:admin');
    Route::get('adminlogout',[AdminController::class,'adminLogOut'])->name('adminlogout')->middleware('auth:admin');

    //  here are the main functions the admin can perform
    Route::group(['middleware'=>'auth:admin'],function(){

        Route::get('add_course_page',[AdminController::class,'addCoursePage'])->name('add_course_page');
        Route::get('add_instructor_page',[AdminController::class,'addInstructorPage'])->name('add_instructor_page');
        Route::get('user_data',[AdminController::class,'userDataPage'])->name('user_data');

        // do work in database
        Route::post('/createcourse',[AdminController::class,'createCourse'])->name('createcourse');
    });
      
    

});
