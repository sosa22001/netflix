<!DOCTYPE html>

<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Perfiles</title>
    <meta name="description"
        content="Video streaming website Netflix clone. Frontend - HTML5, Pure CSS3 [flexbox], JS, OWL Carousel, JQuery |" />
    <meta name="robots" content="index, follow" />
    <link rel="icon" href="{{ asset('images/nficon2016.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="../assets/lib/owl.carousel.css" />
    <script src="../assets/lib/jquery 3.5.0.js"></script>
    <script src="../assets/lib/owl.carousel.js"></script>


    <!--main script file-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"
        integrity="sha256-t2kyTgkh+fZJYRET5l9Sjrrl4UDain5jxdbqe8ejO8A=" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('css/browse.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <script src="{{asset('js/main-script.js')}}"></script>

    <script src="asset('lib/jquery 3.5.0.js')"></script>
    <script src="{{asset('lib/owl.carousel.js')}}"></script>
    <script src="{{asset('js/main-script.js')}}"></script>

    <style>
        .user-icon {
            width: 80%;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <main id="mainContainer" class="p-b-40">
        <header class="d-flex space-between flex-center flex-middle">
            <div class="nav-links d-flex flex-center flex-middle">
                <a href="/">
                    <h2 class="logo logo-text red-color f-s-28 m-r-25">NETFLIX</h2>
                    <h2 class="second-logo-text red-color f-s-28">N</h2>
                </a>
            </div>
            <div class="flex">
                <div>
                    <a href="{{route('perfiles.mostrar', ['idUsuario' => 3])}}">
                        <i class="fa-solid fa-xmark" style="color: #aaa; font-size:2rem;"></i>
                    </a>
                </div>
                <div class="righticons d-flex flex-end flex-middle">
                    <div class="dropdown">
                        <i class="fa-solid fa-grip-lines" style="color: #aaa; font-size:2rem;"></i>
    
                        <div class="dropdown-content">
                            <div class="line"></div>
                            <div class="links d-flex direction-column">
                                <a href="user-profile/home.html">Cuenta</a>
                                <a href="#">Ayuda</a>
                                <a href="/">Salir de Netflix</a>
                            </div>
                            
                        </div>
                    </div>              
                </div>             
            </div>

        </header>

        
        
        </div>


    </main>
    <div class="d-flex p-t-40 flex-middle flex-center">
        <div class="p-t-40">
            
            <div class="p-4">
                <h1 style="text-align:center">¿Quien esta viendo ahora?</h1>
                <div class="d-flex flex-no-wrap"margin-left: auto; margin-right: auto" id="perfiles-usuario">
                    <a href="{{route('perfil.formulario', ['idUsuario' => 1, 'idPerfil' => 2])}}" class="perfil">
                        <img src="{{ asset('images/user1.png') }}" alt="">
                        <p>Lola</p>
                    </a>
                    <a href="{{route('perfil.formulario', ['idUsuario' => 1, 'idPerfil' => 2])}}" class="perfil">
                        <img src="{{ asset('images/user1.png') }}" alt="">
                        <p>Lola</p>
                    </a>                    
                    <a href="{{route('perfil.formulario', ['idUsuario' => 1, 'idPerfil' => 2])}}" class="perfil">
                        <img src="{{ asset('images/user2.png') }}" alt="">
                        <p>Lola</p>
                    </a>
                    
                
                    {{--                         <div class="perfil">
                            <a href="">

                            </a>
                            <img src="{{ asset('images/user1.png') }}" alt="">
                            <p>Lola</p>
                        </div>
                        <div class="perfil">
                            <img src="{{ asset('images/user1.png') }}" alt="">
                            <p>Lola</p>
                        </div>
                        <div class="perfil">
                            <a href="">

                                <img src="{{ asset('images/user2.png') }}" alt="">
                                <p>Añadir perfil</p>
                            </a>
                        </div> --}}
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/8b44041adf.js" crossorigin="anonymous"></script>
    <script src="/assets/js/profile-controller.js"></script>
</body>

</html>