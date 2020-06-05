
@extends('layout')
@section('titulo', $portafolio->titulo)
@section('contenido')
<div class="container">
    <div class="bg-white p-5 shadow rounded ">



<h1 >{{$portafolio ->titulo}}</h1>

<p class="text-secondary">{{$portafolio->descripcion}}</p>

<span class="text-black-50">{{$portafolio->created_at->diffForHumans()}}</span>
<br>
<div class="d-flex justify-content-between">
    <a href="{{route('portafolio.index')}}">
        Regresar</a>

@auth

<div class="btn-group btn-group-sm">
    <a class="btn btn-primary" href="{{route('portafolio.edit', $portafolio)}}">Editar</a>

    <a class="btn btn-danger" href="#" onclick="document.getElementById('delete-proyect').submit()">Borrar</a>
</div>

</div>



<form action="{{route('portafolio.destroy', $portafolio)}}" id="delete-proyect" method="POST" class="d-none">
    @csrf @method('DELETE')
</form>



    @endauth


        @endsection
</div>
</div>