
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ferremax</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('assets/styles.css')}}" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
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
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" href="{{route('Cart.checkout')}}" type="submit">
                            <a class="bi-cart-fill me-1" href="{{route('Cart.checkout')}}" style="text-decoration: none; color: black">Carrito</a>
                            
                            <span class="badge bg-dark text-white ms-1 rounded-pill">{{\Cart::count()}}</span>
                        </button>
                    </form>
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
        <!-- Header-->
        <header class="">
            <img src="{{asset('assets/Base.jpeg')}}" alt="" width="100%" >
        </header>
        <!-- Section-->
        @include('partials.msg')
        <div class="row w-100 " style="padding: 20px">
            @foreach ( $productos as $producto )
            <div class="col-lg-3 " style="margin-left: 110px; padding: 20px">
            <div class="container-items border border-secondary rounded" style="padding: 20px 20px;  height: 450px ;">
                <div class="item" style="width: 100%;">
                  <figure>
                    <center><img  src="{{asset('storage').'/'.$producto->imagen}}" alt="" width="50%" ></center>
                  </figure>
                  <div class="info-product">
                    <h2> {{ $producto->nombre }}</h2>
                    <h5 style="text-transform: uppercase">{{ $producto->marca }}</h5>
                    <center><p class="h6">Precio: ${{ $producto->precio }}</p></center>
                    <div class="d-grid gap-2 col-6 mx-auto">
                    <form action="{{route('Cart.add')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$producto->id}}">
                        <center><input type="submit" name="btn "class="btn btn-primary btn-sm ml-auto btn-dark btn-outline-green" value="Añadir al carrito"></center>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark" style="bottom: 0;left: 0;width: 100%;">
            <div class="container"><p class="m-0 text-center text-white">Ferremax &copy; 2024</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>




