<?php
use App\Student;
use App\Employee;
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


Route::get('/admin', function () {
    return view('auth.login');
});

Route::get('/allServices','AppointmentController@allServices');
Route::get('/getPrice','AppointmentController@getPrice');
Route::get('/checkCustomer','AppointmentController@checkCustomer');
Route::get('/getAge','AppointmentController@getAge');


Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::resource('services','ServicesController');

Route::resource('user','UserController');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', function(){
    //echo "Hello Admin";
    //return redirect('/institute');
    return view('/dashbord');
})->middleware('auth','Admin');

Route::get('/superAdmin', function(){
   
    return view('/dashbord');
})->middleware('auth','SuperAdmin');
