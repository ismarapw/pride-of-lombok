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
    return view('marchendise');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/pembelian', function () {
    return view('pembelian');
});

Route::get('/pesanan', function () {
    return view('pesanan');
});

Route::get('/admin', function () {
    return view('admin');
});