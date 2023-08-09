<!DOCTYPE html>

<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Netflix world- Frontend Clone – Watch TV Shows Online, Watch Movies Online</title>
    <meta name="description"
        content="Video streaming website Netflix clone. Frontend - HTML5, Pure CSS3 [flexbox], JS, OWL Carousel, JQuery |" />
    <meta name="robots" content="index, follow" />

    <link rel="stylesheet" href="../assets/lib/owl.carousel.css" />
    <script src="../assets/lib/jquery 3.5.0.js"></script>
    <script src="../assets/lib/owl.carousel.js"></script>


    <!--main script file-->
    <script src="../assets/js/main-script.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"
        integrity="sha256-t2kyTgkh+fZJYRET5l9Sjrrl4UDain5jxdbqe8ejO8A=" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('css/browse.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carrousel.css') }}">

    <script>

    </script>
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
                <span class="nav-item home">Home</span>
                <span class="nav-item">TV Show</span>
                <span class="nav-item">Movies</span>
                <span class="nav-item latest">Latest</span>
                <span class="nav-item">My List</span>
            </div>
            <div class="righticons d-flex flex-end flex-middle">
                <a href="search.html"><img src="images/icons/search.svg" alt="search icon"></a>
                <div class="dropdown notification">
                    <img src="images/icons/notification.svg" alt="notificatio icon">
                    <div class="dropdown-content">
                        <a href="#" class="profile-item d-flex flex-middle">
                            <img src="../images/icons/user2.png" alt="user profile icon" class="user-icon">
                            <span>You have new notification from <span>User 123</span></span>
                        </a>
                        <a href="#" class="profile-item d-flex flex-middle">
                            <img src="{{asset('images/user1.png')}}" alt="user profile icon" class="user-icon">
                            <span>You have new notification from <span>User 123</span></span>
                        </a>
                        <a href="#" class="profile-item d-flex flex-middle">
                            <img src="{{asset('images/user2.png')}}" alt="user profile icon" class="user-icon">
                            <span>You have new notification from <span>User 123</span></span>
                        </a>
                        <a href="#" class="profile-item d-flex flex-middle">
                            <img src="../images/icons/user3.png" alt="user profile icon" class="user-icon">
                            <span>You have new notification from <span>User 123</span></span>
                        </a>
                    </div>
                </div>

                <div class="dropdown">
                    <img src="images/icons/user-image-green.png" alt="user profile icon" class="user-icon"> <span
                        class="profile-arrow"></span>

                    <div class="dropdown-content">
                        <div class="profile-links">
                            
                            <span class="profile-item last">Manage Profiles</span>
                        </div>
                        <div class="line"></div>
                        <div class="links d-flex direction-column">
                            <span href="my-acount.html">Account</a>
                            <a href="#">Help Center</a>
                            <a href="/">Sign Out of Netflix</a>
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
                <h1 style="text-align:center">Who is watching?</h1>
                <div class="d-flex flex-no-wrap"style="width: 60%; margin-left: auto; margin-right: auto" id="perfiles-usuario">
                    
                </div>
            </div>
        </div>
    </div>


    <div class="footer-navigation d-flex space-between">
        <a href="home.html" class="nav-item active">
            <i class="fa fa-home" aria-hidden="true"></i> </br>
            Home
        </a>
        <a href="my-acount.html" class="nav-item">
            <i class="fa fa-user" aria-hidden="true"></i></br>
            Account
        </a>
    </div>

    <script src="/assets/js/profile-controller.js"></script>
</body>

</html>