<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\getinvolvedController;
use App\Http\Controllers\MonthlygivingController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/logout','App\Http\Controllers\admin\LoginController@logout')->name('logout');
Route::namespace('App\Http\Controllers\admin')->prefix('admin')->group(function(){
Route::get('/','LoginController@view_login')->name('view_login');
Route::get('/register-form','LoginController@register_form')->name('register-form');
Route::post('register-process','LoginController@register_process')->name('register-process');
Route::post('login-process','LoginController@login_process')->name('login-process');

Route::get('admin-dashboard','DashboardController@admin_dashboard')->name('admin-dashboard');
Route::get('user-dashboard','DashboardController@user_dashboard')->name('user-dashboard');
Route::get('addservice-form','OurserviceController@addserviceform')->name('addservice-form');


Route::get('aboutus-content','AboutusContentController@aboutus_content')->name('aboutus-content');
Route::post('process-aboutus','AboutusContentController@process_aboutus')->name('process-aboutus');



Route::post('store-service','OurserviceController@store_service')->name('store-service');
Route::get('ourservice','OurserviceController@list_service')->name('list-service');
Route::get('editform-service/{id}','OurserviceController@editform_service')->name('editform-service');
Route::post('update-service/{id}','OurserviceController@update_service')->name('update-service');
Route::get('delete/{id}','OurserviceController@delete_service')->name('delete');

Route::post('register-home','HomesettingController@register_homesetting')->name('register-home');
Route::get('homesitepage','HomesettingController@homesite_page')->name('homesitepage');



});

Route::get('/',[HomeController::class,'index'])->name('index-page');
Route::get('/aboutus-page',[AboutusController::class,'aboutus'])->name('aboutus-page');
Route::get('/service-page',[ServiceController::class,'service'])->name('service-page');
Route::get('/events-page',[EventsController::class,'events'])->name('events-page');
Route::get('/get-involved-page',[GetinvolvedController::class,'getinvolved'])->name('get-involved-page');
Route::get('/monthly-giving-page',[MonthlygivingController::class,'monthlygiving'])->name('monthly-giving-page');
Route::get('/contact-us-page',[ContactusController::class,'Contact_us'])->name('contact-us-page');

