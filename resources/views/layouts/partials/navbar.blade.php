{{--<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">--}}
{{--    <div class="container-fluid">--}}
{{--        <a class="navbar-brand" href="{{url('/')}}">Zoológico</a>--}}
{{--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"--}}
{{--                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--            <ul class="navbar-nav me-auto mb-2 mb-lg-0">--}}
{{--                --}}{{--@if(Auth::check() )--}}

{{--                <li class="nav-item">--}}
{{--                    <a href="{{route('wachete.index')}}"--}}
{{--                       class="nav-link {{ request()->routeIs('wachete.*') && !request()->routeIs('wachete.create')? ' active' : ''}}">Listado--}}
{{--                        de animales</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{route('wachete.create')}}"--}}
{{--                       class="nav-link {{ request()->routeIs('wachete.create')? ' active' : ''}}">Nueva apuesta</a>--}}
{{--                </li>--}}

{{--            </ul>--}}
{{--            --}}{{--@endif --}}
{{--            @if(Auth::check() )--}}
{{--                <form class="d-flex">--}}
{{--                    <input id="busqueda" class="form-control mr-sm-3" type="text" placeholder="Buscar"--}}
{{--                           aria-label="Buscar">--}}
{{--                </form>--}}

{{--                <ul class="navbar-nav navbar-right">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('profile.show') }}" class="nav-link">--}}
{{--                            {{ Auth::user()->name }}--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('logout') }}" class="nav-link"--}}
{{--                           onclick="event.preventDefault();--}}
{{--                   document.getElementById('logout-form').submit();">--}}
{{--                            <span class="glyphicon glyphicon-off"></span>--}}
{{--                            Cerrar sesión--}}
{{--                        </a>--}}
{{--                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                            @csrf--}}
{{--                        </form>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            @else--}}
{{--                <ul class="navbar-nav navbar-right">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{url('login')}}" class="nav-link">Login</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}

<header class="header">
    <nav class="navbar navbar-expand-lg header-navbar fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand logo" href="#">Wachete</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link active" href="#">Todas las apuestas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Retos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Deportes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Futbol</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Baloncesto</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Tenis</a>
                        </div>
                    </li>

                </ul>
                <ul class="navbar-nav ml-auto">
                    <button class="btn">Perfil</button>
                </ul>
            </div>
        </div>
    </nav>
</header>




