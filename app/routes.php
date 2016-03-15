<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::controller('account', 'SessionsController');
Route::group(array('before' => 'auth'), function () {
    Route::get('actionUsers/profile', array('before' => 'auth', 'uses' => 'UsersController@getProfile'));
});
//Booking Early Administrator
Route::group(array('before' => 'be_admin'), function () {
    Route::get('be_admin', array('before' => 'be_admin', 'uses' => 'AdminController@getIndex'));
    Route::controller('be_admin', 'AdminController');
});

//User Actions
Route::controller('password', 'RemindersController');
Route::controller('actionUsers', 'UsersController');

//Home page controller
Route::controller('/', 'HomeController');
