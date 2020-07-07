<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <!--<link href="{{ asset('static/css/gobiernoChubut.css') }}" rel="stylesheet" type="text/css"/>-->
        <link href="{{ asset('static/css/app.css') }}" rel="stylesheet" type="text/css"/>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!--<img src="{{ asset('images/escudo-chubut.png')}}" ALIGN="right" class="logo_superior_derecho pull-right align-right">-->
        <img src="{{ asset('images/albatroz-unpsjb.png')}}" ALIGN="right" class="logo_superior_derecho pull-right align-right">

            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link align-right" href="{{url('/')}}"><p class="nombre_organizacion"></p></a>
                </li>

            </ul>

            

        </nav>

        @yield('content')
    
        

    </body>
    <footer class="footer">
        <p class="direccion_footer"></p>
        <p class="telefono_footer"></p>
    </footer>
</html>

