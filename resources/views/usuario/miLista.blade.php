<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/nficon2016.ico') }}" type="image/x-icon">
    <script src="{{ asset('lib/jquery-3.5.0.js') }}"></script>
    <script src="{{ asset('js/main-script.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/browse.css') }}">
</head>

<body>

    <main id="mainContainer" class="p-b-40">
        <div>
            <header class="d-flex space-between flex-center flex-middle">
                <div class="nav-links d-flex flex-center flex-middle">
                    <a href="{{route('perfiles.inicio', ['idUsuario' => $idUsuario, 'idPerfil' => $perfil->idPerfil])}}">
                        <h2 class="logo logo-text red-color f-s-28 m-r-25">NETFLIX</h2>
                        <h2 class="second-logo-text red-color f-s-28">N</h2>
                    </a>
                    <a href="{{route('perfil.continuarViendo', ['idUsuario' => $idUsuario, 'idPerfil' => $perfil->idPerfil])}}" class="nav-item">Continuar Viendo</a>
                </div>
                <div class="righticons d-flex flex-end flex-middle">
                    <div class="dropdown">
                        <img src="{{asset('images/' . $perfil->imagen)}}" alt="user profile icon" class="user-icon"> <span class="profile-arrow"></span>

                        <div class="dropdown-content">
                            <div class="profile-links">
                                 @foreach ($perfiles as $perfilIt)
                                    @if ($perfilIt->idPerfil != $perfil->idPerfil)
                                        <a href="{{route('perfil.formulario', ['idUsuario' => $idUsuario, 'idPerfil' => $perfilIt->idPerfil])}}" class="profile-item d-flex flex-middle">
                                            <img src="{{asset('images/'.$perfilIt->imagen)}}" alt="user profile icon" class="user-icon">
                                            <span>{{$perfilIt->nombre}}</span>
                                        </a>
                                    @endif
                                @endforeach 
                                <br>
                                <a href="{{route('perfil.crearVista', ['idUsuario' => $idUsuario, 'idPerfil' => $perfil->idPerfil])}}" class="profile-item last">CrearPerfil</a>
                            </div>
                            <div class="line"></div>
                            <div class="links d-flex direction-column">
                                <a href="{{route('usuario.cuentaConfig', ['idUsuario' => $idUsuario])}}">Cuenta</a>
                                <a href="{{route('usuario.ayuda', ['idUsuario' => $idUsuario])}}">Ayuda</a>
                                <a href="{{route('login.formulario')}}">Salir de Netflix</a>
                            </div>
                        </div>
                    </div>              
                </div> 
            </header>


            <!--my list container-->
            <section id="mylist" class="container p-t-40" style="padding-top: 180px;">
                <h4 class="romantic-heading">
                    My List
                </h4>
                <div class="my-list-page-container d-flex flex-start flex-middle">
                    @foreach ($peliculas as $pelicula)
                        <a href="{{route('agregar.continuarviendo', ['idPerfil'=>$perfil->idPerfil, 'idPelicula'=>$pelicula->idPeliculas, 'idUsuario'=>$idUsuario])}}">
                            <img src="{{asset('images/movies/' . $pelicula->imagen)}}" alt=""
                                class="mylist-img p-r-10 p-t-10 image-size item"></a>
                    @endforeach
                </div>
            </section>

        </div>
        </div>

        <footer class="mainfooter d-flex direction-column space-between" id=" footer">
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

    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 5
                    }
                }
            });
        });
    </script>
    Con estos cambios, las imágenes dentro del contenedor div ahora serán manejadas por Owl Carousel y se mostrarán en forma de carrusel con las opciones de configuración que proporcionaste anteriormente. Asegúrate de que estás incluyendo las bibliotecas jQuery y Owl Carousel correctamente en tu página para que el carrusel funcione correctamente.
    
    
    
    
    
    
</body>

</html>