@extends('layouts.header')
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
@section('content')
    <body style="background-color: #eee"> 
        <section class="vh-100 " style="background-color: #eee;">
            <div class="container h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                  <p><span class="h2">Historial de compras</span><span class="h4"></span></p>
                  @foreach($compra as $compra)
                  @if($compra->status > 1)
                  <div class="card mb-4">
                    
                    <div class="card-body p-4">
                       
                      <div class="row align-items-center">
                        <div class="col-md-2">
                            <p class="small text-muted mb-4 pb-2">N° de orden</p>
                            <p class="lead fw-normal mb-0">{{$compra->id}}</p>
                        </div>
                        
                        <div class="col-md-2 d-flex justify-content-center">
                          <div>
                            
                          </div>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                          <div>
                            <p class="small text-muted mb-4 pb-2">Estado</p>
                            <p class="lead fw-normal mb-0"><i class="fas fa-circle me-2"></i>
                              
                              En preparacion</p>
                          </div>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                          <div>
                            <p class="small text-muted mb-4 pb-2"></p>
                            <p class="lead fw-normal mb-0"></p>
                          </div>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                          <div>
                            <p class="small text-muted mb-4 pb-2"></p>
                            <p class="lead fw-normal mb-0"></p>
                          </div>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                          <div>
                            <p class="small text-muted mb-4 pb-2"></p>
                            <div>
                              <p class="small text-muted mb-4 pb-2"></p>
                              <p class="lead fw-normal mb-0">
                                  <form action="{{route('envio.index')}}" method="GET">
                                      @csrf
                                  <input type="hidden" name="rowId" value="">
                                  <input type="submit" name="btn" class="btn btn-success " value="Ver estado ">
                              </form></p>
                            </div>
                            <p class="lead fw-normal mb-0"></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @else
                  @endif
                  @endforeach
                    
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
@endsection
        

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



