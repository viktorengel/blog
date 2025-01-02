<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post(){
        return "Post usando un controllador";
    }

    public function create(){
        return "Formulario creación de post";
    }

    public function show($post){
        return "Aquí se muestra el texto $post";
    }
}
