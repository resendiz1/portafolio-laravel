@extends('layout')
@section('titulo', 'portafolio')
@section('contenido')

<div class="container">
<div class="d-flex justify-content-between align-item-center mb-3">
    <h3>Seccion del portafolio</h3>

    @auth
    <a class="btn btn-primary" href="{{route('portafolio.create')}}">Agregar proyectos</a>  
    @endauth
 

</div>

<ul class="list-group">
@if($portafolio)
    @foreach ($portafolio as $portafolionum)
<li class="list-group-item border-0 shadow-sm mb-4">
    <a href="{{route('portafolio.show', $portafolionum)}}" class="d-flex justify-content-between align-item-center">
        
        {{$portafolionum->titulo}}
        <br> <span class="text-info">{{$portafolionum->created_at->diffForHumans()}}</span>
    </a>
</li>
    @endforeach



    {{$portafolio->links()}}
    @else
        <li class="list-group-item border-0 shadow-sm mb-4">No hay proyectos para mostrar</li>
    @endif
</ul>

</div>





@endsection