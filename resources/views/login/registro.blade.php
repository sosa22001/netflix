<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix login – Watch TV Shows Online, Watch Movies Online</title>
    <meta name="description" content="Watch Netflix movies & TV shows online or stream right to your smart TV, game console, PC, Mac, mobile, tablet and more.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/nficon2016.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>
<body style="background-color: white">
    
    <style>
        body::before {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.2) 60%, rgba(0, 0, 0, 0.9) 100%),
                              url("{{ asset('images/netflix-clone.jpg') }}");
        }
    </style>
    
    <main style="padding: 0px 10px;  width:400px">
        <header class="d-flex space-between middle-align">
            <a href="/">
                <h2 class="titulo">Netflix</h2>
            </a> 
            <!-- <button class="button"><a href="/login.html"> Sign In</a></button> -->
        </header>
        <section id="login-form-section">
                <div class="loginContainer d-flex direction-column">
                    <h2 class="formtitle">
                        Registra tu cuenta
                    </h2>
                    <form action="{{route('registro.siguiente')}}" id="loginForm" class="d-flex direction-column" method="post" name="loginForm">
                        @csrf

                        <input type="text" class="inputs" placeholder="Nombre" name="nombre">

                        <input type="text" class="inputs" name="apellido" id="" placeholder="Apellido" name="apellido">

                        <input type="text" name="correo" id="email" class="email" placeholder="Correo" required/>
                        <p id="errorEmail">Please enter a valid email address or phone number.</p>

                        <input type="password" name="contraseña" id="password" placeholder="Contraseña" required/>
                        <p id="errorPassword">Your password must contain between 4 and 60 characters.</p>

                        <button type="submit" class="button submitButton" id="signInButton">
                            Siguiente
                        </button>
                        <p class="signUpText para">
                            Tengo una cuenta? <span class="signUp"><a href="/login.html">Iniciar sesión</a></span>
                        </p>
                    </form>
                </div>
        </section>
    </main>
</body>
</html>