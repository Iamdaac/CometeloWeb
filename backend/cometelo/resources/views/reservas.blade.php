<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/cometeloLogo.png') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</head>
    <title>Cómetelo - Reserva</title>
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
                        <a class="nav-link" aria-current="page" href="/restaurantes">Restaurante</a>
                    </li>
                    <a class="navbar-brand d-none d-xl-block d-xxl-none" href="/">
                      <img src="{{ asset('img/cometeloLogoPlato.png') }}" alt="Cómetelo Logo" class="img-fluid mx-4" style="width: 19vh;">
                    </a> 
                    <li class="nav-item p-3 mx-2">
                        <a class="nav-link active" aria-current="page" href="/reservas">Reserva</a>
                    </li> 
                </ul>
              </div>
              <div> 
                <a href="/restaurantes">
                    <i class="bi bi-search text-dark p-1" style="font-size: 40px; width: 32px; height: 32px;"></i>
                  </a>  
                  <a href="/perfil">
                    <i class="bi bi-person-circle text-dark p-3" style="font-size: 40px; width: 32px; height: 32px;"></i>
                  </a>     
              </div>    
            </div>
          </nav>
    </header>

    <main>
       <section>
            {{-- <div class="row justify-content-center p-4 m-4">
                <div class="col-md-6">
                    <div class="container container-xxl container-fluid">
                        <div class="mb-6">
                            <label for="exampleInputEmail1" class="form-label lead">Nombre Completo</label>
                            <input type="text" class="form-control" id="validationDefault01" placeholder="Mark">
                        </div>
                        <div class="mb-6">
                            <label for="exampleInputEmail1" class="form-label lead">Correo Electrónico</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="hola@gmail.com">
                        </div>
                        <div class="md-6 mb-4">
                            <label for="validationDefault04" class="form-label lead">Número Telefónico</label>
                            <input type="text" class="form-control" id="validationDefault04" placeholder="(+000) 0000-0000">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary" style="width: 100%;" >Completar</button>
                        </div>
                    </div>
                </div> --}}
                <div class="container container-lg col-md-4 shadow-lg m-2 p-5 row">
                    <form method="post">
                        @csrf
                        <div class="md-6 mb-3">
                            <label for="validationDefault05" class="form-label lead">Restaurante</label>
                            <select class="form-select md-6" id="validationDefault04" name="restauranteid" required>
                                <option disabled value="">Seleccione...</option>
                                @foreach ($restaurantes as $restaurante)
                                    <option value="{{ $restaurante->id }}">{{ $restaurante->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row form-group">
                            <label for="date" class="form-label lead">Fecha de Reserva</label>
                            <div class="md-6">
                                <div class="input-group date" id="datepicker">
                                    <input type="text" class="form-control" placeholder="mm/dd/yyyy" name="fecha">
                                    <span class="input-group-append"><span class="input-group-text bg-white"><i class="fa fa-calendar"></i></span></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationDefault02" class="form-label lead">Personas</label>
                                <input type="text" class="form-control" id="validationDefault02" placeholder="5" name="cantidad" required>
                            </div>
                            <div class="cs-form col-md-6">
                                <label for="hourPicker1" class="form-label lead">Hora</label>
                                <input type="time" class="form-control" value="10:05 AM" name="hora" required/>
                            </div> 
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Completar</button>
                    </form>
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
                <a href="/" class="text-white">Inicio</a>
              </h6>
            </div>
            <div class="col-md-2">
              <h6 class="lead">
                <a href="/restaurantes" class="text-white">Restaurante</a>
              </h6>
            </div>
            <div class="col-md-2">
              <h6 class="lead">
                <a href="/reservas" class="text-white">Reserva</a>
              </h6>
            </div>
          </div>
        </section>
        <hr class="my-3"/>
      <p class="text-center p-2 pb-4"> © 2023 Copyright </p>
    </footer>
    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>
</body>
</html>