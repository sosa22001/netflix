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

            </div>

            <div class="loginContainer d-flex direction-column">
                
                <form action="" id="loginForm" class="d-flex direction-column" method="post" name="loginForm">
                    @csrf
                    <select name="seleccionar-plan" id="">
                        <option value="">1. Plan básico</option>
                        <option value="">1. Plan estándar</option>
                        <option value="">1. Plan premium</option>
                    </select>
                </form>
            </div>
        </section>
    </main>
</body>
</html>