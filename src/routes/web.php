<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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


// Route Login dan Register
Route::get('/daftar', [RegisterController::class, 'index']);

Route::post('/daftar', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index']);




// Route Pembeli
Route::get('/', function () {
    return view('marchendise');
});


Route::get('/detail', function () {
    return view('detail');
});

Route::get('/beli', function () {
    return view('beliLangsung');
});

Route::get('/pembelian', function () {
    return view('pembelian');
});


// Route Penjual/Admin
Route::get('/pesanan', function () {
    return view('pesanan');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/tambah-marchendise', function () {
    return view('tambahMarchendise');
});

Route::get('/ubah-marchendise', function () {
    return view('ubahMarchendise');
});

Route::get('/profile', function () {
    return view('ubahProfile');
});