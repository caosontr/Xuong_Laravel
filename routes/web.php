<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Client\ProductController as ClientProductController;
use App\Http\Controllers\Client\HomeController as ClientHomeController;

// Route trang chủ
Route::get('/', [ClientHomeController::class, 'home'])->name('home');

// Route dành cho admin
Route::prefix('admin')->group(function () {
    Route::resource('product', AdminProductController::class); // CRUD cho sản phẩm
});

// Route dành cho client
Route::get('products', [ClientProductController::class, 'index'])->name('client.products'); // Hiển thị tất cả sản phẩm
Route::get('product/{id}', [ClientProductController::class, 'show'])->name('client.product.show'); // Hiển thị chi tiết sản phẩm
Route::get('products/search', [ClientProductController::class, 'search'])->name('client.products.search'); // Tìm kiếm sản phẩm
