<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index']);            // Load semua data produk
Route::post('/insert', [ProductController::class, 'store']);     // Menambahkan produk baru
Route::post('/update/{id}', [ProductController::class, 'update']); // Update data produk berdasarkan ID
Route::get('/delete/{id}', [ProductController::class, 'destroy']); // Hapus produk berdasarkan ID
