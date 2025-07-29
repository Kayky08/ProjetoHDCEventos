<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

//Criando rotas e conectando com o controller
Route::get('/', [EventController::class, 'index']);//Home
Route::get('/eventos/criar', [EventController::class, 'create']);//Criar

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