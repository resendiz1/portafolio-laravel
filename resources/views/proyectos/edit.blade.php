@extends('layout')
@section('titulo', 'Editando')
@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-7 col-lg-5 shadow bg-white py-4 px-4">
            <h1>Editar portafolio</h1>
            @include('partials.ValidationErrors')
            <form action="{{route('portafolio.update', $portafolio)}}" method="POST">
             @method('PATCH')
           
            @include('proyectos.formulario',['btnText' => 'Guardar'] )
            </form>
    
            @endsection
        </div>
    </div>
</div>
