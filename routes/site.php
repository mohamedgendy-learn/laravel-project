<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Site\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| site Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix'=>'site'],function(){
    //here all the site route 
    Route::get('/home',[SiteController::class,'homePage'])->name('homepage');
    Route::get('/about',[SiteController::class,'aboutPage'])->name('aboutpage');
    Route::get('/courses',[SiteController::class,'coursesPage'])->name('coursespage');
    Route::get('/features',[SiteController::class,'featuresPage'])->name('featurespage');
    Route::get('/contact',[SiteController::class,'contactPage'])->name('contactpage');
    Route::get('/instractor',[SiteController::class,'instractorPage'])->name('instractorpage');
    Route::get('/testimonial',[SiteController::class,'opinionpage'])->name('opinionpage');
    // here all the user route
    Route::group(['prefix'=>'user'],function(){
        Route::get('/login',[SiteController::class,'loginPage'])->name('loginpage')->middleware('guest');
        Route::get('/signup',[SiteController::class,'signUpPage'])->name('signuppage')->middleware('guest');
        Route::get('/user_DB',[UserController::class,'dashBoard'])->name('user_DB')->middleware('auth');
        Route::post('/goforlogin',[UserController::class,'goForLogin'])->name('goforlogin');
        Route::post('/',[UserController::class,'doRegist'])->name('regist');
        Route::post('/logout',[UserController::class,'logOut'])->name('logout');
        Route::get('/social/{service}',[UserController::class,'LogBySocail'])->name('social');
        Route::get('/{service}/callback',[UserController::class,'socialBack']);
        //User profile and edite hte profile
        Route::get('profile',[UserController::class,'profile'])->name('profile')->middleware('auth');
        Route::post('E_profile/{id}',[UserController::class,'editProfile'])->name('E_profile');
        
    });
    
    
    
});



