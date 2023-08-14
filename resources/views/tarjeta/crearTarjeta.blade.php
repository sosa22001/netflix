{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix login – Watch TV Shows Online, Watch Movies Online</title>
    <meta name="description" content="Watch Netflix movies & TV shows online or stream right to your smart TV, game console, PC, Mac, mobile, tablet and more.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/nficon2016.ico') }}" type="image/x-icon">
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/crearTarjeta.css') }}">
</head>
<body>
    
    
    
    <main class="container">
        <form action="{{ route('tarjeta.siguiente') }}" style="width: 400px" method="POST">
            @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Número de tarjeta</label>
                <input type="text" class="form-control" name="numeroTarjeta">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Fecha de vencimiento</label>
                <input type="date" class="form-control" name="fechaVencimiento">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">CVV</label>
                <input type="text" class="form-control" name="cvv">
            </div>


            <select class="form-select form-select-lg mb-2" aria-label="Large select example" name="tipoTarjeta">
                <option selected>Tipo de tarjeta</option>
                <option value="credito">Crédito o débito</option>
            </select>

            <!-- inputs ocultos-->
            <input type="hidden" name="nombre" value="{{ $informacionUsuarioPlan['nombre'] }}">
            <input type="hidden" name="apellido" value="{{ $informacionUsuarioPlan['apellido'] }}">
            <input type="hidden" name="correo" value="{{ $informacionUsuarioPlan['correo'] }}">
            <input type="hidden" name="contrasenia" value="{{ $informacionUsuarioPlan['contrasenia'] }}">

            <input type="hidden" name="idPlan" value="{{ $informacionUsuarioPlan['seleccionar-plan'] }}">

            <button type="submit" class="btn btn-primary">Realizar Compra Y Crear Usuario</button>
        </form>
    </main>
</body>
</html> --}}

{{-- KENNETH --}}
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cuenta</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"
        integrity="sha256-t2kyTgkh+fZJYRET5l9Sjrrl4UDain5jxdbqe8ejO8A=" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{asset('css/global.css')}}">
    <link rel="stylesheet" href="{{asset('css/userprofile.css')}}">
    <link rel="stylesheet" href="{{asset('css/browse.css')}}">

    <style>
            main {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.2) 60%, rgba(0, 0, 0, 0.9) 100%),
                              url("{{ asset('images/netflix-clone.jpg') }}");
                              color: white;
        }

        .line {
            background-color: white;
        }

        .headline{
            color: white;
            font-weight: 600;
        }

        h2{
            color: white;
        }
            #userprofilecontainer .heading {
            color: white;
            }
    </style>
</head>

<body>

     <main id="mainContainer" class="p-b-40">

        <header class="d-flex space-between flex-center flex-middle">
            <div class="nav-links d-flex flex-center flex-middle">
                <a href="#">
                    <h2 class="logo logo-text red-color f-s-28 m-r-25">NETFLIX</h2>
                    <h2 class="second-logo-text red-color f-s-28">N</h2>
                </a>
            </div>
        </header>

        <!--profile section-->
        <section class="userprofile" id="userprofilecontainer">       

            <div>
                <h2 class="heading f-s-40">
                    Metodo de Pago
                </h2>
            </div>

            <div class="line"></div>

            <form action="{{ route('tarjeta.siguiente')}}" method="POST">
                @csrf
                {{-- perfil nombre --}}
                <div class="membership d-flex flex-no-wrap space-between">
                    <div class="left">
                        <h4 class="headline">
                            NUMERO DE TARJETA
                        </h4>
                    </div>
                    <div class="right">
                        <div class="d-flex space-between">
                            <input type="text" class="netflix-input" required name="numeroTarjeta">
                        </div>
                    </div>  
                </div>
                <div class="line"></div>
    
                <!--contrasenia-->
                <div class=" plan-details d-flex flex-middle space-between">
                    <div class="left">
                        <h4 class="headline">CVV</h4>
                    </div>
                    <div class="right d-flex space-between">
                        <input type="text" class="netflix-input" required name="cvv">
                    </div>
                </div>
                <div class="line"></div>

                <!--fecha de vencimiento-->
                <div class=" plan-details d-flex flex-middle space-between">
                    <div class="left">
                        <h4 class="headline">FECHA DE EXPIRACION</h4>
                    </div>
                    <div class="right d-flex space-between">
                        <input type="date" class="netflix-input" required name="fechaVencimiento">
                    </div>
                </div>
                <div class="line"></div>       

                <!-- inputs ocultos-->
                <input type="hidden" name="nombre" value="{{ $informacionUsuarioPlan['nombre'] }}">
                <input type="hidden" name="apellido" value="{{ $informacionUsuarioPlan['apellido'] }}">
                <input type="hidden" name="correo" value="{{ $informacionUsuarioPlan['correo'] }}">
                <input type="hidden" name="contrasenia" value="{{ $informacionUsuarioPlan['contrasenia'] }}">
                <input type="hidden" name="idPlan" value="{{ $informacionUsuarioPlan['seleccionar-plan'] }}">
                
                <button type="submit" class="netflix-button" style="width:40%;">¡Siguiente!</button>
            </form>
        </section>
        </div>
    </main> 
    <script src="https://kit.fontawesome.com/8b44041adf.js" crossorigin="anonymous"></script>
</body>
</html>

