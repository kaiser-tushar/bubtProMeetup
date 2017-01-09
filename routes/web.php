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
use App\Mail\RegistrationConfirmation;
use App\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('register', function() {
    return view('registration');
});

Route::get('/home', 'ProfileController@index');
Route::get('/profile', 'ProfileController@index');
Route::get('/profile/edit', 'ProfileController@edit');
Route::post('/profile/update', 'ProfileController@update');
Route::get('/completeMyProfile', 'HomeController@completeMyProfile');
Route::post('/event/register', 'EventController@register');

Route::get('mail', function(Request $r) {
    $user = User::find(1);
   Mail::to($user)->send(new RegistrationConfirmation($user));
});

Route::post('/image-upload', 'ProfileController@imageUpload');

