



@csrf
<div class="form-group">
    <label for="titulo">Titulo</label>
<input 
    class="form-control @error('titulo') is-invalid @enderror" 
    type="text" 
    id="titulo" 
    name="titulo" 
    value="{{old('titulo', $portafolio->titulo) }}">
</div>



<div class="form-group">
    <label for="descripcion">Descrioción </label>
<input 
    class="form-control @error('descripcion') is-invalid @enderror" 
    type="text" 
    id="descripcion" 
    name="descripcion" 
    value="{{old('descripcion', $portafolio->descripcion)}}">
</div>




<div class="form-group">
    <label for="url">URL </label> 
<input 
    class="form-control @error('url') is-invalid @enderror " 
    type="text" 
    id="url" 
    name="url" 
    value="{{old('url', $portafolio->url)}}">

</div>


<button class="btn btn-success btn-block">{{$btnText}}</button>
<a class="btn btn-link btn-block" href="{{route('portafolio.index')}}">Cancelar</a>
