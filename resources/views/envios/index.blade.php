
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" 
          content="IE=edge">
    <meta name="viewport" 
          content="width=device-width, initial-scale=1.0">
    <title>Order Tracker Bootstrap Template</title>

    <!-- Font-awesome CSS -->
    <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
          integrity=
"sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
          crossorigin="anonymous" 
          referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
          integrity=
"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
          crossorigin="anonymous">
</head>
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
<body class="d-flex flex-column overflow-auto
             h-100 text-dark" style="background-color: #eee;">

    <div class="container h-50 px-4 
                py-5 mx-auto">
        <div class="card bg-light shadow-lg 
                    border border-dark 
                    rounded-lg py-3 px-5
                    my-5">
            <div class="row d-flex 
                        justify-content-between
                        mx-5 pt-3 my-3">
                <div class="container 
                            text-center">
                    <p class="h3 
                              mb-3">
                      Ferremax
                      </p>
                </div>
                <div class="d-flex">
                    <p class="h5 text-dark">
                      <i class="text-primary fa-solid
                                fa-cart-shopping 
                                fa-lg mr-1">
                      </i>
                        ID de orden: 
                        @foreach($compra as $compra)
                        @if($compra->status == 2 and $compra->id  < 12 )
                      <span class="text
                                   font-weight-bold">
                            <i class="text-secondary 
                                      fa-solid fa-hashtag
                                      mr-1">
                            </i>{{$compra->id}}
                      </span>
                      @endif
                      @endforeach
                      </p>
                </div>
                <div class="d-flex flex-column 
                            text-sm-right h5">
                    <p class="mb-0 font-weight-bolder 
                              text-monospace">
                      Posible fecha de llegada
                        <span class="badge badge-pill 
                                     badge-primary border
                                     border-secondary 
                                     text-light 
                                     font-weight-bold 
                                     px-2 py-2 shadow">
                          01/06/2024
                          </span>
                    </p>
                    <p class="font-weight-bold 
                              text-monospace 
                              pt-3 ml-5">
                      ID de repartidor
                        <span class="badge badge-pill 
                                     badge-danger border 
                                     border-secondary 
                                     text-light font-weight-bold
                                     mx-1 px-2 py-2 shadow">
                          -
                          </span>
                    </p>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container-fluid 
                                    p-2 align-items-center">
                            <div class="d-flex 
                                        justify-content-around">
                                <button class="btn bg-success 
                                               text-white 
                                               rounded-circle" 
                                        data-bs-toggle="tooltip"
                                        title="Order Confirmed">
                                    <i class="fa-solid fa-check"></i>
                                </button>
                                <span class="bg-secondary w-50 p-1
                                             mx-n1 rounded mt-auto
                                             mb-auto">
                                </span>
                                <button class="btn bg-secondary 
                                               text-white 
                                               rounded-circle" 
                                        data-bs-toggle="tooltip"
                                        title="Order Shipped">
                                    <i class="fa-solid fa-check"></i>
                                </button>
                                <span class="bg-secondary w-50 
                                             p-1 mx-n1 rounded
                                             mt-auto mb-auto">
                                </span>
                                <button class="btn bg-secondary 
                                               text-white 
                                               rounded-circle" 
                                        data-bs-toggle="tooltip"
                                        title="Out for delivery" 
                                        style="z-index:1">
                                    <i class="fa-solid fa-check"></i>
                                </button>
                                <span class="bg-secondary w-50 p-1 
                                             mx-n1 rounded mt-auto 
                                             mb-auto">
                                </span>
                                <button class="btn bg-secondary 
                                               text-white rounded-circle" 
                                        data-bs-toggle="tooltip"
                                        title="Order Delivered">
                                    <i class="fa-solid fa-check"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-inline-flex 
                        justify-content-around 
                        my-3 py-4 mx-n2">
                <div class="row d-inline-flex 
                            align-items-center">
                    <i class="text-primary fa-solid 
                              fa-clipboard-check 
                              fa-2xl mx-4 mb-3">
                      </i>
                    <p class="text-dark font-weight-bolder 
                              py-1 px-1 mx-n2">
                      Orden
                      <br>
                      Confirmada
                      </p>
                </div>
                <div class="row d-inline-flex
                            align-items-center">
                    <i class="text-warning fa-solid
                              fa-solid fa-boxes-packing
                              fa-2xl mx-4 mb-3">
                      </i>
                    <p class="text-dark  
                              font-weight-bolder
                              py-1 px-1 mx-n2">
                      Orden
                      <br>
                      Tomada
                      </p>
                </div>
                <div class="row d-inline-flex 
                            align-items-center">
                    <i class="text-info fa-solid 
                              fa-truck-arrow-right
                              fa-2xl mx-4 mb-3">
                      </i>
                    <p class="text-dark 
                              font-weight-bolder
                              py-1 px-1 mx-n2">
                      Orden en
                      <br>
                      Camino
                      </p>
                </div>
                <div class="row d-inline-flex 
                            align-items-center">
                    <i class="text-success fa-solid
                              fa-house-chimney 
                              fa-2xl mx-4 mb-3">
                      </i>
                    <p class="text-dark font-weight-bolder
                              py-1 px-1 mx-n2">
                      Orden
                      <br>
                      Entregada
                      </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
