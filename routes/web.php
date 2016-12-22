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

Route::get('/', [
    'uses' => 'HomeController@getIndex',
    'as' => 'welcome'
]);

Route::get('/about', [
    'uses' => 'HomeController@getAbout',
    'as' => 'about'
]);

Route::get('/signup', [
    'uses' => 'UserController@getSignUp',
    'as' => 'signup'
]);

Route::post('/signin', [
    'uses' => 'UserController@postSignIn',
    'as' => 'signin',
]);

Route::get('/user', [
    'uses' => 'UserController@getUserIndex',
    'as' => 'user',
    'middleware' => 'auth'
]);

Route::post('/sendrequest', [
    'uses' => 'UserController@postSendRegisterRequest',
    'as' => 'sendrequest'
]);
Route::get('/room', [
    'uses' => 'RoomController@getRoomIndex',
    'as' => 'room',
    'middleware' => 'auth'
]);
Route::post('/register', [
    'uses' => 'UserController@postRegister',
    'as' => 'register',
    'middleware' => 'auth'
]);
Route::get('/logout', [
    'uses' => 'UserController@getLogout',
    'as' => 'logout'
]);
Route::post('/add_floor', [
    'uses' => 'FloorController@postAddFloor',
    'as' => 'add_floor',
    'middleware' => 'auth'
]);
Route::post('/add_room', [
    'uses' => 'RoomController@postAddRoom',
    'as' => 'add_room',
    'middleware' => 'auth'
]);
Route::get('/floor/{floor_id}', [
    'uses' => 'FloorController@getFloor',
    'as' => 'floors.view',
    'middleware' => 'auth'
]);
Route::get('/room/{id}', [
    'uses' => 'RoomController@getRoom',
    'as' => 'rooms.view',
    'middleware' => 'auth'
]);

Route::get('/floor_image/{filename}', [
    'uses' => 'FloorController@getFloorImage',
    'as'  => 'floor_image'
]);
Route::post('/add_comment', [
    'uses' => 'CommentController@postAddComment',
    'as' => 'add.comment',
    'middleware' => 'auth'
]);
Route::get('/delete_comment{id}', [
    'uses' => 'CommentController@postAddComment',
    'as' => 'comment.delete',
    'middleware' => 'auth'
]);