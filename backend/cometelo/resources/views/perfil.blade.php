

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/Css/style.css">
    <link rel="shortcut icon" href="assets/Img/cometeloLogo.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Cómetelo - Perfil</title>
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
                        <a class="nav-link" aria-current="page" href="/restaurantes">Restaurante</a>
                    </li>
                    <a class="navbar-brand d-none d-xl-block d-xxl-none" href="/home">
                      <img src="{{ asset('img/cometeloLogo.png') }}" alt="Cómetelo Logo" class="img-fluid mx-4" style="width: 19vh;">
                    </a> 
                    <li class="nav-item p-3 mx-2">

                    <!--agregar ruta-->
                        <a class="nav-link" aria-current="page" href="">Reserva</a>
                    </li> 
                </ul>
              </div>
              <div> 
                <!-- <a href="#">
                    <i class="bi bi-search text-dark p-1" style="font-size: 40px; width: 32px; height: 32px;"></i>
                  </a>   -->
                  <a href="/perfil">
                    <i class="bi bi-person-circle text-dark p-3" style="font-size: 40px; width: 32px; height: 32px;"></i>
                  </a>   
              </div>              
            </div>
          </nav>
    </header>
    <main>
    <section>
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="bg-white shadow-lg p-3 mb-5 bg-body rounded">
                        <!-- Información del perfil del usuario -->
                        <p class="lead">Nombre y Apellido</p>
                        <p>{{ $usuario->name }}</p>

                        <p class="lead">Correo Electrónico</p>
                        <p>{{ $usuario->email }}</p>
                        
                        <!-- Botón de Logout -->
                        <div class="d-grid gap-2 d-md-block mt-3">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-outline-primary">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-white shadow-lg p-3 mb-5 bg-body rounded">
                        <p class="display-6">Reservas</p>
                        <!-- Información de reservas -->
                        <!-- ... (código de reservas) ... -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
