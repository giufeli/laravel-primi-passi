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
    return view('home');
});

Route::get('/boolean', function () {
    return view('boolean');
});

Route::get('/youtube', function () {
    return view('youtube');
});

Route::get('/apple', function () {
    return view('apple');
});
