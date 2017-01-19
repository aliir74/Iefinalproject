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

//Route::get('/test', 'UserController@test');

Route::get('/F95/home', 'UserController@home');
Route::get('/F95/games/{gameTitle}/header', 'UserController@header');
Route::get('/F95/games/{gameTitle}/info', 'UserController@info');



