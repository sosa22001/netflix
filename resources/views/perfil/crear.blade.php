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
            <div class="flex">
                <div>
                    <a href="{{route('perfiles.mostrar', ['idUsuario' => 1])}}">
                        <i class="fa-solid fa-xmark" style="color: #aaa; font-size:2rem;"></i>
                    </a>
                </div>
                <div class="righticons d-flex flex-end flex-middle">
                    <div class="dropdown">
                        <i class="fa-solid fa-grip-lines" style="color: #aaa; font-size:2rem;"></i>
    
                        <div class="dropdown-content">
                            <div class="line"></div>
                            <div class="links d-flex direction-column">
                                <a href="{{route('usuario.cuentaConfig')}}">Cuenta</a>
                                <a href="{{route('usuario.ayuda')}}">Ayuda</a>
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
                    Perfil Nuevo
                </h2>
            </div>

            <div class="line"></div>

            <form action="{{route('perfil.crear')}}" method="POST">
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
                            <input type="text" class="netflix-input" placeholder="Capitan Cine" required name="nombre">
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
                        <input type="password" class="netflix-input" placeholder="¡AbreteSesamo2023!" required name="psw">
                    </div>
                </div>
                <div class="line"></div>
    
                <!--icono-->
                <div class="settings d-flex ">
                    <div class="left">
                        <h4 class="headline">ICONO</h4> 
                    </div>
                    <div id="grid">
                        <input type="hidden" name="icono" id="iconoSeleccionado" value="1"> <!-- Campo oculto para el icono seleccionado -->
                        <img src="{{ asset('images/user1.png') }}" alt="" onclick="seleccionarIcono(1)">
                        <img src="{{ asset('images/user2.png') }}" alt="" onclick="seleccionarIcono(2)">
                        <img src="{{ asset('images/user3.png') }}" alt="" onclick="seleccionarIcono(3)">
                        <img src="{{ asset('images/user4.png') }}" alt="" onclick="seleccionarIcono(4)">
                        <img src="{{ asset('images/user5.png') }}" alt="" onclick="seleccionarIcono(5)">
                    </div>

                <button type="submit" class="netflix-button" style="width:40%;">¡Crear!</button>
            </form>
        </section>


        </div>

    </main> 
    <script>
        function seleccionarIcono(valor) {
            document.getElementById('iconoSeleccionado').value = valor;
    
            const imagenes = document.querySelectorAll('#grid img');
            for (let i = 0; i < imagenes.length; i++) {
                imagenes[i].classList.remove('seleccionado');
            }
/*             document.querySelector('#grid img[value="' + valor + '"]').classList.add('seleccionado');
 */        }
        console.log(valor);
    </script>

    <script src="https://kit.fontawesome.com/8b44041adf.js" crossorigin="anonymous"></script>

</body>

</html>

