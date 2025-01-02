<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/', function(){
    return "Hola amigos";
});

Route::get('/posts', function(){
    return "Aquí van los post";
});

Route::get('/posts/{post}', function ($post) {
    return "Aquí se mostrará el post con parámetro {$post}";
}); */

Route::get('/', [HomeController::class, 'index']);

Route::get('/posts', [PostController::class, 'post']);
Route::get('/posts/create', [PostController::class, 'create']);
route::get('/posts/{post}', [PostController::class, 'show']);