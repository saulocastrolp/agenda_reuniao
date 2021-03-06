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
    if(Auth::guest()){
        return view('auth/login');
    } else {
        return view('home');
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('user', 'UserController@index')->name('user');

Route::resource('user','UserController')->middleware('auth');

Route::resource('events', 'EventsController');
