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

    <section id="continue-watching" class="container p-t-40">
        <h4 class="continue-watching-heading">
            Peliculas en la categoria de 
        </h4>
        <div class="romantic-container d-flex flex-start flex-middle flex-wrap owl-carousel">
            @foreach ($peliculas as $pelicula)
                <a href="#">
                    <img src="{{asset('images/movies/' . $pelicula->imagen)}}"  alt="" width="250px"
                        class="mylist-img p-r-10 p-t-10 image-size item">
                </a>    
            @endforeach
        </div>
    </section>


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