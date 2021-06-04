<?php

use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('admin/products/create', [ProductController::class, 'create'])
    ->name('admin.products.create');

Route::post('admin/products/create', [ProductController::class, 'store'])
    ->name('admin.products.store');
