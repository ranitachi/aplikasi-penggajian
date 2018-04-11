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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('data-bank', 'dataBankController');
Route::resource('jenis-cuti', 'jenisCutiController');
Route::get('tambah-data-cuti', function () {
    return view('pages.jenisCuti.form');
});
Route::resource('jenis-golongan', 'jenisGolonganController');
Route::resource('jabatan', 'dataJabatanController');
Route::resource('jenis-potongan', 'jenisPotonganController');
Route::resource('komponen-gaji', 'komponenGajiController');