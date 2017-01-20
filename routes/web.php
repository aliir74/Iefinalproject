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
Route::get('/F95/games/{gameTitle}/leaderboard', 'UserController@leaderboard');
Route::get('/F95/games/{gameTitle}/comments', 'UserController@comments');
Route::get('/F95/games', 'UserController@search');
Route::get('/F95/games/{gameTitle}/related_games', 'UserController@related_games');




Auth::routes();
//Auth::logout();


//Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');
//Route::get('/logout', 'auth\LoginController@logout');
Route::get('/logout','Auth\LoginController@logout');
//Route::get('/logout', 'HomeController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/games', 'HomeController@games');

