<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Control Gasto') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->   
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                
                @guest
                    <img src="https://wallo.com/media/aplicacion-control-gastos-android.png" width="30" height="30" class="d-inline-block align-top" alt="">&nbsp;&nbsp;CONTROL DE GASTOS
                @else
                <img src="https://wallo.com/media/aplicacion-control-gastos-android.png" width="30" height="30" class="d-inline-block align-top" alt="">&nbsp;&nbsp;CONTROL DE GASTOS &nbsp; &nbsp; &nbsp; &nbsp;
                    <a class="btn btn-default" href="{{route('usuarios')}}">Usuarios</a>
                    <a class="btn btn-default" href="{{route('categoria')}}">Categoria</a>
                    <a class="btn btn-default" href="{{route('cargo')}}">Cargo</a>
                    <a class="btn btn-default" href="#">Permiso</a>
                    <a class="btn btn-default" href="#">Tipo</a>
                    <a class="btn btn-default" href="#">Control</a>
                @endguest

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="https://png.pngtree.com/element_our/png/20181228/avatar-vector-icon-png_296057.jpg" width="30px">
                                    {{ Auth::user()->usu_cedula  }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown">
                                   
                                    <div class="">
                                        <img src="https://png.pngtree.com/element_our/png/20181228/avatar-vector-icon-png_296057.jpg" width="150px" height="150px">
                                    </div>

                                    <div>
                                        <h5 style="text-align: center;font-size: 12pt;font-family: BlackWay;">Bienvenido</h5>
                                        <h6 style="text-align: center;font-size: 10pt;font-family: BlackWay;">{{ Auth::user()->usu_nombre }}</h6>
                                    </div>
                                
                                        <a style="text-align: center;" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <img src="https://cdn-icons-png.flaticon.com/512/35/35702.png" width="15px">
                                        Cerrar Session
                                        </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
