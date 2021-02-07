<header class="header">
    <nav class="navbar navbar-expand-lg header-navbar fixed-top">
        <div class="container-fluid">

            <a class="navbar-brand logo" href="{{route('apuestas.index')}}"
               class="nav-link {{ request()->routeIs('wachete.*') && !request()->routeIs('wachete.create')? ' active' : ''}}">Wachete</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="{{route('apuestas.index')}}"
                           class="nav-link {{ request()->routeIs('apuestas.index')? ' active' : ''}}">Todas las
                            apuestas</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('retos.index')}}"
                           class="nav-link {{ request()->routeIs('retos.index')? ' active' : ''}}">Retos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Deportes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('apuestas.futbol')}}"> <i
                                    class="fas fa-futbol mr-2"></i>Futbol</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('apuestas.baloncesto')}}"><i
                                    class="fas fa-basketball-ball mr-2"></i>Baloncesto</a>
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




