<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;

Route::get('/students', [StudentController::class, 'index']);
Route::get('/profiles', [ProfileController::class, 'index']);
Route::get('/comments', [CommentController::class, 'index']);
Route::get('/subjects', [SubjectController::class, 'index']);