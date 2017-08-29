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
    Route::get('/driver-summary.json','AdminController@requestGraph')->name('driver-summary');

    
    Route::get('profile','ProfileController@index')->name('profile');
    Route::post('profile','ProfileController@update')->name('profile');
    Route::post('profile/passowrd-change','ProfileController@changePassword')->name('profile.password');

    Route::group(['middleware' => 'role:super admin'], function() {
        Route::resource('users','UserController');
    });

    Route::group(['middleware' => 'permission:manage driver requests'], function() {
        Route::get('all-driver-requests.json',"api\\DriverRequestController@index")->name("driverRequest.json");
        Route::resource('driver-requests', 'DriverRequestsController');
        Route::post('/driver-requests/{driver_request}/messages',"DriverRequestsController@storeMessage")->name('driver-requests.store.message');
    	Route::post('/driver-requests/{driver_request}/comments',"DriverRequestsController@storeComment")->name('driver-requests.store.comment');
    });

    Route::resource('drivers', 'DriversController');

    Route::group(['middleware' => ['permission:manage clients']], function() {
        Route::resource('clients', 'ClientsController');
        Route::post('clients/new/request/{dr}', 'ClientsController@createFromRequest')->name('clients.createFromRequest');
        Route::post('clients/attach-request/{user}/{dr}','ClientsController@attachRequestToUser')->name('clients.attachRequest');
    });

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');