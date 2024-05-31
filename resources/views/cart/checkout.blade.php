<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body style="background-color: #eee"> 
        @if(Cart::count())
        <section class="vh-100 " style="background-color: #eee;">
            <div class="container h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                  <p><span class="h2">Carrito de compras</span><span class="h4"></span></p>
                  @foreach(Cart::content() as $item)
                  <div class="card mb-4">
                    
                    <div class="card-body p-4">
                       
                      <div class="row align-items-center">
                        <div class="col-md-2">
                            
                          <img src="/storage/{{$item->options->image}}"
                            class="img-fluid" alt="Generic placeholder image">
                             
                        </div>
                        
                        <div class="col-md-2 d-flex justify-content-center">
                          <div>
                            <p class="small text-muted mb-4 pb-2">Nombre</p>
                            <p class="lead fw-normal mb-0">{{$item->name}}</p>
                          </div>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                          <div>
                            <p class="small text-muted mb-4 pb-2">Cantidad</p>
                            <p class="lead fw-normal mb-0"><i class="fas fa-circle me-2"></i>
                              {{$item->qty}}</p>
                          </div>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                          <div>
                            <p class="small text-muted mb-4 pb-2">Valor/u</p>
                            <p class="lead fw-normal mb-0">${{$item->price}}</p>
                          </div>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                          <div>
                            <p class="small text-muted mb-4 pb-2">Total</p>
                            <p class="lead fw-normal mb-0">${{number_format($item->qty * $item->price)}}</p>
                          </div>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                          <div>
                            <p class="small text-muted mb-4 pb-2"></p>
                            <p class="lead fw-normal mb-0">
                                <form action="{{route('Cart.removeitem')}}" method="POST">
                                    @csrf
                                <input type="hidden" name="rowId" value="{{$item->rowId}}">
                                <input type="submit" name="btn" class="btn btn-danger " value="x">
                            </form></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  <div class="card mb-5">
                    <div class="card-body p-4">
                      <div class="float-end">
                        <p class="mb-0 me-5 d-flex align-items-center">
                          <span class="small text-muted me-2">Total a pagar:</span> <span
                            class="lead fw-normal">${{number_format(Cart::subtotal(),0)}}</span>
                        </p>
                      </div>
                    </div>
                  </div>
              
                  <div class="d-flex justify-content-end">
                    <a  href="{{route('home')}}" type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg me-2">Seguir comprando</a>
                    <form action="{{route('iniciar_compra')}}" method="POST">
                        @csrf
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg" >Comprar</button>
                    </form>
                  </div>
                  @else
                  <div><center><h3 href="/" class="h5" style="position: absolute;top: 45%;left: 50%; transform: translate(-50%, -50%);" >No hay productos en el carrito</h3></center></div>
                  <div><center><a href="/" class="btn btn-primary text-center " style="position: absolute;top: 50%;left: 50%; transform: translate(-50%, -50%);" >Agrega un producto</a></center></div>
                  @endif
                </div>
              </div>
            </div>
          </section>
        <!-- Bootstrap JavaScript Libraries -->
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



