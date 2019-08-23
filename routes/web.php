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

Auth::routes();

Route::get('/', 'PaketController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('produk', 'ProdukController');
Route::resource('paket', 'PaketController');
Route::resource('layanan', 'LayananController');

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/user', 'AdminController@userData');