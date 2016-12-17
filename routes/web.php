<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signup', [
    'uses' => 'UserController@getSignUp',
    'as' => 'signup'
]);

Route::post('/signin', [
    'uses' => 'UserController@postSignIn',
    'as' => 'signin'
]);

Route::get('/user', [
    'uses' => 'UserController@getUserIndex',
    'as' => 'user'
]);

Route::post('/sendrequest', [
    'uses' => 'UserController@postSendRegisterRequest',
    'as' => 'sendrequest'
]);
Route::get('/room', [
    'uses' => 'RoomController@getRoomIndex',
    'as' => 'room'
]);