<?php
<<<<<<< HEAD
=======
>>>>>>> eb72b5c0f1a2be46f05a60d160c2385cf4771b21
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
<<<<<<< HEAD
Route::get('/appointmentBooking', function () {
    return view('addAppointment');
});
=======

>>>>>>> eb72b5c0f1a2be46f05a60d160c2385cf4771b21

Route::get('/admin', function () {
    return view('auth.login');
});

<<<<<<< HEAD
=======

Route::get('/getAge','AppointmentController@getAge');

>>>>>>> eb72b5c0f1a2be46f05a60d160c2385cf4771b21

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::resource('appoitment','AppointmentController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', function(){
<<<<<<< HEAD

=======
   
    return view('/dashbord');
})->middleware('auth','Admin');

Route::get('/superAdmin', function(){
   
    return view('/dashbord');
})->middleware('auth','SuperAdmin');
