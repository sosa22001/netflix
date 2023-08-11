<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="{{asset('lib/jquery 3.5.0.js')}}"></script>
    <script src="{{asset('js/main-script.js')}}"></script>

    <link rel="stylesheet" href="{{asset('css/global.css')}}>
    <link rel="stylesheet" href="{{asset('css/browse.css')}}>
</head>

<body>

    <main id="mainContainer" class="p-b-40">
        <div>
            <header class="d-flex space-between flex-center flex-middle" style="z-index: 20; background-color: black;">
                <div class="nav-links d-flex flex-center flex-middle">
                    <a href="{{route('perfiles.inicio')}}">
                        <h2 class="logo logo-text red-color f-s-28 m-r-25">NETFLIX</h2>
                        <h2 class="second-logo-text red-color f-s-28">N</h2>
                    </a>
                    <a href="tvshow.html" class="nav-item">Peliculas</a>
                    <a href="latest.html" class="nav-item latest">Mi Lista</a>
                    <a href="mylist.html" class="nav-item">Continuar Viendo</a>
                </div>
                <div class="righticons d-flex flex-end flex-middle">
                    <a href="search.html"><img src="../images/icons/search.svg" alt="search icon"></a>
                    <div class="dropdown notification">
                        <img src="../images/icons/notification.svg" alt="notificatio icon">
                        <div class="dropdown-content">
                            <a href="#" class="profile-item d-flex flex-middle">
                                <img src="../../images/icons/user2.png" alt="user profile icon" class="user-icon">
                                <span>You have new notification from <span>User 123</span></span>
                            </a>
                            <a href="#" class="profile-item d-flex flex-middle">
                                <img src="../../images/icons/user1.png" alt="user profile icon" class="user-icon">
                                <span>You have new notification from <span>User 123</span></span>
                            </a>
                            <a href="#" class="profile-item d-flex flex-middle">
                                <img src="../../images/icons/user4.png" alt="user profile icon" class="user-icon">
                                <span>You have new notification from <span>User 123</span></span>
                            </a>
                            <a href="#" class="profile-item d-flex flex-middle">
                                <img src="../../images/icons/user3.png" alt="user profile icon" class="user-icon">
                                <span>You have new notification from <span>User 123</span></span>
                            </a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <img src="../images/icons/user-image-green.png" alt="user profile icon" class="user-icon"> <span class="profile-arrow"></span>

                        <div class="dropdown-content">
                            <div class="profile-links">
                                <a href="#" class="profile-item d-flex flex-middle">
                                    <img src="../images/icons/user1.png" alt="user profile icon" class="user-icon">
                                    <span>Rajesh</span>
                                </a>
                                <a href="#" class="profile-item d-flex flex-middle">
                                    <img src="../images/icons/user2.png" alt="user profile icon" class="user-icon">
                                    <span>Karan</span>
                                </a>
                                <a href="#" class="profile-item d-flex flex-middle">
                                    <img src="../images/icons/user3.png" alt="user profile icon" class="user-icon">
                                    <span>Pappy</span>
                                </a>
                                <a href="#" class="profile-item d-flex flex-middle" style="margin-bottom: 13px;">
                                    <img src="../images/icons/user4.png" alt="user profile icon" class="user-icon">
                                    <span>Denny</span>
                                </a>
                                <a href="#" class="profile-item last" >Manage Profiles</a>
                            </div>
                            <div class="line"></div>
                            <div class="links d-flex direction-column">
                                <a href="user-profile/home.html">Account</a>
                                <a href="#">Help Center</a>
                                <a href="/">Sign Out of Netflix</a>
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
                    <a href="#">
                        <img src="../images/movies/horrible-bosses-middle-poster.webp" alt=""
                            class="mylist-img p-r-10 p-t-10 image-size item"></a>
                    <a href="#">
                        <img src="../images/movies/kabir-singh-poster.webp" alt=""
                            class="mylist-img p-r-10 p-t-10 image-size item"></a>
                    <a href="#">
                        <img src="../images/movies/extraction-poster.jpg" alt=""
                            class="mylist-img p-r-10 p-t-10 image-size item"></a>
                    <a href="#">
                        <img src="../images/tv-show/poster/never-have-ever-short poster.jpg" alt=""
                            class="mylist-img p-r-10 p-t-10 image-size item"></a>
                    <a href="#">
                        <img src="../images/movies/we-are-the-milers-poster-little.webp" alt=""
                            class="mylist-img p-r-10 p-t-10 image-size item"></a>
                    <a href="#">
                        <img src="../images/movies/kabir-singh-poster.webp" alt=""
                            class="mylist-img p-r-10 p-t-10 image-size item"></a>



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
</body>

</html>