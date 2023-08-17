<!DOCTYPE html>

<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Netflix</title>
	<meta property="og:image" content="../images/site-image-description.PNG" />
    <link rel="{{asset('css/owl.carrousel.css')}}" />
    <link rel="icon" href="{{ asset('images/nficon2016.ico') }}" type="image/x-icon">
    <script src="asset('lib/jquery 3.5.0.js')"></script>
    <script src="{{asset('lib/owl.carousel.js')}}"></script>
    <script src="{{asset('js/main-script.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" integrity="sha256-t2kyTgkh+fZJYRET5l9Sjrrl4UDain5jxdbqe8ejO8A=" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/global.css')}}">
    <link rel="stylesheet" href="{{asset('css/browse.css')}}">
    <link rel="stylesheet" href="{{asset('css/mi-lista-seguir-viendo.css')}}">

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
                                <a href="{{route('usuario.cuentaConfig', ['idUsuario' => $idUsuario])}}">Cuenta</a>
                                <a href="{{route('usuario.ayuda', ['idUsuario' => $idUsuario])}}">Ayuda</a>
                                <a href="{{route('login.formulario')}}">Salir de Netflix</a>
                            </div>
                        </div>
                    </div>              
                </div> 
            </header>

            <!-- hero section -->
            <div class="">
                <section id="browse-dashboard" class=" d-flex direction-column flex-start middle-align">
                    <div>
                        <!--trailer video-->
                        <video class="hero-background-image" id="hero-video"
                            poster="{{asset('images/movies/poster/never-have-ever-tv-show.webp')}}">
                            <source src="asset('images/movies/videos/Never Have I Ever - Official Trailer - Netflix_2.mp4')"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                        <!--left shadow-->
                        <div class="shadow-layer"></div>
                    </div>

                    <div class="container text-container" style="z-index: 5;">
                        <div class="contentlogo">
                            <img src="{{asset('images/tv-show/poster/never-have-ever-logo.webp')}}" alt="content logo"
                                class="show-logo" />
                        </div>
                        <!--top 10 ranking badge svg-->
                        <div class="ranking d-flex m-t-20 flex-middle">
                            <svg id="top-10-badge" viewBox="0 0 28 30">
                                <path d="M0,0 L28,0 L28,30 L0,30 L0,0 Z M2,2 L2,28 L26,28 L26,2 L2,2 Z" fill="#FFFFFF">
                                </path>
                                <path
                                    d="M16.8211527,22.1690594 C17.4133103,22.1690594 17.8777709,21.8857503 18.2145345,21.3197261 C18.5512982,20.7531079 18.719977,19.9572291 18.719977,18.9309018 C18.719977,17.9045745 18.5512982,17.1081018 18.2145345,16.5414836 C17.8777709,15.9754594 17.4133103,15.6921503 16.8211527,15.6921503 C16.2289952,15.6921503 15.7645345,15.9754594 15.427177,16.5414836 C15.0904133,17.1081018 14.9223285,17.9045745 14.9223285,18.9309018 C14.9223285,19.9572291 15.0904133,20.7531079 15.427177,21.3197261 C15.7645345,21.8857503 16.2289952,22.1690594 16.8211527,22.1690594 M16.8211527,24.0708533 C15.9872618,24.0708533 15.2579042,23.8605988 14.6324861,23.4406836 C14.0076618,23.0207685 13.5247891,22.4262352 13.1856497,21.6564897 C12.8465103,20.8867442 12.6766436,19.9786109 12.6766436,18.9309018 C12.6766436,17.8921018 12.8465103,16.9857503 13.1856497,16.2118473 C13.5247891,15.4379442 14.0076618,14.8410352 14.6324861,14.4205261 C15.2579042,14.0006109 15.9872618,13.7903564 16.8211527,13.7903564 C17.6544497,13.7903564 18.3844012,14.0006109 19.0098194,14.4205261 C19.6352376,14.8410352 20.1169224,15.4379442 20.4566558,16.2118473 C20.7952012,16.9857503 20.9656618,17.8921018 20.9656618,18.9309018 C20.9656618,19.9786109 20.7952012,20.8867442 20.4566558,21.6564897 C20.1169224,22.4262352 19.6352376,23.0207685 19.0098194,23.4406836 C18.3844012,23.8605988 17.6544497,24.0708533 16.8211527,24.0708533"
                                    fill="#FFFFFF"></path>
                                <polygon fill="#FFFFFF"
                                    points="8.86676 23.9094206 8.86676 16.6651418 6.88122061 17.1783055 6.88122061 14.9266812 11.0750267 13.8558085 11.0750267 23.9094206">
                                </polygon>
                                <path
                                    d="M20.0388194,9.42258545 L20.8085648,9.42258545 C21.1886861,9.42258545 21.4642739,9.34834303 21.6353285,9.19926424 C21.806383,9.05077939 21.8919103,8.83993091 21.8919103,8.56731273 C21.8919103,8.30122788 21.806383,8.09572485 21.6353285,7.94961576 C21.4642739,7.80410061 21.1886861,7.73104606 20.8085648,7.73104606 L20.0388194,7.73104606 L20.0388194,9.42258545 Z M18.2332436,12.8341733 L18.2332436,6.22006424 L21.0936558,6.22006424 C21.6323588,6.22006424 22.0974133,6.31806424 22.4906012,6.51465818 C22.8831952,6.71125212 23.1872921,6.98684 23.4028921,7.34142182 C23.6178982,7.69659758 23.7259952,8.10522788 23.7259952,8.56731273 C23.7259952,9.04246424 23.6178982,9.45762788 23.4028921,9.8122097 C23.1872921,10.1667915 22.8831952,10.4429733 22.4906012,10.6389733 C22.0974133,10.8355673 21.6323588,10.9335673 21.0936558,10.9335673 L20.0388194,10.9335673 L20.0388194,12.8341733 L18.2332436,12.8341733 Z"
                                    fill="#FFFFFF"></path>
                                <path
                                    d="M14.0706788,11.3992752 C14.3937818,11.3992752 14.6770909,11.322063 14.9212,11.1664509 C15.1653091,11.0114327 15.3553697,10.792863 15.4913818,10.5107418 C15.6279879,10.2286206 15.695697,9.90136 15.695697,9.52717818 C15.695697,9.1535903 15.6279879,8.82573576 15.4913818,8.54361455 C15.3553697,8.26149333 15.1653091,8.04351758 14.9212,7.88790545 C14.6770909,7.73288727 14.3937818,7.65508121 14.0706788,7.65508121 C13.7475758,7.65508121 13.4642667,7.73288727 13.2201576,7.88790545 C12.9760485,8.04351758 12.7859879,8.26149333 12.6499758,8.54361455 C12.5139636,8.82573576 12.4456606,9.1535903 12.4456606,9.52717818 C12.4456606,9.90136 12.5139636,10.2286206 12.6499758,10.5107418 C12.7859879,10.792863 12.9760485,11.0114327 13.2201576,11.1664509 C13.4642667,11.322063 13.7475758,11.3992752 14.0706788,11.3992752 M14.0706788,12.9957842 C13.5634545,12.9957842 13.0995879,12.9090691 12.6784848,12.7344509 C12.2573818,12.5604267 11.8915152,12.3163176 11.5808848,12.0027176 C11.2708485,11.6891176 11.0314909,11.322063 10.8634061,10.9003661 C10.6953212,10.479263 10.6115758,10.0213358 10.6115758,9.52717818 C10.6115758,9.03302061 10.6953212,8.57568727 10.8634061,8.1539903 C11.0314909,7.73288727 11.2708485,7.36523879 11.5808848,7.05163879 C11.8915152,6.73803879 12.2573818,6.49452364 12.6784848,6.31990545 C13.0995879,6.14588121 13.5634545,6.05857212 14.0706788,6.05857212 C14.577903,6.05857212 15.0417697,6.14588121 15.4628727,6.31990545 C15.8839758,6.49452364 16.2498424,6.73803879 16.5604727,7.05163879 C16.871103,7.36523879 17.1098667,7.73288727 17.2779515,8.1539903 C17.4460364,8.57568727 17.5297818,9.03302061 17.5297818,9.52717818 C17.5297818,10.0213358 17.4460364,10.479263 17.2779515,10.9003661 C17.1098667,11.322063 16.871103,11.6891176 16.5604727,12.0027176 C16.2498424,12.3163176 15.8839758,12.5604267 15.4628727,12.7344509 C15.0417697,12.9090691 14.577903,12.9957842 14.0706788,12.9957842"
                                    fill="#FFFFFF"></path>
                                <polygon fill="#FFFFFF"
                                    points="8.4639503 12.8342327 6.65837455 13.2666206 6.65837455 7.77862061 4.65323515 7.77862061 4.65323515 6.22012364 10.4690897 6.22012364 10.4690897 7.77862061 8.4639503 7.77862061">
                                </polygon>
                            </svg>
                            <span class="p-l-10">#2 en Honduras Hoy</span>
                        </div>

                        <div class="synopsis m-t-20" style="max-width: 500px;">
                            <p>
                                ¿Obtener las calificaciones? Muy fácil. ¿Superar el duelo? Muy difícil. Este año, hay un único objetivo en su mente: conseguir al chico.
                            </p>
                        </div>
                        <div class="buttons-container m-t-20">
                            <button class="play-button"><span>
                                    <svg viewBox="0 0 24 24">
                                        <path d="M6 4l15 8-15 8z" fill="currentColor"></path>
                                    </svg>
                                </span> <a href="single.html">Play</a></button>

                            <button class="more-info-button m-t-20"><span>
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2s10 4.477 10 10zm-2 0a8 8 0 0 0-8-8 8 8 0 0 0-8 8 8 8 0 0 0 8 8 8 8 0 0 0 8-8zm-9 6v-7h2v7h-2zm1-8.75a1.21 1.21 0 0 1-.877-.364A1.188 1.188 0 0 1 10.75 8c0-.348.123-.644.372-.886.247-.242.54-.364.878-.364.337 0 .63.122.877.364.248.242.373.538.373.886s-.124.644-.373.886A1.21 1.21 0 0 1 12 9.25z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span> Mas Info</button>
                        </div>
                    </div>
                </section>
            </div>


            <!--paretn div with black bg after main hero section-->
            <div class="black-background">

                <!--mi lista -->
                <section id="mylist" class="container">

                    <h4 class="mylist-heading">
                        Mi Lista
                    </h4>
                    <div class="romantic-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">
                        @foreach ($miLista as $peliculaL)
                            <a href="#">
                                <img src="{{asset('images/movies/' . $peliculaL->imagen)}}" alt="" width="250px"
                                    class="mylist-img p-r-10 p-t-10 image-size item">
                            </a>
                        @endforeach
                    </div>
                </section>

                <!--continuar viendo-->
                <section id="continue-watching" class="container p-t-40">
                    <h4 class="continue-watching-heading">
                        Continuar viendo contenido de {{$perfil->nombre}}
                    </h4>
                    <div class="romantic-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">
                        @foreach ($continuarViendo as $cv)
                            <a href="#">
                                <img src="{{asset('images/movies/' . $cv->imagen)}}"  alt="" width="250px"
                                    class="mylist-img p-r-10 p-t-10 image-size item">
                            </a>    
                        @endforeach
                    </div>
                </section>

                <!--peliculas romanticas-->
                <section id="romantic" class="container p-t-40">
                    <h4 class="romantic-heading">
                        Peliculas Romanticas
                    </h4>
                    <div class="romantic-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">
                        @foreach ($peliculas as $pelicula)
                            @if($pelicula->categoria->genero == "romantico")
                                <a href="{{route('agregar.continuarviendo', ['idPerfil'=>$perfil->idPerfil, 'idPelicula'=>$pelicula->idPeliculas, 'idUsuario'=>$idUsuario])}}">
                                    <img src="{{asset('images/movies/' . $pelicula->imagen)}}" alt="" width="250px"
                                        class="mylist-img p-r-10 p-t-10 image-size item">
                                </a>
                            @endif
                        @endforeach
                    </div>
                </section>

                {{-- miedo --}}
                <section id="romantic" class="container p-t-40">
                    <h4 class="romantic-heading">
                        Thrillers que hielan la sangre
                    </h4>
                    <div class="romantic-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">
                        @foreach ($peliculas as $pelicula)
                            @if($pelicula->categoria->genero == "terror")
                                <a href="#">
                                    <img src="{{asset('images/movies/' . $pelicula->imagen)}}" alt="" width="250px"
                                        class="mylist-img p-r-10 p-t-10 image-size item">
                                </a>    
                            @endif
                        @endforeach
                    </div>
                </section>

                {{-- Comedia --}}
                <section id="romantic" class="container p-t-40">
                    <h4 class="romantic-heading">
                        Comedia
                    </h4>
                    <div class="romantic-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">
                        @foreach ($peliculas as $pelicula)
                            @if($pelicula->categoria->genero == "comedia")
                                <a href="#">
                                    <img src="{{asset('images/movies/' . $pelicula->imagen)}}" alt="" width="250px"
                                        class="mylist-img p-r-10 p-t-10 image-size item">
                                </a>    
                            @endif
                        @endforeach
                    </div>
                </section>

                <!--Poster de pelicula mas nueva -->
                <section class="big-section d-flex flex-start container">
                    <img src="{{asset('images/movies/' . $peliculaNueva->imagen)}}" alt="">

                    <div class="right-side">


                        <!--top 10 ranking badge svg-->
                        <div class="ranking d-flex m-t-20 flex-middle">
                            <span class="p-l-10 f-s-24 f-w-8">Pelicula Mas Nueva</span>
                        </div>

                        <div class="synopsis m-t-20" style="max-width: 500px;">
                            <p class="f-s-20">
                                {{$peliculaNueva->descripcion}}
                            </p>
                        </div>
                        <div class="buttons-container m-t-20">
                            <button class="play-button"><span>
                                    <svg viewBox="0 0 24 24">
                                        <path d="M6 4l15 8-15 8z" fill="currentColor"></path>
                                    </svg>
                                </span> Play</button>

                            <button class="more-info-button m-t-20"><span>
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2s10 4.477 10 10zm-2 0a8 8 0 0 0-8-8 8 8 0 0 0-8 8 8 8 0 0 0 8 8 8 8 0 0 0 8-8zm-9 6v-7h2v7h-2zm1-8.75a1.21 1.21 0 0 1-.877-.364A1.188 1.188 0 0 1 10.75 8c0-.348.123-.644.372-.886.247-.242.54-.364.878-.364.337 0 .63.122.877.364.248.242.373.538.373.886s-.124.644-.373.886A1.21 1.21 0 0 1 12 9.25z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span> Mas Info</button>
                        </div>
                    </div>
                </section>

                <!--accion-->
                <section id="romantic" class="container p-t-40">
                    <h4 class="romantic-heading">
                        Ponte en accion
                    </h4>
                    <div class="romantic-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">
                        @foreach ($peliculas as $pelicula)
                            @if($pelicula->categoria->genero == "accion")
                                <a href="#">
                                    <img src="{{asset('images/movies/' . $pelicula->imagen)}}" alt=""
                                        class="mylist-img p-r-10 p-t-10 image-size item">
                                </a>    
                            @endif
                        @endforeach
                    </div>
                </section>

                <!--series-->
                <section id="romantic" class="container p-t-40">
                    <h4 class="romantic-heading">
                        Series
                    </h4>
                    <div class="romantic-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">
                        @foreach ($peliculas as $pelicula)
                            @if($pelicula->categoria->genero == "serie")
                                <a href="#">
                                    <img src="{{asset('images/movies/' . $pelicula->imagen)}}" alt=""
                                        class="mylist-img p-r-10 p-t-10 image-size item">
                                </a>    
                            @endif
                        @endforeach
                    </div>
                </section>

                <!--Animadas-->
                <section id="romantic" class="container p-t-40">
                    <h4 class="romantic-heading">
                        Hollywood Action Movies
                    </h4>
                    <div class="romantic-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">
                        @foreach ($peliculas as $pelicula)
                            @if($pelicula->categoria->genero == "animadas")
                                <a href="#">
                                    <img src="{{asset('images/movies/' . $pelicula->imagen)}}" alt=""
                                        class="mylist-img p-r-10 p-t-10 image-size item">
                                </a>    
                            @endif
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
            Home
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