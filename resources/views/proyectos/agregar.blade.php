@extends('layout')
@section('titulo', 'Crear proyecto')
@section('contenido')

<div class="container">
        <div class="row justify-content-center">
                <div class="col-12 col-md-9 col-lg-7 shadow bg-white py-4 px-4">

                        <h1>Seccion del portafolio</h1>
                        @include('partials.ValidationErrors')
                        <form action="{{route('portafolio.store')}}" method="POST">
                                 @include('proyectos.formulario', ['btnText'=>'Crear'])
                        </form>

                </div>
        </div>
</div>




@endsection