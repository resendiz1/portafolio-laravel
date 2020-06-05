<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('titulo', 'No tittle')</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script>

</head>
<body>
<div id="app" class="justify-content-between">
    <header>
        @include('partials/nav')
        @include('partials.session-status')
    </header>
<main>
    @yield('contenido')
</main>

<footer class="bg-white text-blakc-50 text-center py-3  shadow mt-5">
    {{config('app.name')}} Copyright| {{date('Y')}}
</footer>
    
</div>



</body>
</html>