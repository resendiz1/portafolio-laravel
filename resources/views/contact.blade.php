@extends('layout')
@section('titulo', 'Contacto')

@section('contenido')
<div class="container">

    <div class="row">
        <div class="col-12 col-md-10 col-lg-8 mx-auto ">
            



<form action="{{route('contact')}}" class="bg-white shadow rounded py-3 px-5" method="POST">
    <h1 class="m-auto text-center">Contacto</h1>
    <hr>
    @csrf


  <div class="form-group">
    <label for="name">Nombre</label>
<input 
class="form-control  @error('nombre') is-invalid @enderror" 
id="name" 
ype="text" 
name="nombre" 
placeholder="nombre" 
value="{{old('nombre')}}">

@error('nombre')
<span class="invalid-feedback" role="alert">
    <strong>
        {{$message}}
    </strong>
</span>
@enderror
</div>



<div class="form-group">
    <label for="email">Correo eléctronico</label>
<input 
class="form-control @error('email') is-invalid @enderror " 
id="email" 
type="email" 
name="email" 
placeholder="email" 
value="{{old('email')}}">
@error('email')
    <span class="invalid-feedback" role="alert">
    <strong>{{$message}}</strong>
    </span>
@enderror
</div>





<div class="form-group">
    <label for="asunto">Asunto</label>
<input 
class="form-control @error('asunto') is-invalid @enderror" 
id="asunto" 
type="text" 
name="asunto" 
placeholder="asunto..." 
value="{{old('asunto')}}">
@error('asunto')
<span class="invalid-feedback" role="alert">
<strong>{{$message}}</strong>
</span>
@enderror
</div>




<div class="form-group">
    <label for="contenido">Contenido</label>
<textarea 
class="form-control @error('contenido') is-invalid @enderror " 
name="contenido" 
placeholder="mensaje" 
id="contenido" 
cols="30" 
rows="10">{{old('contenido')}}</textarea>
@error('contenido')
<span class="invalid-feedback" role="alert">
<strong>{{$message}}</strong>
</span>
@enderror
</div>

<button class="btn btn-success form-control">Enviar</button>
</form>
        </div>
    </div>

</div>

@endsection