<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Planes</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/nficon2016.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"
        integrity="sha256-t2kyTgkh+fZJYRET5l9Sjrrl4UDain5jxdbqe8ejO8A=" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/global.css')}}">
    <link rel="stylesheet" href="{{asset('css/userprofile.css')}}">
    <link rel="stylesheet" href="{{asset('css/browse.css')}}">

    <style>
        #cartas{
            margin: 0 auto;
            padding: 5rem;
            display: flex;
            height: 80vh;
            align-items: center;
            justify-content: center;
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
                .btn {
                    display: inline-block;
                    margin-top: 15px;
                    padding: 10px 20px;
                    background-color: #e50914;
                    color: white;
                    text-decoration: none;
                    border-radius: 5px;
                    transition: background-color 0.3s ease-in-out;
                }
                .btn:hover {
                    background-color: #d10812;
                }
    </style>

</head>

<body>

     <main id="mainContainer" class="">

        <header class="d-flex space-between flex-center flex-middle" style="    position: fixed;
        padding-top: 2rem;">
            <div class="nav-links d-flex flex-center flex-middle">
                <a href="#">
                    <h2 class="logo logo-text red-color f-s-28 m-r-25">NETFLIX</h2>
                    <h2 class="second-logo-text red-color f-s-28">N</h2>
                </a>
            </div>
            <div class="flex">
                <div>
                    <a href="{{route('perfiles.mostrar', ['idUsuario' => $idUsuario])}}">
                        <i class="fa-solid fa-xmark" style="color: #aaa; font-size:2rem;"></i>
                    </a>
                </div>
                <div class="righticons d-flex flex-end flex-middle">
                    <div class="dropdown">
                        <i class="fa-solid fa-grip-lines" style="color: #aaa; font-size:2rem;"></i>
    
                        <div class="dropdown-content">
                            <div class="line"></div>
                            <div class="links d-flex direction-column">
                                <a href="{{route('usuario.cuentaConfig', ['idUsuario' => $idUsuario])}}">Cuenta</a>
                                <a href="{{route('usuario.ayuda')}}">Ayuda</a>
                                <a href="{{route('login.formulario')}}">Salir de Netflix</a>
                            </div>
                            
                        </div>
                    </div>              
                </div>             
            </div>
        </header>

        <!--profile section-->
        <div id="cartas">
                @foreach ($planes as $plan )
                    @if($usuario->plan->idPlan == $plan->idPlan)
                        <div class="card" style="background-color: #e5091459;">
                            <h2>{{$plan->nombrePlan}}</h2>
                            <p>{{$plan->descripcion}}</p>
                            <p><strong>{{$plan->costoMensual}}</strong></p>
                            <a href="{{route('usuario.guardarPlanEditado', ['idUsuario' => $idUsuario, 'idPlan' => $plan->idPlan])}}" class="btn">Elegir Plan</a>
                        </div>
                    @endif
                    @if($usuario->plan->idPlan !== $plan->idPlan)
                    <div class="card"">
                        <h2>{{$plan->nombrePlan}}</h2>
                        <p>{{$plan->descripcion}}</p>
                        <p><strong>{{$plan->costoMensual}}</strong></p>
                        <a href="{{route('usuario.guardarPlanEditado', ['idUsuario' => $idUsuario, 'idPlan' => $plan->idPlan])}}" class="btn">Elegir Plan</a>
                    </div>
                @endif
                @endforeach
        </div>

    </main> 

    </script>

    <script src="https://kit.fontawesome.com/8b44041adf.js" crossorigin="anonymous"></script>

</body>

</html>

