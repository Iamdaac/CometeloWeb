<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/cometeloLogo.png') }}" />

    <title>Cómetelo - Registrarse</title>
</head>
<body class="iniciaSesion">
    <main>
        <div class="bg-image d-flex justify-content-center align-items-center" style="background-image: url('https://images.unsplash.com/photo-1482977036925-e8fcaa643657?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1287&q=80'); height: 100vh; background-size: cover;">
            <form method="post">
                <div class="row d-inline-flex justify-content-center align-items-center">
                    <div class="container-img container-lg col-md-4 col-4 m-0 p-0 mt-4 d-none d-sm-none d-md-block">
                        <img class="img-fluid rounded-4" src="https://images.unsplash.com/photo-1551218808-94e220e084d2?auto=format&fit=crop&q=80&w=1287&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Imagen Restaurante">
                    </div>
                    <div class="container container-xl p-3 m-0 col-md-6 text-white rounded-4 row g-3" style="background-color: #111111;">
                        <div class="d-flex justify-content-center text-center">
                            <img src="{{ asset('img/cometeloLogo.png') }}" alt="Cómetelo Logo" class="w-25 img-fluid d-none d-md-block">
                        </div>
                        <div class="col-md-3">
                            <label for="validationDefault01" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="validationDefault01" name="nombre"  placeholder="Mark" required>
                          </div>
                          <div class="col-md-3">
                            <label for="validationDefault02" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="validationDefault02" name="apellido" placeholder="Otto" required>
                          </div>
                          <div class="col-md-6">
                            <label for="validationDefault03" class="form-label">Correo Electrónico</label>
                            <input type="text" class="form-control" id="validationDefault03" name="email" placeholder="hola@gmail.com" required>
                          </div>
                          <div class="col-md-6">
                            <label for="validationDefault03" class="form-label">Contraseña</label>
                            <input type="password" minlength="8" class="form-control" id="validationDefault04" name="password" placeholder="Mínimo 8 caracteres" required>
                          </div> 
                          <div class="col-md-6">
                            <label for="validationDefault04" class="form-label">Número Telefónico</label>
                            <input type="text" class="form-control" id="validationDefault05" name="telefono" placeholder="(+000) 0000-0000" required>
                          </div>
                          <div class="col-md-12">
                            <div class="mb-3 lead text-center">
                                <p>¿Ya tienes cuenta?<a href="/login" class="text-white"> Inicia Sesión</a></p>
                            </div>
                            </div>
                          <div class="col-12">
                            <button class="btn btn-primary" type="submit" style="width: 100%;">Registrarse</button>
                          </div>
                </div>
            </form>
        </div>
    </main>
</body>
</html>