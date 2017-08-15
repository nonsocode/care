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

// @Todo : Add Roles middleware to routes
Route::get('/get-driver', 'DriverController@index')->name('get-driver');
Route::post('get-driver', 'DriverController@saveDriverRequest');
Route::get('change-password', 'Auth\\ResetPasswordController@getPasswordChangeForm')->name('change.password')->middleware('auth');
Route::post('change-password', 'Auth\\ResetPasswordController@changePassword')->middleware('auth');

Route::group(['prefix' => 'admin', 'middleware'=> ['auth','formalities']], function() {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/dashboard', 'AdminController@index')->name('dashboard');

    Route::get('all-driver-requests.json',"api\\DriverRequestController@index")->name("driverRequest.json");
    
    Route::get('profile','ProfileController@index')->name('profile');
    Route::post('profile','ProfileController@update')->name('profile');
    Route::post('profile/passowrd-change','ProfileController@changePassword')->name('profile.password');

    Route::resource('users','UserController');

    Route::resource('driver-requests', 'DriverRequestsController');
	Route::post('/driver-requests/{driver_request}/messages',"DriverRequestsController@storeMessage")->name('driver-requests.store.message');

    Route::resource('drivers', 'DriversController');
    
    Route::resource('clients', 'ClientsController');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
