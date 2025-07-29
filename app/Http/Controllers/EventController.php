<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
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
    }

    public function create(){
        return view('events.create');
    }
}
