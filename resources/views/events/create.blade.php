@extends('layouts.main')

@section('title', 'Criar Eventos')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu Evento</h1>

    <form action="/eventos" method="POST" enctype="multipart/form-data">
        <!--Diretiva necessaria para enviar o formulário-->
        @csrf

        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>

        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
        </div>

        <div class="form-group">
            <label for="city">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento">
        </div>

        <div class="form-group">
            <label for="private">O evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>

        <div class="form-group">
            <label for="description">Evento:</label>
            <textarea type="text" class="form-control" id="description" name="description" placeholder="O que vai acontecer no evento"></textarea>
        </div>

        <input type="submit" value="Criar Evento" class="btn btn-primary">
    </form>
</div>

@endsection