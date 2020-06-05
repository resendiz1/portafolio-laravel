@extends('layout')
@section('titulo', 'About')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6  text-center">
            <img src="/img/about.svg" class="img-fluid mx-4 h-75" alt="Desarrolle">
        </div>
        <div class="col-12 col-lg-6 ">
            <h3 class="text-primary">About</h3>
            <p class="lead text-secondary">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi voluptate omnis ut, autem laborum corporis unde dolor dolorem maiores quod eaque rerum fugiat minima. Maiores quaerat animi eos adipisci esse?
            </p>
        <a class="btn btn-lg btn-primary btn-block" href="{{route('contact')}}">Contacto</a>

        <a class="btn btn-lg btn-outline-primary btn-block" href="{{route('portafolio.index')}}">Portafolio</a>
        </div>
    </div>
</div>

@endsection