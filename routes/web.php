<?php

use Illuminate\Support\Facades\Route;

//Criando a rota para o Home e mandando variaveis para serem exibidas
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

//Fazendo uma view que pode ou não receber parametros
Route::get('/produtos', function (){
    //Fazendo uma requizição
    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

//Enviando parametros para resgatar pela pagina
Route::get('/produto/{id?}', function ($id = null){
    return view('product', ['id' => $id]);
});