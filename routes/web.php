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
    return view('pages.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/masuk', 'HomeController@getMasukPage')->name('masuk');
Route::get('/daftar', 'HomeController@getDaftarPage')->name('daftar');
Route::get('/aktivitas', 'HomeController@getAktivitasPage')->name('aktivitas');
Route::get('/kegiatan', 'HomeController@getKegiatanPage')->name('aktivitas');
Route::get('/kegiatan2', 'HomeController@getKegiatan2Page')->name('aktivitas');
Route::get('/galeri', 'HomeController@getGaleriPage')->name('galeri');

Route::get('/user', 'HomeController@getUserPage')->name('user');
Route::get('/donasi', 'HomeController@getDonasiPage')->name('donasi');

Route::get('/admin', 'HomeController@getAdminPage')->name('admin');
