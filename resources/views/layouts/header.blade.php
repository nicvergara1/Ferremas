<link href="{{asset('assets/styles.css')}}" rel="stylesheet" />

<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{route('home')}}">Ferremax</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('historial.index')}}">Historial</a></li>
                @if( optional(Auth::user())->id == 3 )
                <li class="nav-item"><a class="nav-link" href="{{route('Productos.create')}}">Crear Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('productos.index')}}">Ver Productos</a></li>
                @endif
            </ul>
            @auth
            <div class="dropdown-menu-right dropdown-menu-end " aria-labelledby="navbarDropdown" style="padding:10px ">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                     Cerrar sesion</a>
            
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @endauth
            <div class="dropdown-menu-right dropdown-menu-end " aria-labelledby="navbarDropdown" style="padding:10px ">
                <a class="dropdown-item" href="{{ route('login') }}">
                     Iniciar sesion</a>
                    @csrf
                </form>
            </div>
            
        </div>
    </div>
</nav>
</header>

@yield('content')




