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

        <link rel="stylesheet" href="{{asset('assets/estilos.css')}}">
    </head>

    <body>
        <section class="h-100 " style="background-color: #eee;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                  <div class="card rounded-3 text-black">
                    <div class="row g-0">
                      <div class="col-lg-6">
                        <div class="card-body p-md-5 mx-md-4">
          
                          <div class="text-center">
                            <img class="rounded-circle" src="{{asset('assets/Logo2.jpg')}}"
                              style="width: 185px;" alt="logo">
                            <h4 class="mt-1 mb-5 pb-1">Registrar cuenta</h4>
                          </div>
          
                          <form action="{{route('register')}}" method="POST">
                            @csrf
                            <p>Ingresa tus datos para el registro</p>

                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" name="name" id="form2Example11" class="form-control"
                                  placeholder="Ingresar nombre" />
                                <label class="form-label" for="form2Example11">Nombre</label>
                              </div>
          
                            <div data-mdb-input-init class="form-outline mb-4">
                              <input type="email" name="email" id="form2Example11" class="form-control"
                                placeholder="Correo electronico" />
                              <label class="form-label" for="form2Example11">Email</label>
                            </div>
          
                            <div data-mdb-input-init class="form-outline mb-4">
                              <input type="password" name="password" id="form2Example22" class="form-control" />
                              <label class="form-label" for="form2Example22">Contraseña</label>
                            </div>

                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="password" name="password_confirmation" id="form2Example22" class="form-control" />
                                <label class="form-label" for="form2Example22">Confirmar contraseña</label>
                              </div>
                              @if(count($errors) > 0)
                                  <ul>
                                      @foreach ($errors->all() as $error)
                                        <li>{{ $error}}</li> 
                                      @endforeach
                                  </ul>
                              @endif
          
                            <div class="text-center pt-1 mb-5 pb-1">
                              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Registrarse</button>
                            </div>
          
                            <div class="d-flex align-items-center justify-content-center pb-4">
                              <p class="mb-0 me-2">Ya tienes una cuenta?</p>
                              <a  href="{{route('login')}}" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-danger">Ingresa aquí</a>
                            </div>
          
                          </form>
          
                        </div>
                      </div>
                      <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                        <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                          <h4 class="mb-4">La solución para tus proyectos, a un solo paso.</h4>
                          <p class="small mb-0">En nuestra ferretería, encontrarás todo lo que necesitas para llevar a cabo tus proyectos de construcción, renovación o reparación.
                             Desde herramientas de alta calidad hasta materiales duraderos, 
                             estamos a un solo paso de convertir tus ideas en realidad. ¡Ven y descubre cómo podemos ayudarte!</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
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
