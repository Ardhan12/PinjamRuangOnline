<?php

use Illuminate\Support\Facades\Route;

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
    return view('log');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard','BookingController@dashboard');
Route::get('/booking','BookingController@booking');
//Route::get('booking', 'BookingController@index');
//Route::post('booking', 'BookingController@create');

Route::get('/prosedur','ProsedurController@prosedur');
Route::get('/status','StatusController@status');
//gedung
//Route::get('gedung','gedungController@index');
//PJRoute::resource('contacts', 'ContactController');
Route::get('/pj/create','pj\pjinputController@index');
//Route::get('/pj/create/{gedung}','pj\pjinputController@show');
//Route::get('/pj/create','pj\pjinputController@create');
Route::post('/pj/create','pj\pjinputController@store');
Route::get('/pjdashboard','pj\PJDashboardController@index');
//Route::get('/pjdashboard','pj\PJDashboardController@show');
Route::get('/pjinformasi','PJ\PJInformasiController@show');