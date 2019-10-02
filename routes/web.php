<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
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
    return view('home');
});
Route::get('/services-page', function () {
    return view('services');
});
Route::get('/appointmentBooking', function () {
    return view('addAppointment');
});

Route::get('/admin', function () {
    return view('auth.login');
});

Route::get('/Gallery', function () {
    return view('gallery');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/allServices','AppointmentController@allServices');
Route::get('/getPrice','AppointmentController@getPrice');
Route::get('/checkCustomer','AppointmentController@checkCustomer');
Route::get('/getAge','AppointmentController@getAge');
//Route::get('/getDiscount','DiscountController@getDiscount');


Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::resource('appoitment','AppointmentController');
Route::resource('services','ServicesController');
Route::resource('discount','DiscountController');
Route::resource('role','RoleController');






Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/superAdmin', function(){
   
    return view('/dashbord');
})->middleware('auth','SuperAdmin');
