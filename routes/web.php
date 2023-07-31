<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MarchendiseController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\FavoritController;

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


// -------------------- Route Register --------------------- //
Route::get('/daftar', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/daftar', [RegisterController::class, 'store']);


// -------------------- Route Login --------------------- //
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');

Route::post('/login', [LoginController::class, 'auth']);

Route::post('/logout', [LoginController::class, 'logout']);  

// ----------------- Route Marchendise------------------- //
Route::get('/', [MarchendiseController::class, 'index'])->middleware('auth');

Route::get('/admin', [MarchendiseController::class, 'admin'])->middleware('auth','admin');

Route::get('/tambah-marchendise', [MarchendiseController::class, 'viewTambah'])->middleware('auth','admin');

Route::post('/tambah-marchendise', [MarchendiseController::class, 'store']);

Route::get('/ubah-marchendise/{id}',   [MarchendiseController::class, 'viewEdit'])->middleware('auth','admin');

Route::put('/ubah-marchendise/{id}',   [MarchendiseController::class, 'edit']);

Route::get('/hapus-marchendise/{id}',   [MarchendiseController::class, 'viewHapus'])->middleware('auth','admin');

Route::delete('/hapus-marchendise/{id}',   [MarchendiseController::class, 'destroy']);

Route::get('/detail-marchendise/{id}', [MarchendiseController::class, 'viewDetail'])->middleware('auth');

// ----------------- Route Favorit------------------- //
Route::get('/favorit', [FavoritController::class, 'index'])->middleware('auth');

Route::post('/favorit/tambah/{id}', [FavoritController::class, 'store'])->middleware('auth');

Route::delete('/favorit/hapus/{id}', [FavoritController::class, 'destroy'])->middleware('auth');


// ------------------ Route Profile ---------------------- //
Route::get('/profile',   [ProfileController::class, 'index'])->middleware('auth');

Route::put('/profile',   [ProfileController::class, 'edit'])->middleware('auth');


// ------------------ Route Transaksi ---------------------- //
Route::get('/beli-marchendise/{id}', [TransaksiController::class, 'viewBeli'])->middleware('auth');

Route::post('/beli-marchendise/{id}', [TransaksiController::class, 'store'])->middleware('auth');

Route::get('/pembelian', [TransaksiController::class, 'viewDaftarPembelian'])->middleware('auth');

Route::get('/pesanan', [TransaksiController::class, 'viewPesananUser'])->middleware('auth','admin');


// ----------------- Route Cari (AJAX)------------------- //
Route::get('/search', [SearchController::class, 'liveSearch'])->middleware('auth');




