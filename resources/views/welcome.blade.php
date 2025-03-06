<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="{{ asset('css/bodyPrincipal.css') }}" rel="stylesheet" />
    </head>
    <body class="principalBody">
        <x-header :title="'Página Principal'"/>
        @yield('content')
    </body>
    <h1>Hola</h1>
</html>
