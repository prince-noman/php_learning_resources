<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialLoginController;

Route::get('/dashboard', function () {
    return auth()->user();
});
Route::get('/', function () {
    return view('login');
});

//Google
Route::get('/login/goolge', [SocialLoginController::class, 'googleRedirect'])->name('login.google');
Route::get('/login/goolge/callback', [SocialLoginController::class, 'googleCallback']);

//Google
Route::get('/login/github', [SocialLoginController::class, 'githubRedirect'])->name('login.github');
Route::get('/login/github/callback', [SocialLoginController::class, 'githubCallback']);