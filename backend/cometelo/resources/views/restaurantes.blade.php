<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/cometeloLogo.png') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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
                    <a class="nav-link" aria-current="page" href="/home">Inicio</a>
                </li>
                <li class="nav-item p-3 mx-2">
                    <a class="nav-link active" aria-current="page" href="/restaurantes">Restaurante</a>
                </li>
                <a class="navbar-brand d-none d-xl-block d-xxl-none" href="/home">
                  <img src="{{ asset('img/cometeloLogoPlato.png') }}" alt="Cómetelo Logo" class="img-fluid mx-4" style="width: 19vh;">
                </a> 
                <li class="nav-item p-3 mx-2">
                  <!--agregar ruta-->
                    <a class="nav-link " aria-current="page" href="">Reserva</a>
                </li> 
            </ul>
          </div>
          <div> 
 
              <a href="/perfil">
                <i class="bi bi-person-circle text-dark p-3" style="font-size: 40px; width: 32px; height: 32px;"></i>
              </a>     
          </div>    
        </div>
      </nav>
    </header>
    <main class="lista-rest">
        <div class="Contenedor-busqueda">
            <div class="Resultado">
              <!-- Formulario para la búsqueda avanzada -->
  <form action="{{ route('buscar_avanzado') }}" method="GET" class="d-flex justify-content-start gap-2">
                <div class="form-group col-auto">
                    <label for="facilidades">Facilidades:</label>
                    <select name="facilidades" id="facilidades" class="form-control">
                        <!-- Opciones de facilidades -->
                        <option value="Sillas para bebés">Sillas para bebés</option>
                        <option value="Menú para niños">Menú para niños</option>
                        <option value="Cambiador">Cambiador</option>
                        <option value="Facilidad para discapacitados">Facilidad para discapacitados</option>
                        <option value="Estacionamiento bajo techo">Estacionamiento bajo techo</option> 
                    </select>
                </div>

                <div class="form-group col-auto">
                    <label for="costo">Costo:</label>
                    <select name="costo" id="costo" class="form-control">
                        <!-- Opciones de costo -->
                        <option value="$ (barato)">$ (barato)</option>
                        <option value="$$ (regular)">$$ (regular)</option>
                        <option value="$$$ (alto)">$$$ (alto)</option>
                    </select>
                </div>

                <!-- Agrega menús desplegables para tipo de comida y provincia -->

    <button type="submit" class="btn btn-primary col-auto">Buscar</button></form><br><br>
                <h4>Resultados de búsqueda</h4>
                <div class="Conjunto">
                    @foreach ($restaurantes as $restaurante)
                        <div class="Restaurante-busqueda">
                            <!-- Agrega imagen del restaurante -->
                            <img src="{{ asset('img/LogosRestaurante/' . $restaurante->logo) }}" alt="Logo del restaurante" class="img-fluid w-25">
                            <div class="contenido-restaurante">
                                <!-- Muestra el nombre y dirección del restaurante -->
                                <p class="lead display-6">{{ $restaurante->nombre }}</p>
                                <p class="lead">{{ $restaurante->direccion }}</p>
                                <!-- Enlace para ver más detalles del restaurante -->
                                <p><a href="#" class="btn btn-primary text-white lead">Ver Más</a></p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Imagen opcional -->
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
                <a href="/home" class="text-white">Inicio</a>
              </h6>
            </div>
            <div class="col-md-2">
              <h6 class="lead">
                <a href="/restaurantes" class="text-white">Restaurante</a>
              </h6>
            </div>
            <div class="col-md-2">
              <h6 class="lead">
                <!--agregar ruta-->
                <a href="" class="text-white">Reserva</a>
              </h6>
            </div>
          </div>
        </section>
        <hr class="my-3"/>
      <p class="text-center p-2 pb-4"> © 2023 Copyright </p>
    </footer>
</body>
</html>