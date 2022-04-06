<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MarchendiseController;

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



Route::get('/daftar', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/daftar', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');

Route::post('/login', [LoginController::class, 'auth']);

Route::post('/logout', [LoginController::class, 'logout']);  

Route::get('/', [MarchendiseController::class, 'index'])->middleware('auth');

Route::get('/detail', function () {
    return view('detail');
})->middleware('auth');

Route::get('/beli', function () {
    return view('beliLangsung');
})->middleware('auth');

Route::get('/pembelian', function () {
    return view('pembelian');
})->middleware('auth');


Route::get('/admin', [MarchendiseController::class, 'admin'])->middleware('auth','admin');

Route::get('/pesanan', function () {
    return view('pesanan');
})->middleware('auth','admin');

Route::get('/tambah-marchendise', [MarchendiseController::class, 'viewTambah'])->middleware('auth','admin');

Route::post('/tambah-marchendise', [MarchendiseController::class, 'store']);

Route::get('/ubah-marchendise/{id}',   [MarchendiseController::class, 'viewEdit'])->middleware('auth','admin');

Route::put('/ubah-marchendise/{id}',   [MarchendiseController::class, 'edit']);

Route::get('/hapus-marchendise/{id}',   [MarchendiseController::class, 'viewHapus'])->middleware('auth','admin');

Route::delete('/hapus-marchendise/{id}',   [MarchendiseController::class, 'destroy']);

Route::get('/profile', function () {
    return view('ubahProfile');
})->middleware('auth');