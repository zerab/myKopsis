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
  Route::get('/akun/{id}/edit', 'AkunController@edit');
  Route::patch('/akun/{id}/update', 'AkunController@update');
  Route::get('/akun/{id}/hapus', 'AkunController@destroyConfirmation');
  Route::delete('/akun/{id}/hapus', 'AkunController@destroy');
});
Route::group(['middleware' => ['auth', 'admin']], function () {
  Route::get('/admin', 'AdminController@index');
  Route::get('/admin/keuangan', 'KeuanganController@index');
  Route::get('/admin/keuangan/kas', 'KasController@index');
  Route::get('/admin/keuangan/laba-rugi', 'LabaRugiController@index');
  Route::get('/admin/keuangan/pemasukan-pengeluaran', 'InOutController@index');
  Route::get('/admin/anggota', 'AnggotaController@index');
  Route::post('/admin/anggota/add', 'AnggotaController@create');
  Route::get('/admin/anggota/{id}/edit', 'AnggotaController@edit');
  Route::patch('/admin/anggota/{id}/update', 'AnggotaController@update');
  Route::get('/admin/anggota/{id}/confirmation', 'AnggotaController@destroyConfirmation');
  Route::delete('/admin/anggota/{id}/hapus', 'AnggotaController@destroy');
  Route::get('/admin/produk', 'ProdukController@index');
  Route::post('/admin/produk/add', 'ProdukController@create');
  Route::get('/admin/produk/{id}/edit', 'ProdukController@edit');
  Route::patch('/admin/produk/{id}/update', 'ProdukController@update');
  Route::get('/admin/produk/{id}/confirmation', 'ProdukController@destroyConfirmation');
  Route::delete('/admin/produk/{id}/hapus', 'ProdukController@destroy');
  Route::get('/admin/pemesanan', 'PemesananController@index');
  Route::get('/admin/pemesanan/{id}/edit', 'PemesananController@edit');
  Route::patch('/admin/pemesanan/{id}/update', 'PemesananController@update');
  Route::get('/admin/pemesanan/{id}/confirmation', 'PemesananController@destroyConfirmation');
  Route::delete('/admin/pemesanan/{id}/hapus', 'PemesananController@destroy');
});
