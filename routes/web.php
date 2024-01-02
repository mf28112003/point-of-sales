<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SatuanController;
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

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);
// Route::get('register', [HomeController::class, 'register']);


Route::middleware('auth')->group(function() {
    Route::get('admin',[AdminController::class, 'index']);
    Route::get('/', [HomeController::class, 'index']);
    
    Route::prefix('admin')->group(function() {
        Route::resource('user', UserController::class);
        //kategori//
        Route::resource('kategori', KategoriController::class);
        //satuan//
        Route::resource('satuan', SatuanController::class);
        //barang//
        Route::resource('barang', BarangController::class);
        //gudang//
        Route::resource('gudang', GudangController::class);
    
    //cutomer//
    Route::get('customer', [CustomerController::class, 'index']);
    Route::get('customer/create', [CustomerController::class, 'create']);
    Route::post('customer', [CustomerController::class, 'store']);
    Route::get('customer/{customer}', [CustomerController::class, 'show']);
    Route::get('customer/{customer}/edit', [CustomerController::class, 'edit']);
    Route::put('customer/{customer}', [CustomerController::class, 'update']);
    Route::delete('customer/{customer}', [CustomerController::class, 'destroy']);
    });
    
});

