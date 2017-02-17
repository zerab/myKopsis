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
    return view('layouts.master');
});
Route::get('/home', "HomeController@index");
Route::get('/katalog', "KatalogController@index");
Route::get('/akun', "AkunController@index");

Route::group(['middleware' => 'guest'], function () {
  Route::get('/register', 'AuthController@register');
  Route::get('/login', 'AuthController@login');
  Route::post('/register', 'Auth\RegisterController@create');
  Route::post('/login', 'Auth\LoginController@authenticate');
});
Route::group(['middleware' => 'auth'], function () {
  Route::get('/logout', 'Auth\loginController@logout');
  Route::get('/akun/{id}', 'AkunController@show');
});
Route::group(['middleware' => ['auth', 'admin']], function () {
  Route::get('/admin', 'AdminController@index');

});
