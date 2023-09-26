<?php

use App\Http\Controllers\HomeController;
use App\Models\Produk;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PemasokController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PembelianController;

Route::get('/', [HomeController::class, 'index']);  
Route::get('profile', [HomeController::class, 'profile']);  
Route::get('contact', [HomeController::class, 'contact']);  
Route::get('faq', [HomeController::class, 'faq']);  
Route::resource('/barang', BarangController::class);
Route::resource('/produk', ProdukController::class); 
Route::resource('/pemasok', PemasokController::class);  
Route::resource('/pelanggan', PelangganController::class);  
Route::resource('/users', Userscontroller::class); 
Route::resource('/pembelian', PembelianController::class);  

Route::get('download/produk', [ProdukController::class, 'exportData'])->name('export.produk');  
// Route::put('/produk/{id}', 'ProdukController@update')->name('update_produk');
