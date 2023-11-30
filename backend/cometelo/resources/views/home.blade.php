<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/cometeloLogo.png') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Cómetelo - Home</title>
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
                    <a class="nav-link active" aria-current="page" href="/home">Inicio</a>
                </li>
                <li class="nav-item p-3 mx-2">
                    <a class="nav-link " aria-current="page" href="/restaurantes">Restaurante</a>
                </li>
                <a class="navbar-brand d-none d-xl-block d-xxl-none" href="/home">
                  <img src="assets/Img/cometeloLogoPlato.png" alt="Cómetelo Logo" class="img-fluid mx-4" style="width: 19vh;">
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
                
    <main>
        <section>
            <div class="bg-image d-flex justify-content-center align-items-center" style="background-image: url('https://images.unsplash.com/photo-1537047902294-62a40c20a6ae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1335&q=80'); height: 100vh">
                <div class="container container-lg bg-dark opacity-75 rounded-4 p-5 text-center">
                    <p class="pfo display-3 opacity-100">
                        El placer de la comida al alcance de tu pantalla
                    </p>
                    <form action="/buscar" method="GET" class="mt-4">
                      <div class="input-group mb-3">
                          <input type="text" class="form-control form-control-lg" placeholder="Encuentra lo que buscas" name="termino_busqueda">
                          <button type="submit" class="input-group-text btn-success"><i class="bi bi-search me-2"></i>Buscar</button>
                      </div>
                  </form>

                    <p class="pfoConsulta text-white">¡Consulta Nuestras Sedes!</p>
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