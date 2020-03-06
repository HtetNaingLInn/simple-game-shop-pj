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

Route::get('/','PageController@index');





Route::get('register','Auth\RegisterController@show');
Route::post('register','Auth\Registercontroller@register');

Route::get('logout','Auth\LoginController@logout');

Route::get('login','Auth\LoginController@Show');
Route::post('login','Auth\LoginController@login');