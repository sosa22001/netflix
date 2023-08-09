<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix login – Watch TV Shows Online, Watch Movies Online</title>
    <meta name="description" content="Watch Netflix movies & TV shows online or stream right to your smart TV, game console, PC, Mac, mobile, tablet and more.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>
<body >
    <main style="padding: 0px 10px;  width:400px">
        <header class="d-flex space-between middle-align">
            <a href="/">
                <h2 class="titulo">Netflix</h2>
            </a> 
            <button class="button"><a href="/login.html"> Sign In</a></button>
        </header>
        <section id="login-form-section">
                <div class="loginContainer d-flex direction-column">
                    <h2 class="formtitle">
                        Registra tu cuenta
                    </h2>
                    <form action="" id="loginForm" class="d-flex direction-column" method="post" name="loginForm">
                        @csrf

                        <input type="text" placeholder="Nombre" name="nombre">

                        <input type="text" name="" id="" placeholder="Apellido" name="apellido">

                        <select name="plan" class="inputs">
                            <option value="1">Plan básico</option>
                            <option value="2">Plan Estándar</option>
                            <option value="3">Plan premium</option>
                        </select>

                        <input type="text" name="correo" id="email" class="email" placeholder="Correo" onchange="validateEmail()" required/>
                        <p id="errorEmail">Please enter a valid email address or phone number.</p>

                        <input type="password" name="contraseña" id="password" placeholder="Contraseña" required/>
                        <p id="errorPassword">Your password must contain between 4 and 60 characters.</p>

                        <button type="submit" class="button submitButton" id="signInButton" disabled="disabled">
                            Registrar
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