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
        
    <body>
        <div class="card" style="padding: 20px 0px 0px 0px">
            <div class="card-header">Agregar productos</div>
            <div class="card-body">
                <form method="post" action="{{ route('Productos.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="nombre" class="col-sm-2 col-label-form">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" name="nombre" value="{{ old('nombre') }}" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="marca" class="col-sm-2 col-label-form">Marca</label>
                        <div class="col-sm-10">
                            <input type="text" name="marca" value="{{ old('marca') }}" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="precio" class="col-sm-2 col-label-form">Precio</label>
                        <div class="col-sm-10">
                            <input type="text" name="precio" value="{{ old('precio') }}" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="stock" class="col-sm-2 col-label-form">Stock</label>
                        <div class="col-sm-10">
                            <input type="text" name="stock" value="{{ old('stock') }}" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="descripcion"class="col-sm-2 col-label-form">Descripcion</label>
                        <div class="col-sm-10">
                            <input type="text" name="descripcion" value="{{ old('descripcion') }}" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="imagen" class="col-sm-2 col-label-form">Imagen</label>
                        <div class="col-sm-10">
                            <input type="text" name="imagen" value="{{ old('imagen') }}" class="form-control">
                        </div>
                    </div>
                    @if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
           <li>{{ $error}}</li> 
        @endforeach
    </ul>
@endif
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Guardar</button>
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



