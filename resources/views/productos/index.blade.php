@extends('layouts.header')
<!doctype html>
<html lang="en">
    <head>
        <title>Productos</title>
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

    <body>
        @section('content')
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col col-md-6"><b>Productos</b></div>
                    <div class="col col-md-6">
                        <a href="{{ route('Productos.create') }}" class="btn btn-success btn-sm float-end">Agregar producto</a>
                        
                    </div>
                </div>
            </div>
            @if(session('success'))
                        <div class="alert alert-success">
                            <p>{{session('success')}}</p>
                        </div>
                        @endif
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Descripcion</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                            @foreach ( $productos as $producto )
                            <tr>
                                <td>{{$producto->id}}</td>
                                <td>{{$producto->nombre}}</td>
                                <td>{{$producto->marca}}</td>
                                <td>{{$producto->precio}}</td>
                                <td>{{$producto->stock}}</td>
                                <td>{{$producto->descripcion}}</td>
                                <td>
                                    <img src="{{asset('storage').'/'.$producto->imagen}}" alt="" width="200px">
                                </td>
                                <td><a href="{{ route('Productos.edit', $producto)}}" class="btn btn-warning btn-sm">Editar</a>
                                    <a href="{{ route('Productos.delete', $producto)}}" class="btn btn-danger btn-sm" onclick="return confirm('Estas seguro que quieres eliminar?')">Eliminar</a>
                                    
                                    </td>
                                
                            </tr>
                            @endforeach
                </table>
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


