<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <div class="navbar-fixed">
            <nav class="white">
                <div class="nav-wrapper">
                    <div class="container">
                        <a href="{{ url('/') }}" class="brand-logo"><img src="/img/logo.png" class="responsive-img" width="160px" alt=""></a>
                        <a href="http://nissan.com.mx" class="hide-on-med-and-down right"><img src="/img/nissan.png" class="responsive-img" width="65px" alt=""></a>
                        <a href="#" class="sidenav-trigger right" data-target="mobil"><i class="material-icons grey-text">menu</i></a>
                        <ul class="hide-on-med-and-down right">
                            <li><a href="{{ route('blog') }}" class="grey-text">Blog</a></li>
                            @auth
                                <li>
                                    <a class='dropdown-trigger grey-text' href='#' data-target='dropdown'>{{ Auth::user()->name }}<i class="material-icons grey-text right">arrow_drop_down</i></a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <ul id="dropdown" class="dropdown-content">
            <li><a href="{{ route('users.index') }}">Usuarios</a></li>
            <li><a href="{{ route('tags.index') }}">Etiquetas</a></li>
            <li><a href="{{ route('categories.index') }}">Categorias</a></li>
            <li><a href="{{ route('posts.index') }}">Articulos</a></li>
            <li><a href="{{ route('messages.index') }}">Mensajes</a></li>
            <li>
                <a href="{{ route('logout') }}" class="black-text" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout<i class="material-icons right">close</i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>

        <ul class="sidenav" id="mobil">
            <li><a href="{{ url('/') }}" class="grey-text">Inicio</a></li>
            <li><a href="{{ route('blog') }}" class="grey-text">Blog</a></li>
        </ul>
    </header>


        @if(session('info'))
            <div class="container section">
                <div class="row">
                    <div class="col s12 green lighten-4">
                        <p class="green-text text-darken-4">{{ session('info') }}</p>
                    </div>
                </div>
            </div>
        @endif

        @if(count($errors))
            <div class="container section">
                <div class="row">
                    <div class="col s12 red lighten-4">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li class="red-text text-accent-4">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif

    @yield('content')
    

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>

    @yield('scripts')

    
</body>
</html>
