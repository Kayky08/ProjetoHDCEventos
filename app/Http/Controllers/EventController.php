<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Models\User;

/**
 * para cirar um controler é necessario utilizar o comando:
 * 
 * php artisan make:controler nome_controller
 */

class EventController extends Controller
{
    public function index(){
        $search = request('search');

        if($search){
            $events = Event::where([
                ['title','like','%'.$search.'%']
            ])->get();
        }
        else{
            $events = Event::all();
        }

        return view('welcome', ['events'=>$events, 'search'=>$search]);
    }

    //Criando o objeto
    public function create(){
        return view('events.create');
    }

    //Guardando os dados do objeto
    public function store(Request $request){
        //Criando o objeto
        $event = new Event;

        //Definindo os atributos do objeto
        $event->title = $request->title;
        $event->date = $request->date;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items;

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

        $user = Auth::user();
        $event->user_id = $user->id;

        //Salvando os dados
        $event->save();

        //Retornando uma mensagem de sucesso ao criar o evento
        return redirect('/')->with('msg', 'Evento criado com sucesso!!!');
    }

    public function show($id){
        $event = Event::findOrFail($id);

        $eventOwner = User::where('id', $event->user_id)->first()->toArray();

        return view('events.show', ['event' => $event, 'eventOwner' => $eventOwner]);
    }
}