<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/cometeloLogo.png') }}" />
    <title>Cómetelo - Inicia Sesión</title>
</head>
<body class="iniciaSesion">
    <main>
        <div class="bg-image d-flex justify-content-center align-items-center" style="background-image: url('https://images.unsplash.com/photo-1482977036925-e8fcaa643657?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1287&q=80'); height: 100vh">
            <form method="post" >
                @csrf
                <div class="row d-inline-flex justify-content-center align-items-center">
                    <div class="container container-xl p-3 m-0 col-md-5 text-white rounded-4" style="background-color: #111111;">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('img/cometeloLogo.png') }}" alt="Cómetelo Logo" class="w-25 img-fluid d-none d-md-block">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label lead">Correo Electrónico</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="hola@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label lead">Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Introduzca su contraseña">
                        </div>
                        <div class="mb-3 lead text-center">
                            <p>¿No tienes cuenta?<a href="/register" class="text-white"> Registrate</a></p>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;" >Iniciar Sesión</button>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <div class="container-img container-lg col-md-4 col-4 m-0 p-0 mt-4 d-none d-sm-none d-md-block">
                        <img class="img-fluid rounded-4" src="https://images.unsplash.com/photo-1588675646184-f5b0b0b0b2de?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1287&q=80" alt="Imagen Restaurante">
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>
</html>