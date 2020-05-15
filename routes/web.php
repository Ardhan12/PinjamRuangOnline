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
Route::get('/pjinput','PJInputController@pjinput');
Route::get('/pjdashboard','PJDashboardController@pjdashboard');
Route::get('/pjinformasi','PJInformasiController@pjinformasi');