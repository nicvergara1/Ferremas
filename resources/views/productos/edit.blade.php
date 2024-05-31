@extends('layouts.header')
<!doctype html>
<html lang="en">
    <head>
        <title>Edicion de productos</title>
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
    <body>
        <div class="card">
            <div class="card-header">Editar productos</div>
            <div class="card-body">
                <form action=" {{route('Productos.update',$productos)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="nombre" class="col-sm-2 col-label-form">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" name="nombre" value="{{$productos->nombre}}" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="marca" class="col-sm-2 col-label-form">Marca</label>
                        <div class="col-sm-10">
                            <input type="text" name="marca" value="{{$productos->marca}}" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="precio" class="col-sm-2 col-label-form">Precio</label>
                        <div class="col-sm-10">
                            <input type="text" name="precio" value="{{$productos->precio}}" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="stock" class="col-sm-2 col-label-form">Stock</label>
                        <div class="col-sm-10">
                            <input type="text" name="stock" value="{{$productos->stock}}" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="descripcion"class="col-sm-2 col-label-form">Descripcion</label>
                        <div class="col-sm-10">
                            <input type="text" name="descripcion" value="{{$productos->descripcion}}" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="imagen" class="col-sm-2 col-label-form">Imagen</label>
                        <div class="col-sm-10">
                            <input type="text" name="imagen" value="{{$productos->imagen}}" class="form-control">
                        </div>
                    </div>
                    @if(count($errors) > 0)
    <ul>
        @if(count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
               <li>{{ $error}}</li> 
            @endforeach
        </ul>
    @endif
    </ul>
@endif
                    <div class="text-center">
                        <button class="btn btn-warning btn-sm">Guardar</button>
                        <a href="{{ route('productos.index')}}" class="btn btn-primary btn-sm">Cancelar</a>
                    </div>	
                </form>
            </div>
        </div>

       @endsection
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


