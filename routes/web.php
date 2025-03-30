<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Client\ProductController as ClientProductController;
use App\Http\Controllers\Client\HomeController as ClientHomeController;

Route::get('/', [ClientHomeController::class,'home']);
    return view('welcome');
;

// Route dành cho admin
Route::prefix('admin')->group(function(){
    Route::resource('product', AdminProductController::class);
});

// Route dành cho client
Route::get('product', action: [ClientProductController::class, 'index']);
Route::get('product/{id}', [ClientProductController::class, 'show']);
