<!DOCTYPE html>
<html lang="vi">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="description" content="Đăng Nam homepage">
    <meta name="keywords" content="đăng nam">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/owl.carousel.css"/>
    <link rel="stylesheet" href="css/animate.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    @yield('css')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header section -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="header-social">
                <a href="#"><i class="fa fa-pinterest"></i></a>
                <a href="www.facebook.com/dnam189"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="https://steamcommunity.com/id/dangnamm/"><i class="fa fa-steam"></i></a>
                <a href="https://www.instagram.com/baihoai/"><i class="fa fa-instagram"></i></a>
            </div>

            @if(!empty(session('user')))
            <div class="user-panel">
                <a href={{route('quantri')}}>{{session('user')->name}}</a> /
                <a href={{route('logout')}}>Logout</a>
            </div>

            @else
            <div class="user-panel">
                <a href={{route('register')}}>Register</a> /
                <a href={{route('login')}}>Login</a>
            </div>

            @endif
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <a href="/" class="site-logo">
                <img src="img/homepage.png" alt="">
            </a>
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>
            <div class="header-search">
                <a href="#"><i class="fa fa-search"></i></a>
            </div>
            <ul class="main-menu">
                <li><a href="/">Home</a></li>
                <li><a href={{route('information')}}>Information</a></li>
                <li><a href={{route('post')}}>Post</a></li>
                <li><a href={{route('contact')}}>Contact</a></li>
            </ul>
        </div>
    </div>
</header>

@yield('main')

<footer class="footer-section set-bg" data-setbg="img/footer.jpg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="footer-logo">
                    <img src="img/homepage.png" alt="">
                </div>
                <div class="footer-social">
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="http://www.facebook.com/dnam189"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="https://steamcommunity.com/id/dangnamm/"><i class="fa fa-steam"></i></a>
                    <a href="https://www.instagram.com/baihoai/"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-lg-right">
                <ul class="footer-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href={{route('information')}}>Information</a></li>
                    <li><a href={{route('post')}}>Post</a></li>
                    <li><a href={{route('contact')}}>Contact</a></li>
                </ul>
                <p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer section end -->



<!--====== Javascripts & Jquery ======-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
@yield('script')

</body>
</html>