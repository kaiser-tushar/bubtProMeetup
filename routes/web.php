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
    return view('registration');
});

Auth::routes();

Route::get('/home', 'ProfileController@index');
Route::get('/profile', 'ProfileController@index');
Route::get('/completeMyProfile', 'HomeController@completeMyProfile');
Route::post('/event/register', 'EventController@register');
Route::post('/image-upload', 'ProfileController@imageUpload');
