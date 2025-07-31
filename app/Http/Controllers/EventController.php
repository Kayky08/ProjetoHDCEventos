<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();

        return view('welcome', ['events' => $events]);
    }

    public function create(){
        return view('events.create');
    }

    public function store(Request $request){
        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        //Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;

            //Pegando o tipo da imagem (.jpg, png, svg, etc..)
            $extension = $requestImage->extension();

            //Criando um nome unico para a imagem
            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;

            //Fazendo o upload da imagem no caminho correto
            $requestImage->move(public_path('img/events/'), $imageName);

            //Salvando o caminho da imagem
            $event->image = $imageName;
        }

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!!!');
    }
}