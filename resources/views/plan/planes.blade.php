<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix login – Watch TV Shows Online, Watch Movies Online</title>
    <meta name="description" content="Watch Netflix movies & TV shows online or stream right to your smart TV, game console, PC, Mac, mobile, tablet and more.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/nficon2016.ico') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/planes.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body style="background-color: white">
    
    <style>
        body::before {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.2) 60%, rgba(0, 0, 0, 0.9) 100%),
                              url("{{ asset('images/netflix-clone.jpg') }}");
        }
    </style>
    
    <main style="">
        <section id="login-form-section">

            <div class="contenedor-planes">

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Plan Básico</h5>
                      <p class="card-text">Con este plan, podrás disfrutar de una amplia variedad de películas, series y documentales a un bajo precio</p>
                      <p class="card-text">Lps. 120</p>
                      <p class="card-text">Cantidad perfiles: 2</p>
                      <p class="card-text">Resolución: 720p</p>
                    </div>
                  </div>

                  <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Plan Estándar</h5>
                      <p class="card-text">Con este plan, podrás disfrutar de contenido en alta definición HD, para disfrutar con toda la familia</p>
                      <p class="card-text">Lps. 250</p>
                      <p class="card-text">Cantidad perfiles: 3</p>
                      <p class="card-text">Resolución: 1080p</p>
                    </div>
                  </div>

                  <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Plan Premium</h5>
                      <p class="card-text"> Este plan te permite disfrutar de contenido en calidad ultra alta definición (UHD o 4K) en hasta cuatro dispositivos al mismo tiempoo</p>
                      <p class="card-text">Lps. 400</p>
                      <p class="card-text">Cantidad perfiles: 4</p>
                      <p class="card-text">Resolución: 4k</p>
                    </div>
                  </div>

            </div>

            <div class="loginContainer d-flex direction-column">

                <form action="{{route('planes.siguiente')}}" id="loginForm" class="d-flex direction-column" method="post" name="loginForm">
                    @csrf
                    
                    <!-- Campos ocultos para enviar información desde la vista -->
                    <input type="hidden" name="nombre" value="{{ $informacion['nombre'] }}">
                    <input type="hidden" name="apellido" value="{{ $informacion['apellido'] }}">
                    <input type="hidden" name="correo" value="{{ $informacion['correo'] }}">
                    <input type="hidden" name="contrasenia" value="{{ $informacion['contrasenia'] }}">

                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" name="seleccionar-plan">
                        <option selected>Seleccionar plan</option>
                        <option value="1">1. Plan básico</option>
                        <option value="2">2. Plan estándar</option>
                        <option value="3">3. Plan premium</option>
                    </select>

                      <button type="submit" class="button submitButton" id="signInButton">
                        Siguiente
                      </button>

                </form>

            </div>
        </section>
    </main>
</body>
</html>