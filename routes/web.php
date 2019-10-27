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

// voucher
Route::resource('/voucher', 'VoucherController')->middleware('auth');

// kartu perdana
Route::resource('/kartu', 'KartuPerdanaController')->middleware('auth');

// pembelian
Route::resource('/pembelian', 'PembelianController')->middleware('auth');

// penjualan
Route::resource('/penjualan', 'PenjualanController')->middleware('auth');

// report
Route::get('/report/harian', 'ReportController@indexHarian')->name('report.harian')->middleware('auth');
Route::get('/report/all', 'ReportController@indexAll')->name('report.all')->middleware('auth');
