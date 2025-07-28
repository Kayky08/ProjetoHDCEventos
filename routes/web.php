<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "Pedro";
    $idade = 19;

    $array = [3,5,7,9,11];
    $nomes = ["Andre","Fabiana","Luan","Patricia","Umberto"];

    return view('welcome', [
        'nome' => $nome,
        'idade' => $idade,
        'array' => $array,
        'nomes' => $nomes
    ]);
});

Route::get('/products', function (){
    return view('products');
});