<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RegistrationController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->name('login.post');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('registration', [RegistrationController::class, 'registration'])->name('registration');

Route::middleware(['auth', 'hasRole'])->prefix('admin')->name('admin.')->group(function () {
    Route::prefix('products')->name('products.')->group(function(){
        Route::get('create', [ProductController::class, 'create'])->name('create');
        Route::post('create', [ProductController::class, 'store'])->name('store');
        Route::get('/', [
            'uses' => 'ProductController@index',
            'inRoles' => ['admin', 'editor', 'report'],
        ])->name('list');

        Route::get('/{id}/edit', [
            'uses' => 'ProductController@edit',
            'inRoles' => []
        ])->name('edit');

        Route::put('/{id}/edit', [ProductController::class, 'update'])->name('update');

        Route::get('/{id}/show', [ProductController::class, 'show'])->name('show');

        Route::delete('/delete', [
            'uses' => 'ProductController@destroy',
            'inRoles' => 'admin',
        ])->name('delete');
    });
    Route::prefix('categories')->name('category.')->group(function(){
        Route::delete('/delete', [
            'uses' => 'CategoryController@destroy',
            'inRoles' => ['admin', 'editor', 'report'],
        ])->name('delete');

        Route::get('/', [
            'uses' => 'CategoryController@index',
            'inRoles' => ['admin', 'editor', 'report'],
        ])->name('index');
    });
});
