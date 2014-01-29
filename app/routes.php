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

Route::get('/', 'HomeController@index');

Route::get('user', array('uses' => 'UserController@index'));

Route::get('login',   array('uses' => 'UserController@login'));
Route::post('login',  array('uses' => 'UserController@postLogin'));
Route::get('logout',   array('uses' => 'UserController@logout'));

Route::get('register', array('uses' => 'UserController@register'));
Route::post('register', array('uses' => 'UserController@postRegister'));
Route::get('success',   array('uses' => 'UserController@success'));

Route::get('profile', array('uses' => 'UserController@profile'));