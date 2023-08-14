<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Planes</title>
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
        #cartas{
            margin: 0 auto;
            display: flex;
            height: 80vh;
            align-items: center;
            justify-content: center;
            max-width: 1000px;
        }
        
        .card {
                    background-color: #fff;
                    border-radius: 10px;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                    padding: 20px;
                    text-align: center;
                    margin: 0 10px;
                    width: 300px;
                    transition: transform 0.3s ease-in-out;
                }
                .card:hover {
                    transform: translateY(-5px);
                }
                .card h2 {
                    color: #e50914;
                    margin-bottom: 10px;
                }
                .card p {
                    font-size: 14px;
                    line-height: 1.6;
                }
                .card strong {
                    display: block;
                    margin-top: 10px;
                    font-size: 18px;
                }


    </style>
    
    <main style="">
        <section id="login-form-section">
            <h2 style="
            text-align: center;
            color: white;
            font-size: 3rem;
            ">Selecciona Tu Plan</h2>
            <div id="cartas">
                    @foreach ($planes as $plan )      
                        <div class="card"">
                            <h2>{{$plan->nombrePlan}}</h2>
                            <p>{{$plan->descripcion}}</p>
                            <p>Precio: <strong>{{$plan->costoMensual}}</strong></p>
                            <form action="{{route('planes.siguiente')}}" id="loginForm" class="d-flex direction-column" method="post" name="loginForm">
                              @csrf
                              <!-- Campos ocultos para enviar información desde la vista -->
                              <input type="hidden" name="nombre" value="{{ $informacion['nombre'] }}">
                              <input type="hidden" name="apellido" value="{{ $informacion['apellido'] }}">
                              <input type="hidden" name="correo" value="{{ $informacion['correo'] }}">
                              <input type="hidden" name="contrasenia" value="{{ $informacion['contrasenia'] }}">
          
                              <input type="hidden" name="seleccionar-plan" value="1" >
      
                                <button type="submit" class="button submitButton" id="signInButton">
                                  Comprar Plan
                                </button>
                          </form>
                        </div>
                    @endforeach
            </div>
        </section>
    </main>
</body>
</html>