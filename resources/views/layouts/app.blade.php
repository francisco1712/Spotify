<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="shortcut icon" type="image/jpg" href="../../images/pngegg.png"/>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio</title>
        {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <x-embed-styles />
    </head>
    <body class="bg-secondary">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="/"><img src="https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_RGB_White.png" alt="" style="height: 60px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/list">@lang('List')</a>
                    </li>

                </ul>
            </div>
            @auth
        
            @endauth
            <ul class="bg-dark text-light" style="list-style:none;">
                @guest
                    <li class="p-1"><a class="text-light" style="text-decoration: none;" href="{{ route('login') }}">Login</a></li>
                    <li class="p-1"><a class="text-light" style="text-decoration: none;" href="{{ route('register') }}">Registrarse</a></li>
                @else
                    <span class="p-4">Hola, {{ auth()->user()->name }}</span><br>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/add">@lang('Add song')</a>
                    </li>
                    <a href="#" class="text-light" onclick="event.preventDefault();
        
                        document.getElementById('logout-form').submit();">Cerrar Sesion</a>
                @endguest
            </ul>
        
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </nav>
        @yield('content')
        <footer class="page-footer font-small blue" style="margin-top: 335px;">

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3 bg-dark text-light">© 2021 Copyright:
              <a href="https://www.instagram.com/fran1217nb/" target="_blank"> franavarro.com</a>
            </div>
            <!-- Copyright -->
          
        </footer>
          
    </body>
</html>
