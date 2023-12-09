<?php

use App\Http\Controllers\BananaController;
use App\Http\Controllers\OrangeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

// Middleware for single route
// Route::get('/index', [TestController::class, 'index'])->middleware('test');
// Route::get('/store', [TestController::class, 'store'])->middleware('test');

// Middleware for group route
Route::group( ['prefix' => 'test', 'middleware' => 'test'], function () {
    Route::get( 'test/index', [TestController::class, 'index'] );
    Route::get( 'test/store', [TestController::class, 'store'] );
} );
Route::prefix( 'test' )->middleware( 'test' )->group( function () {
    Route::get( '/index', [TestController::class, 'index'] );
    Route::get( '/store', [TestController::class, 'store'] )->middleware( ['test', 'auth', 'throttle:5,1'] );
    Route::get( '/store', [TestController::class, 'store'] );
    Route::get( '/store', [TestController::class, 'store'] );
    Route::get( '/store', [TestController::class, 'store'] );
    Route::get( '/store', [TestController::class, 'store'] )->withoutMiddleware( ['test', 'auth'] );
    Route::get( '/store', [TestController::class, 'store'] );
    Route::get( '/store', [TestController::class, 'store'] );
} );

// Middleware for all functions in a controller
Route::get( '/index', [TestController::class, 'index'] );
// Route::get('/store', [TestController::class, 'store']);
// Route::get('/show', [TestController::class, 'show']);

// Request Verification via Middleware
// Route::get('/index/{id}', [TestController::class, 'index'])->middleware('test');
// Route::get('/store', [TestController::class, 'store']);
// Route::get('/show', [TestController::class, 'show'])->middleware('test');
// Route::get('/update/{id}', [TestController::class, 'update'])->middleware('test');

//Resource Controller
// php artisan make:controller DemoController --resource
Route::resource( 'orange', OrangeController::class )->middleware( 'test' );

// Single Action Controller
// php artisan make:controller DummyController --invokable
Route::get( '/banana', BananaController::class );

Route::get( '/homes', [WebsiteController::class, 'home'] );
