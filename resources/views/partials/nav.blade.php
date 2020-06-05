
<nav class="navbar navbar-light bg-white navbar-expand-sm shadow-sm mb-5">
    <button class="navbar-toggler" 
    type="button" 
    data-toggle="collapse" 
    data-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" 
    aria-expanded="false" 
    aria-label="{{ __('Toggle navigation') }}">
    
        <span class="navbar-toggler-icon"></span>
      </button>   

<a href="{{route('home')}}" class="navbar-brand">{{config('app.name')}} 
    @auth
   <span>de:  {{auth()->user()->name}} </span>
    @endauth
</a>

<div class="container  text-center">

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav nav-pills">
    <li class="nav-item "><a class="nav-link {{ setActivo('home')}}" href="{{route('home')}}">Home</a></li>
    <li class="nav-item "><a class="nav-link {{ setActivo('about')}}" href="{{route('about')}}">Acerca de</a></li>
    <li class="nav-item "><a class="nav-link {{ setActivo('portafolio.*')}}" href="{{route('portafolio.index')}}">Portafolio</a></li>
    <li class="nav-item "><a class="nav-link {{ setActivo('contact')}}" href="{{route('contact')}}">Contacto</a></li>
    @guest
    <li class="nav-item "><a class="nav-link {{ setActivo('login')}}" href="{{route('login')}}">Login</a></li>
    @else 
    <li class="nav-item"> <a class="nav-link" href="#"onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Cerrar Sesion</a>
    </li>
    @endguest
    </ul>
</div>

    
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
</div>



