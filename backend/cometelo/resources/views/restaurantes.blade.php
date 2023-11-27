<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/cometeloLogo.png') }}" />
    <title>Cómetelo - Busqueda</title>
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
                    <a class="nav-link" aria-current="page" href="index.html">Inicio</a>
                </li>
                <li class="nav-item p-3 mx-2">
                    <a class="nav-link active" aria-current="page" href="Busqueda.html">Restaurante</a>
                </li>
                <a class="navbar-brand d-none d-xl-block d-xxl-none" href="index.html">
                  <img src="{{ asset('img/cometeloLogoPlato.png') }}" alt="Cómetelo Logo" class="img-fluid mx-4" style="width: 19vh;">
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

    <main class= "lista-rest">
        <div class="Contenedor-busqueda">
            <div class="Resultado">
                <h4>Resultado de búsqueda</h4>
                <div class="Conjunto">
                    @foreach ($restaurantes as $restaurante)
                        <div class="Restaurante-busqueda">
                            <img src="assets/Img/LogosRestaurante/Picanteria.png" alt="Logo del restaurante" class="img-fluid w-25">
                            <div class="contenido-restaurante">
                                <p class="lead display-6">{{ $restaurante->nombre }}</p>
                                <p class="lead">{{ $restaurante->direccion }}</p>
                                <p><a href="Restaurante.html" class="btn btn-primary text-white lead">Ver Más</a></p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="container-img container-lg col-md-4 col-6 m-0 p-0 mt-4 d-none d-sm-none d-md-block">
                <img class="img-fluid rounded-4" src="{{ asset('img/iconoPagina.png') }}" alt="">
            </div>
        </div>
        
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
</body>
</html>