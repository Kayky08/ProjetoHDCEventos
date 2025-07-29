@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<h1>Titulo</h1>

<img src="/img/banner.jpg" alt="Banner">

{{--Condicionais no Blade--}}
<h2>Condicionais</h2>
@if ($nome == "Pedro")
    <p>O nome é Pedro e ele tem {{$idade}} anos</p>
@else
    <p>O nome não é Pedro, o nome é {{$nome}} e ele tem {{$idade}} anos</p>
@endif

<br>

{{--Laço de Repetição no Blade--}}
<h2>Laços de Repetição</h2>
@for ($i = 0; $i < count($array); $i++)
    <p>{{$array[$i]}} e o indice é {{$i}}</p>
@endfor

<br>

@foreach ($nomes as $nome)
    <p>O nome é {{$nome}} e o indice é {{$loop->index}}</p>
@endforeach

<br>

{{--PHP no Blade--}}
<h2>PHP no Blade</h2>
@php
    $nome = "Carlinhos";
    echo $nome;
@endphp

{{--Comentario em Blade--}}
@endsection