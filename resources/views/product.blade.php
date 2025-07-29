@extends('layouts.main')

@section('title', 'Produto')

@section('content')

@if($id != null)
    <p>Exibindo o ID do produto: {{$id}}</p>
@endif

@endsection