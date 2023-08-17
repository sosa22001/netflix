<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/nficon2016.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"
        integrity="sha256-t2kyTgkh+fZJYRET5l9Sjrrl4UDain5jxdbqe8ejO8A=" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/browse.css') }}">
    <link rel="stylesheet" href="{{ asset('css/single.css')}}">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.2/plyr.css" />
    <script src="https://cdn.plyr.io/3.6.2/plyr.polyfilled.js"></script>

</head>

<body>
    <main id="mainContainer" class="p-b-40">

        <header class="d-flex space-between flex-center flex-middle">
            <div class="nav-links d-flex flex-center flex-middle">
                <a href="{{route('perfiles.inicio', ['idUsuario' => $idUsuario, 'idPerfil' => $perfil->idPerfil])}}">
                    <h2 class="logo logo-text red-color f-s-28 m-r-25">NETFLIX</h2>
                    <h2 class="second-logo-text red-color f-s-28">N</h2>
                </a>
                <a href="{{route('peliculas.mostrar')}}" class="nav-item">Peliculas</a>
                <a href="{{route('perfil.miLista', ['idUsuario' => $idUsuario ,'idPerfil' => $perfil->idPerfil])}}" class="nav-item latest">Mi Lista</a>
                <a href="{{route('perfil.continuarViendo', ['idUsuario' => $idUsuario ,'idPerfil' => $perfil->idPerfil])}}" class="nav-item">Continuar Viendo</a>
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
                            <a href="{{route('usuario.cuentaConfig', ['idUsuario' => $idUsuario, 'idPerfil' => $perfil->idPerfil])}}">Cuenta</a>
                            <a href="{{route('usuario.ayuda', ['idUsuario' => $idUsuario])}}">Ayuda</a>
                            <a href="{{route('login.formulario')}}">Salir de Netflix</a>
                        </div>
                    </div>
                </div>              
            </div> 
        </header>

        <div class="videocontainer">
            <video controls crossorigin playsinline
                poster="{{asset('images/movies/murder mystery.jpg')}}" id="player">
                <!-- Video -->
                <source src="{{asset('images/movies/videos/Murder Mystery - Trailer - Netflix.mp4')}}" type="video/mp4">

                <!-- Caption -->
                <track kind="captions" label="English" srclang="en"
                    src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt" default>
            </video>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const player = new Plyr('#player');
                window.player = player;
                function on(selector, type, callback) {
                    document.querySelector(selector).addEventListener(type, callback, false);
                }
            });
        </script>


        <section class="movieinformation container">
            <div class="movielogo">
                <img src="../images/movies/murder mystery logo.webp" alt="">
            </div>
            <div class="description">
                <b>Sinopsis:</b> {{$pelicula->descripcion}}
            </div>
            <div class="castinformation">
                <p><span class="name">Titulo:</span> {{$pelicula->titulo}}</p>
                <p><span class="name">Duracion:</span> {{$pelicula->duracion}} mins</p>
                <p><span class="name">Año de lanzamiento:</span> {{$pelicula->aniolanzamiento}}</p>
                <p><span class="name">Categoria:</span> {{$pelicula->categoria->genero}}</p>
            </div>
            <div class="actions d-flex flex-start flex-middle">
                <a href="{{route('perfil.agregarMiLista', ['idPerfil'=>$perfil->idPerfil, 'idPelicula'=>$pelicula->idPeliculas,   'idUsuario'=>$idUsuario])}}" class="link-item">
                    <i class="fa fa-plus"></i></br>
                    Mi Lista
                </a>
                <a href="{{route('pelicula.meGusta', ['idUsuario' => $idUsuario, 'idPerfil' => $perfil->idPerfil, 'idPelicula' => $pelicula->idPeliculas])}}" class="link-item">
                    <i class="fa fa-thumbs-up"></i></br>
                    Me Gusta
                </a>
            </div>
        </section>

        <!--similares-->
        <section id="similar" class="container p-t-40">
            <h4 class="romantic-heading">
                Mas de la catgoria <b>{{$pelicula->categoria->genero}}</b>
            </h4>
            <div class="romantic-container d-flex flex-start flex-middle">
                @foreach ($pelicRelacionadas as $pelic)
                    <a href="{{route('agregar.continuarviendo', ['idPerfil'=>$perfil->idPerfil, 'idPelicula'=>$pelic->idPeliculas, 'idUsuario'=>$idUsuario])}}">
                        <img src="{{asset('images/movies/' . $pelic->imagen)}}"
                            class="mylist-img p-r-10 p-t-10 image-size item"></a>
                @endforeach
            </div>
        </section>
        </div>

        <!--footer-->
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


</body>

</html>