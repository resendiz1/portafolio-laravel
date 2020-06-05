@if($errors -> any())

@foreach($errors->all() as $error)

<ul>
  <li class="text-danger mx-0" >{{$error}} </li>
    
</ul>


@endforeach
@endif