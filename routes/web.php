<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function(){
    return "Hola amigos";
});

Route::get('/posts', function(){
    return "Aquí van los post";
});

Route::get('/posts/{post}', function ($post) {
    return "Aquí se mostrará el post con parámetro {$post}";
});