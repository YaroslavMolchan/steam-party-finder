<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'DefaultController@index');
Route::get('/login', 'DefaultController@login');
Route::get('/logout', 'Auth\AuthController@logout');
Route::get('/info', 'DefaultController@info');
Route::get('/config-lobby', 'DefaultController@configLobby');