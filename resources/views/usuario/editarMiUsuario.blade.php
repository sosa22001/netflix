<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cuenta</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/nficon2016.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"
        integrity="sha256-t2kyTgkh+fZJYRET5l9Sjrrl4UDain5jxdbqe8ejO8A=" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/global.css')}}">
    <link rel="stylesheet" href="{{asset('css/userprofile.css')}}">
    <link rel="stylesheet" href="{{asset('css/browse.css')}}">
</head>

<body>

     <main id="mainContainer" class="p-b-40">

        <header class="d-flex space-between flex-center flex-middle">
            <div class="nav-links d-flex flex-center flex-middle">
                <a href="{{route('perfiles.inicio', ['idUsuario' => $idUsuario, 'idPerfil' => $idPerfil])}}">
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
                                <a href="{{route('usuario.cuentaConfig', ['idUsuario' => $idUsuario, 'idPerfil' => $idPerfil])}}">Cuenta</a>
                                <a href="{{route('usuario.ayuda', ['idUsuario' => $idUsuario])}}">Ayuda</a>
                                <a href="{{route('login.formulario')}}">Salir de Netflix</a>
                            </div>
                            
                        </div>
                    </div>              
                </div>             
            </div>
        </header>



        <!--profile section-->
        <section class="userprofile" id="userprofilecontainer">       

            <div>
                <h2 class="heading f-s-40">
                    Editar Mi Cuenta
                </h2>
            </div>

            <div class="line"></div>

            <form action="{{route('usuario.guardarUsuarioEditado', ['idUsuario' => $idUsuario, 'idPerfil' => $idPerfil])}}" method="POST">
                @csrf
                @method('PUT')
                {{-- perfil nombre --}}
                <div class="membership d-flex flex-no-wrap space-between">
                    <div class="left">
                        <h4 class="headline">
                            NOMBRE DEL USUARIO
                        </h4>
                    </div>
                    <div class="right">
                        <div class="d-flex space-between">
                            <input type="text" class="netflix-input" value="{{$usuario->nombre}}" required name="nombre">
                        </div>
                    </div>  
                </div>
                <div class="line"></div>

                <!--apellido-->
                <div class=" plan-details d-flex flex-middle space-between">
                    <div class="left">
                        <h4 class="headline">APELLIDO DEL USUARIO</h4>
                    </div>
                    <div class="right d-flex space-between">
                        <input type="text" class="netflix-input" value="{{$usuario->apellido}}" required name="apellido">
                    </div>
                </div>
                <div class="line"></div>

                {{-- correo --}}
                <div class=" plan-details d-flex flex-middle space-between">
                    <div class="left">
                        <h4 class="headline">CORREO</h4>
                    </div>
                    <div class="right d-flex space-between">
                        <input type="email" class="netflix-input" value="{{$usuario->correo}}" required name="correo">
                    </div>
                </div>
                <div class="line"></div>

    
                <!--contrasenia-->
                <div class=" plan-details d-flex flex-middle space-between">
                    <div class="left">
                        <h4 class="headline">CONTRASEÑA</h4>
                    </div>
                    <div class="right d-flex space-between">
                        <input type="password" class="netflix-input" value="{{$usuario->contrasena}}" required name="psw">
                    </div>
                </div>
                <div class="line"></div>
 
                {{-- Id usuario --}}
                <input type="hidden" name="idUsuario"  value="{{$idUsuario}}">

                <button type="submit" class="netflix-button" style="width:40%;">¡Actualizar!</button>
            </form>
        </section>


        </div>

    </main> 

        <script>
            function seleccionarIcono(valor) {
                var imagenes = document.querySelectorAll('#grid img');
                imagenes.forEach(function(imagen) {
                    imagen.classList.remove('seleccionado');
                });

                var imagenSeleccionada = document.querySelector('#grid img[data-value="' + valor + '"]');
                imagenSeleccionada.classList.add('seleccionado');
                document.getElementById('iconoSeleccionado').value = `user${valor}.png`;
            }
    </script>

    <script src="https://kit.fontawesome.com/8b44041adf.js" crossorigin="anonymous"></script>

</body>

</html>

