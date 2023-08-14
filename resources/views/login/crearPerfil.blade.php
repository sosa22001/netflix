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
    <header class="d-flex space-between flex-center flex-middle" style="osition: fixed; top: 2rem;">
        <div class="nav-links d-flex flex-center flex-middle">
            <a href="#">
                <h2 class="logo logo-text red-color f-s-28 m-r-25">NETFLIX</h2>
                <h2 class="second-logo-text red-color f-s-28">N</h2>
            </a>
        </div>
    </header>

     <main id="mainContainer" class="p-b-40">

        <!--profile section-->
        <section class="userprofile" id="userprofilecontainer">       

            <div style="display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 6rem;">
                <h2 class="heading f-s-40" style="padding: 0">
                    ¡Ya casi! Crea tu Primer Perfil
                </h2>
            </div>

            <div class="line"></div>

            <form action="{{route('registro.crearPerfil')}}" method="POST">
                @csrf
                {{-- perfil nombre --}}
                <div class="membership d-flex flex-no-wrap space-between">
                    <div class="left">
                        <h4 class="headline">
                            NOMBRE DEL PERFIL
                        </h4>
                    </div>
                    <div class="right">
                        <div class="d-flex space-between">
                            <input type="text" class="netflix-input" placeholder="Capitan Cine" name="nombrePerfil">
                        </div>
                    </div>  
                </div>
                <div class="line"></div>
    
                <!--contrasenia-->
                <div class=" plan-details d-flex flex-middle space-between">
                    <div class="left">
                        <h4 class="headline">PIN</h4>
                    </div>
                    <div class="right d-flex space-between">
                        <input type="password" class="netflix-input" placeholder="¡abreteSesamo!" name="psw">
                    </div>
                </div>
                <div class="line"></div>
    
                <!--icono-->
                <div class="settings d-flex ">
                    <div class="left">
                        <h4 class="headline">ICONOS</h4> 
                    </div>
                    <div id="grid">
                        <input type="hidden" name="icono" id="iconoSeleccionado" value="1">
                        <img src="{{ asset('images/user1.png') }}" alt="" data-value="1" onclick="seleccionarIcono(1)">
                        <img src="{{ asset('images/user2.png') }}" alt="" data-value="2" onclick="seleccionarIcono(2)">
                        <img src="{{ asset('images/user3.png') }}" alt="" data-value="3" onclick="seleccionarIcono(3)">
                        <img src="{{ asset('images/user4.png') }}" alt="" data-value="4" onclick="seleccionarIcono(4)">
                        <img src="{{ asset('images/user5.png') }}" alt="" data-value="5" onclick="seleccionarIcono(5)">
                    </div>
                </div>   

                <input type="hidden" value="{{$resultadoBackend->idUsuario}}" name="idUsuario">

                <button type="submit" class="netflix-button" style="width:40%;">¡Listo!</button>
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

