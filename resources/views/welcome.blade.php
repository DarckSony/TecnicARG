<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title style="transition-delay: 1">Técnicos MDP</title>

        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <!-- Styles -->
       
        <link href="favicon.ico" type="image/x-icon" rel="shortcut icon" />

        <style>
            html, body {
                background-color: black;
                color: white;
                font-family: 'Times New Roman', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    
        <ul class="nav nav-tabs">
                <li role="presentation"><a href="#">Home</a></li>
                <li role="presentation"><a href="#">Perfil </a></li>
                <li role="presentation"><a href="#">Contaco</a></li>

</ul>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <button type="button" class="btn btn-default navbar-btn">
                        <a href="{{ url('/login') }}">Ingresar</a>
                        </button>
                        <button type="button" class="btn btn-default navbar-btn">
                        <a href="{{ url('/register') }}">Registrarse</a>
                        </button>
                    @endif
                </div>
            @endif
            <div class="content">
                <div class="title m-b-md">
                    Técnicos Mar del Plata
                </div>
                <div class="links">
                    <a href="https://facebook.com">Facebook</a>
                    <a href="https://instagram.com">Instagram</a>
                    <a href="https://twtitter.com">Twtitter</a>
                    <a href="https://google.com">Gmail</a>
                    <a href="https://hotmail.com">Hotmail</a>
                </div>
            </div>
        </div>
    </body>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="min-width: 2%;">
    2%
  </div>
</div>
</html>
