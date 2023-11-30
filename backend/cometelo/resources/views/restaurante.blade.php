<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/cometeloLogo.png') }}" />
    <title>Cómetelo - Restaurante</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light nav-underline text-center align-items-center shadow-lg bg-body">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                  <li class="nav-item p-3 mx-2">
                      <a class="nav-link" aria-current="page" href="/">Inicio</a>
                  </li>
                  <li class="nav-item p-3 mx-2">
                      <a class="nav-link active" aria-current="page" href="/restaurantes">Restaurante</a>
                  </li>
                  <a class="navbar-brand d-none d-xl-block d-xxl-none" href="index.html">
                    <img src="{{ asset('img/cometeloLogo.png') }}" alt="Cómetelo Logo" class="img-fluid mx-4" style="width: 19vh;">
                  </a> 
                  <li class="nav-item p-3 mx-2">
                      <a class="nav-link " aria-current="page" href="formularioReserva.html">Reserva</a>
                  </li> 
              </ul>
            </div>
            <div> 
              <a href="#">
                  <i class="bi bi-search text-dark p-1" style="font-size: 40px; width: 32px; height: 32px;"></i>
                </a>  
                <a href="perfil.html">
                  <i class="bi bi-person-circle text-dark p-3" style="font-size: 40px; width: 32px; height: 32px;"></i>
                </a>     
            </div>    
          </div>
        </nav>
      </header>

    <main>
        <section>
            <div class="row justify-content-evenly pt-5 pb-5">
                <div class="col-md-4 mx-2 p-0">
                    <div class="Contenedor-restaurante d-flex">
                        <div class="carrusel-principal">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="https://images.unsplash.com/photo-1601912262364-3a35aa0d9399?auto=format&fit=crop&q=80&w=1288&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 rounded" alt="Comida Restaurante">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="https://images.unsplash.com/photo-1623711414053-61bcf0f41451?auto=format&fit=crop&q=80&w=1287&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 rounded" alt="Comida Restaurante">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="https://images.unsplash.com/photo-1612870421691-fcd5657e5d14?auto=format&fit=crop&q=80&w=1287&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 rounded" alt="Comida Restaurante">
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 m-1 p-5 shadow-lg">
                    <div class="Informacion">
                        <p class="lead display-6">{{ $restaurante->nombre }}</p>
                        <p class="lead">{{ $restaurante->direccion }}</p>
                        <p class="lead">{{ $restaurante->categoria_costo }}</p>
                        <p class="lead">{{ $restaurante->tipo_comida }}</p>
                        <p class="lead">{{ $restaurante->telefono }}</p>
                        <a href="{{ $restaurante->website }}"><p class="lead">{{ $restaurante->website }}</p></a>
                        {{-- <a class="btn btn-primary text-white" href="#">Ver Más</a> --}}
                    </div>
                        <div class="row pt-5">
                            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                <img src="https://images.unsplash.com/photo-1561758033-d89a9ad46330?auto=format&fit=crop&q=80&w=1470&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-100 shadow-1-strong rounded mb-4" alt="Imagen Comida"/>
                                <img src="https://plus.unsplash.com/premium_photo-1666712683208-b20e12a3fa41?auto=format&fit=crop&q=80&w=1287&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-100 shadow-1-strong rounded mb-4" alt="Imagen Comida"/>
                            </div>
                            <div class="col-lg-4 mb-4 mb-lg-0">
                                <img src="https://images.unsplash.com/photo-1561758033-7e924f619b47?auto=format&fit=crop&q=80&w=1287&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-100 shadow-1-strong rounded mb-4" alt="Imagen Comida"/>
                                <img src="https://plus.unsplash.com/premium_photo-1666799069159-8d7ca87918d8?auto=format&fit=crop&q=80&w=1470&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-100 shadow-1-strong rounded mb-4" alt="Imagen Comida"/>
                            </div>
                            <div class="col-lg-4 mb-4 mb-lg-0">
                              <img src="https://images.unsplash.com/photo-1619683815335-2b5b130a1baf?auto=format&fit=crop&q=80&w=1476&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-100 shadow-1-strong rounded mb-4" alt="Imagen Comida"/>
                              <img src="https://images.unsplash.com/photo-1606133261539-5eb690ae1248?auto=format&fit=crop&q=80&w=1287&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-100 shadow-1-strong rounded mb-4" alt="Imagen Comida"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="text-center py-1 bg-dark">
        <div class="container container-xl px-4 text-white text-center lh-1 lead">
          <section>
            <div class="row text-center d-flex justify-content-center pt-4">
              <div class="col-md-2">
                <h6 class="lead text-light">
                  <a href="index.html" class="text-white">Inicio</a>
                </h6>
              </div>
              <div class="col-md-2">
                <h6 class="lead">
                  <a href="Busqueda.html" class="text-white">Restaurante</a>
                </h6>
              </div>
              <div class="col-md-2">
                <h6 class="lead">
                  <a href="formularioReserva.html" class="text-white">Reserva</a>
                </h6>
              </div>
            </div>
          </section>
          <hr class="my-3"/>
        <p class="text-center p-2 pb-4"> © 2023 Copyright </p>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>