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
            <div class="righticons d-flex flex-end flex-middle">
                <div class="dropdown">
                    <i class="fa-solid fa-grip-lines" style="color: #aaa; font-size:2rem;"></i>

                        <div class="dropdown-content">
                            <div class="line"></div>
                            <div class="links d-flex direction-column">
                                <a href="{{route('usuario.ayuda', ['idUsuario' => $idUsuario])}}">Ayuda</a>
                                <a href="{{route('login.formulario')}}">Salir de Netflix</a>
                            </div>
                            
                        </div>
                </div>

            </div>
        </header>



        <!--profile section-->
        <section class="userprofile" id="userprofilecontainer">
            <div>
                <h2 class="heading f-s-40">
                    Cuenta
                </h2>
            </div>
            <div class="line"></div>
            <div class="membership d-flex flex-no-wrap space-between">
                <div class="left">
                    <h4 class="headline">
                        MEMBRESIA Y FACTURACION
                    </h4>
                </div>
                <div class="right">
                    <div class="d-flex space-between">
                        <div class="email">
                            <strong>correo: {{$usuario->correo}}</strong>
                        </div>
                        <div class="link">
                            <a href="{{route('usuario.editarUsuario', ['idUsuario' => $idUsuario])}}" class="link-item">
                                Cambiar informacion
                            </a>
                        </div>
                    </div>

                    <div class="d-flex space-between">
                        <div class="password">
                            Contraseña: ********* 
                        </div>
                    </div>

                    <div class="d-flex space-between">
                        <div class="email">
                            Nombre: {{$usuario->nombre}}
                        </div>
                    </div>

                    <div class="d-flex space-between">
                        <div class="email">
                            Apellido: {{$usuario->apellido}}
                        </div>

                    </div>
                    <div class="line"></div>

                    <div class="carddetail d-flex space-between">
                        <div class="card">
                            <h4><span class="icon-visa">VISA</span> •••• •••• •••• 5350</h4>
                        </div>
                        <div class="link">
                            <a href="{{route('usuario.editarFormaPago', ['idUsuario' => $idUsuario])}}" class="link-item">
                                Actualizar informacion de pago
                            </a>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="line"></div>

            <!--plan details-->
            <div class=" plan-details d-flex flex-middle space-between">
                <div class="left">
                    <h4 class="headline">DETALLES DEL PLAN</h4>
                </div>
                <div class="right d-flex space-between">
                    <p>{{$usuario->plan->nombrePlan}}</p>
                    <a href="{{route('usuario.editarPlan', ['idUsuario' => $idUsuario])}}" class="link-item">Cambiar Plan</a>
                </div>
            </div>
            <div class="line"></div>

            <!--parental control-->

            <div class="parental-control d-flex">
                <div class="left">
                    <h4 class="headline">PERFILES</h4>
                </div>
                <div class="right">
                    @foreach ( $perfiles as $perfilIt )
                    <div class="">
                        <div class="info-container d-flex flex-middle space-between">
                            <div class="name d-flex">
                                <img src="{{ asset('images/' . $perfilIt->imagen) }}" alt="user" class="user-icon" style="border:1px solid #aaa;"/>
                                <div class="content">
                                    <p class="username">{{$perfilIt->nombre}}</p>
                                </div>
                            </div>
    
                            <div class="righticon">
                                <div class="link">
                                    <a href="{{route('usuario.editarPerfil', ['idUsuario' => $idUsuario, 'idPerfil' => $perfilIt->idPerfil])}}" class="link-item">
                                        Actualizar
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="line"></div>
                    </div>
                        
                    @endforeach
                </div>
                
                
            </div>
        </section>

        <!--footer section and footer fixed menu mobile-->

        <footer class="mainfooter d-flex direction-column space-between" id="footer">
            <div class="container footer-container flex-start">
                <div class="widgets d-flex space-between">
                    <div class="first-widget">
                        <ul>
                            <li class="list-item">Audio and Subtitles</li>
                            <li class="list-item">Media Center</li>
                            <li class="list-item">Privacy</li>
                            <li class="list-item">Contact us</li>
                        </ul>
                    </div>
                    <div class="second-widget">
                        <ul>
                            <li class="list-item">Help Center</li>
                            <li class="list-item">Cookie</li>
                            <li class="list-item">Jobs</li>
                        </ul>
                    </div>
                    <div class="third-widget">
                        <ul>
                            <li class="list-item">Audio Description</li>
                            <li class="list-item">Investor Relations</li>
                            <li class="list-item">Legal Notice</li>
                        </ul>
                    </div>
                    <div class="forth-widget">
                        <ul>
                            <li class="list-item">Gift Card</li>
                            <li class="list-item">Term Of Use</li>
                            <li class="list-item">Corporate Information</li>
                        </ul>
                    </div>
                </div>
                <button class="button service">Service Code</button>
                <p class="copyright">@copyright 2020 Vanilacodes, Inc.</p>
            </div>


        </footer>
        </div>


    </main>

    <div class="footer-navigation d-flex space-between">
        <a href="browse.html" class="nav-item active">
            <i class="fa fa-home" aria-hidden="true"></i> </br>
            <span>Home</span>
        </a>
        <a href="search.html" class="nav-item">
            <i class="fa fa-search" aria-hidden="true"></i></br>
            Search
        </a>
        <a href="latest.html" class="nav-item">
            <i class="fa fa-film" aria-hidden="true"></i></br>
            Latest
        </a>
        <a href="user-profile/home.html" class="nav-item">
            <i class="fa fa-user" aria-hidden="true"></i></br>
            Account
        </a>
    </div>

    <script src="https://kit.fontawesome.com/8b44041adf.js" crossorigin="anonymous"></script>

</body>

</html>