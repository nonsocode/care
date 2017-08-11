<?php

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
Route::get('/get-driver', 'DriverController@index')->name('get-driver');
Route::post('get-driver', 'DriverController@saveDriverRequest');

Route::group(['prefix' => 'admin', 'middleware'=> ['auth']], function() {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/dashboard', 'AdminController@index')->name('dashboard');
    Route::get('driver-requests', 'DriverRequestsController@index')->name('driver-requests');
    Route::get('profile','ProfileController@index')->name('profile');
    Route::post('profile','ProfileController@update')->name('profile');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
