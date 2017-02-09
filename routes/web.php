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
Route::get('/katalog', "katalogController@index");
Route::get('/akun', "akunController@index");

Auth::routes();

Route::get('/register', 'authController@register');
Route::get('/login', 'authController@login');
Route::post('/register', 'akunController@store');
