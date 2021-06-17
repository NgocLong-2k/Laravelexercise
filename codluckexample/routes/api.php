<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::fallback(function () {
    return response()->json(['message' => 'Not Found.'], 404);
});

Route::post('login', 'Api\LoginController@authenticate')->name('login');

Route::middleware('auth:api')->prefix('products')->name('products.')->group(function(){
    Route::get('/', ['uses' => 'Api\ProductController@index'])->name('index');

    Route::get('/{id}/show', ['uses' => 'Api\ProductController@show'])
        ->name('show');
    Route::post('store', ['uses' => 'Api\ProductController@store'])
        ->name('store');
});

Route::prefix('categories')->name('categories.')->group(function(){
    Route::get('/', ['uses' => 'Api\CategoryController@index'])->name('index');

    Route::get('/{id}/show', ['uses' => 'Api\CategoryController@show'])
        ->name('show');

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
