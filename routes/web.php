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

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

// Route::get('/student', 'StudentsController@index')->name('student.index');

Route::get('/student', function () {
    return view('student.index');
});

// Route::get('/student', 'StudentsController@index');