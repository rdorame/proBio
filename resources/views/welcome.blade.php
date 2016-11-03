<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ProBio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/welcome.css" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-left links">
                    <a><img alt="BerryCloud" height= "80 px" width = "80px" src="{{ asset('/img/logo.png') }}"></a>
                </div>

                <div class="top-right links">
                    <a href="{{ url('/register') }}">About</a>
                  <a href="{{ url('/register') }}">Eventos</a>
                  <a href="{{ url('/register') }}">Plantas</a>
                  <a href="{{ url('/register') }}">Invernadero</a>
                  <a href="{{ url('/register') }}">Tienda</a>
                  <a href="{{ url('/register') }}">Ayuda</a>
                  <a href="{{ url('/login') }}">Login</a>
                  <a href="{{ url('/register') }}">Registro</a>
                </div>
            @endif

            <div class="content">
                <img alt="BerryCloud" height= "300 px" width = "300px" src="{{ asset('/img/logo.png') }}">
                <br>
                <h1> Página en construcción </h1>


            </div>
        </div>
    </body>
</html>
