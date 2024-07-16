<?php

use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\ProductController;
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


Route::prefix('admin')->as('admin.')->group(function () {
    Route::get('/', function () {
       return view('admin.dashboard');
    });

    Route::prefix('catalogue')->as('catalogue.')->group(function(){
        Route::resource('/',CatalogueController::class);
    });
    Route::prefix('product')->as('product.')->group(function(){
        Route::resource('/',ProductController::class);
        Route::get('{id}/edit', [ProductController::class, 'edit']);
    });

});