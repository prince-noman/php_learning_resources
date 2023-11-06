<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;



Route::get('/', function () {
    return view('welcome');
});

//==============
//Basic Routing
//==============

// Route::get('/myroute', function(){
//     return "Welcome To Our Application";
// });
// Route::get('/contact', function(){
//     return "Welcome To Contact Page";
// });
// Route::get('/contact/mypage', function(){
//     return "Welcome To Contact Page";
// });

//===================
// Route Redirection
//===================

// Route::redirect('/myroute', '/contact');
// Route::redirect('/myroute', '/contact', 301);

//===================
// Route to a View
//===================

// Route::view('/test', 'Test');
// Route::view('/test', 'Test', ['title' => 'My Title']);

//===============================
// Route With required parameters
//===============================

// Route::get('/user/{id}/profile/{name}', function(string $id, string $name){
//     return "Welcome To User $id - $name";
// });

//===============================
// Route With optional parameters
//===============================

// Route::get('/user/{id}/profile/{name?}', function(string $id, ?string $name = ""){
//     return "Welcome To User $id - $name";
// });

//===========
//Named Route
//===========

// Route::get('/blogpost', function(){
//     return "Post page";
// })->name('post');


//===========================
// Route Grouping & Prefixing
//===========================

// Route::group(['prefix' => 'user'], function () {
//     Route::get('/', function(){
//         return "User page";
//     })->name('user');

//     Route::get('/{id}', function($id){
//         return "User page $id";
//     })->name('user.show');

//     Route::get('/{id}/edit', function($id){
//         return "User page $id";
//     })->name('user.edit');
// });

//====================================================================
//This pattern of route we are going to use throughout Laravel Career
//====================================================================

// Route::get('/test/{id}', [TestController::class, 'test'])->name('user');