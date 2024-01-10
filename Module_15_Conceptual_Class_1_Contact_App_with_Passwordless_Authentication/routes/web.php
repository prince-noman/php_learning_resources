<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;


// Route after login
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Login Route
Route::view('auth/login', 'auth.login')->middleware('guest')->name('login');
Route::post('/auth/login', [LoginController::class, 'login'])->name('auth.login');

Route::get('auth/session/{user:email}', [LoginController::class, 'loginByMagicLink'])->name('auth.session')->middleware(['signed', 'guest']);

// Registration Route
Route::view('/auth/register', 'auth.register')->middleware('guest')->name('register');



// Contact Routes
Route::controller(ContactController::class)
    ->prefix('contacts')
    ->as('contacts.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::post('/{id}/update', 'update')->name('update');
        Route::delete('/{id}/delete', 'destroy')->name('delete');
});