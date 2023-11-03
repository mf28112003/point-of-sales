<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\GudangController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('login', [HomeController::class, 'login']);
Route::get('register', [HomeController::class, 'register']);


Route::get('user', [UserController::class, 'index']);
Route::get('user/create', [UserController::class, 'create']);
Route::post('user', [UserController::class, 'store']);
Route::get('user/{User}', [UserController::class, 'show']);
Route::get('user/{user}/edit', [UserController::class, 'edit']);
Route::put('user/{user}', [UserController::class, 'update']);
Route::delete('user/{user}', [UserController::class, 'delete']);

//kategori//
Route::get('kategori', [KategoriController::class, 'index']);
Route::get('kategori/create', [KategoriController::class, 'create']);
Route::post('kategori', [KategoriController::class, 'store']);
Route::get('kategori/{kategori}', [KategoriController::class, 'show']);
Route::get('kategori/{kategori}/edit', [KategoriController::class, 'edit']);
Route::put('kategori/{kategori}', [KategoriController::class, 'update']);
Route::delete('kategori/{kategori}', [KategoriController::class, 'delete']);

//satuan//
Route::get('satuan', [SatuanController::class, 'index']);
Route::get('satuan/create', [SatuanController::class, 'create']);
Route::post('satuan', [SatuanController::class, 'store']);
Route::get('satuan/{satuan}', [SatuanController::class, 'show']);
Route::get('satuan/{satuan}/edit', [SatuanController::class, 'edit']);
Route::put('satuan/{satuan}', [SatuanController::class, 'update']);
Route::delete('satuan/{satuan}', [SatuanController::class, 'delete']);

//barang//
Route::get('barang', [BarangController::class, 'index']);
Route::get('barang/create', [BarangController::class, 'create']);
Route::post('barang', [BarangController::class, 'store']);
Route::get('barang/{barang}', [BarangController::class, 'show']);
Route::get('barang/{barang}/edit', [BarangController::class, 'edit']);
Route::put('barang/{barang}', [BarangController::class, 'update']);
Route::delete('barang/{barang}', [BarangController::class, 'delete']);

//gudang//
Route::get('gudang', [GudangController::class, 'index']);
Route::get('gudang/create', [GudangController::class, 'create']);
Route::post('gudang', [GudangController::class, 'store']);
Route::get('gudang/{gudang}', [GudangController::class, 'show']);
Route::get('gudang/{gudang}/edit', [GudangController::class, 'edit']);
Route::put('gudang/{gudang}', [GudangController::class, 'update']);
Route::delete('gudang/{gudang}', [GudangController::class, 'delete']);

