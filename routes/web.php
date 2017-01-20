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
use Illuminate\Support\Facades\Input;


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
Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');


Route::get('/home', 'HomeController@index');
Route::get('/games', 'HomeController@games');

//test captcha
Route::any('captcha-test', function()
{
    if (Request::getMethod() == 'POST')
    {
        $rules = ['captcha' => 'required|captcha'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
            echo '<p style="color: #ff0000;">Incorrect!</p>';
        }
        else
        {
            echo '<p style="color: #00ff30;">Matched :)</p>';
        }
    }

    $form = '<form method="post" action="captcha-test">';
    $form .= '<input type="hidden" name="_token" value="' . csrf_token() . '">';
    $form .= '<p>' . captcha_img() . '</p>';
    $form .= '<p><input type="text" name="captcha"></p>';
    $form .= '<p><button type="submit" name="check">Check</button></p>';
    $form .= '</form>';
    return $form;
});

