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

Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@dashboard')->name('home');

Route::resource('produk', 'ProdukController');
Route::resource('paket', 'PaketController');
Route::resource('layanan', 'LayananController');
Route::resource('user', 'UserController');

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/user', 'AdminController@user');
Route::post('/admin/{id}', 'AdminController@destroy');
