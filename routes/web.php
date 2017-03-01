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
    return redirect('/home');
});
Route::get('/home', "HomeController@index");
Route::get('/katalog', "KatalogController@index");
Route::get('/akun', "AkunController@index");
Route::get('/keranjang', "CartController@index");

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
  Route::get('/keranjang/add/{id}', "CartController@add");
  Route::patch('/keranjang/update/{id}', "CartController@editQty");
  Route::delete('/keranjang/remove/{id}', "CartController@removeRow");
  Route::post('/keranjang/kirim', "CartController@store");
  Route::get('/keranjang/destroy', "CartController@destroy");
});
Route::group(['middleware' => ['auth', 'admin']], function () {
  Route::get('/admin', 'AdminController@index');

  Route::get('/admin/keuangan', 'KeuanganController@index');
  Route::get('/admin/keuangan/kas', 'KasController@index');
  Route::post('/admin/keuangan/kas/add', 'KasController@create');
  Route::get('/admin/keuangan/kas/{id}/edit', 'KasController@edit');
  Route::patch('/admin/keuangan/kas/{id}/update', 'KasController@update');
  Route::get('/admin/keuangan/kas/{id}/confirmation', 'KasController@destroyConfirmation');
  Route::delete('/admin/keuangan/kas/{id}/hapus', 'KasController@destroy');

  Route::get('/admin/keuangan/laba-rugi', 'LabaRugiController@index');

  Route::post('/admin/keuangan/laba/add', 'ProfitController@create');
  Route::get('/admin/keuangan/laba/{id}/edit', 'ProfitController@edit');
  Route::patch('/admin/keuangan/laba/{id}/update', 'ProfitController@update');
  Route::get('/admin/keuangan/laba/{id}/confirmation', 'ProfitController@destroyConfirmation');
  Route::delete('/admin/keuangan/laba/{id}/hapus', 'ProfitController@destroy');

  Route::post('/admin/keuangan/rugi/add', 'LossController@create');
  Route::get('/admin/keuangan/rugi/{id}/edit', 'LossController@edit');
  Route::patch('/admin/keuangan/rugi/{id}/update', 'LossController@update');
  Route::get('/admin/keuangan/rugi/{id}/confirmation', 'LossController@destroyConfirmation');
  Route::delete('/admin/keuangan/rugi/{id}/hapus', 'LossController@destroy');

  Route::get('/admin/keuangan/pemasukan-pengeluaran', 'InOutController@index');

  Route::post('/admin/keuangan/pemasukan/add', 'IncomeController@create');
  Route::get('/admin/keuangan/pemasukan/{id}/edit', 'IncomeController@edit');
  Route::patch('/admin/keuangan/pemasukan/{id}/update', 'IncomeController@update');
  Route::get('/admin/keuangan/pemasukan/{id}/confirmation', 'IncomeController@destroyConfirmation');
  Route::delete('/admin/keuangan/pemasukan/{id}/hapus', 'IncomeController@destroy');

  Route::post('/admin/keuangan/pengeluaran/add', 'OutcomeController@create');
  Route::get('/admin/keuangan/pengeluaran/{id}/edit', 'OutcomeController@edit');
  Route::patch('/admin/keuangan/pengeluaran/{id}/update', 'OutcomeController@update');
  Route::get('/admin/keuangan/pengeluaran/{id}/confirmation', 'OutcomeController@destroyConfirmation');
  Route::delete('/admin/keuangan/pengeluaran/{id}/hapus', 'OutcomeController@destroy');

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
  Route::get('/admin/pemesanan/{id}/details', 'PemesananController@show');
  Route::patch('/admin/pemesanan/{id}/update', 'PemesananController@update');
  Route::get('/admin/pemesanan/{id}/confirmation', 'PemesananController@destroyConfirmation');
  Route::delete('/admin/pemesanan/{id}/hapus', 'PemesananController@destroy');
});
