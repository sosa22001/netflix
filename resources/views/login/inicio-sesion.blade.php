<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix login – Watch TV Shows Online, Watch Movies Online | do not enter you any of the information</title>
    <meta name="description" content="This is a frontend only clone of netflix - Watch Netflix movies & TV shows online or stream right to your smart TV, game console, PC, Mac, mobile, tablet and more.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/nficon2016.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>

<body>
    <style>
        body::before {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.2) 60%, rgba(0, 0, 0, 0.9) 100%),
                              url("{{ asset('images/netflix-clone.jpg') }}");
        }
    </style>

    <main style="padding: 0px 10px;">
        <header class="d-flex space-between middle-align">
           <a href="/">
            <img src="{{ asset('images/logo.png') }}" alt="Logo"
 height="50px" width="170px" alt="site logo main" style="margin: auto;">
        </a> 
        </header>
        <section id="login-form-section">
            <!--Login form start-->

                <div class="loginContainer d-flex direction-column">
                    <h2 class="formtitle">
                        Inicio de sesión
                    </h2>
                    <form action="{{route('login.verificacion')}}" id="loginForm" class="d-flex direction-column" method="post" name="loginForm">
                        @csrf
                        <input type="text" name="email" id="email" class="email" placeholder="Correo"/>

                        <input type="password" name="contraseña" id="password" placeholder="Contraseña"/>

                        @if(session('mensaje'))
                        <div class="alert">
                            <span class="close-btn">{{ session('mensaje') }}</span>
                        </div>
                        @endif

                        <button type="submit" class="button submitButton" id="signInButton">
                        Iniciar sesión
                        </button>
                        
                        <p class="signUpText para">
                            Nuevo en Netflix? <span class="signUp"><a href="{{ route('registro.formulario') }}">Registrate ahora</a></span>
                        </p>
                    </form>
                </div>

            <!--Login form End-->
        </section>
    </main>
</body>

</html>
