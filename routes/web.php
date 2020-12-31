<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('layouts.app');
// });

Route::get('/', function () {
    return view('dashboard.index');
});

Route::resource('/student', 'StudentsController');

Route::group(['prefix'=> '/laporan'], function() {
    Route::get('/rekaplaporan','LaporanController@rekaplaporan')->name('laporan.rekaplaporan');
    Route::get('/jumlahdosen','LaporanController@jumlahdosen')->name('laporan.jumlahdosen');
    Route::get('/jumlahmahasiswa','LaporanController@jumlahmahasiswa')->name('laporan.jumlahmahasiswa');
});