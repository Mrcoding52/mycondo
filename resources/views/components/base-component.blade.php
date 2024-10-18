<!DOCTYPE html>
<html lang="Fr">

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites/real-house-2-html/HTML/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Oct 2024 16:20:32 GMT -->
<head>
    <title>{{config('app.name')}} | Acceuil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-submenu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/leaflet.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/map.css')}}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('fonts/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/linearicons/style.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{asset('css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{asset('css/dropzone.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{asset('css/slick.css')}}">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/initial.css')}}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{asset('css/skins/default.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/ie10-viewport-bug-workaround.css')}}">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script  src="{{asset('js/ie-emulation-modes-warning.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script  src="js/html5shiv.min.js"></script>
    <script  src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="page_loader"></div>

<!-- Top header 3 start -->
<div class="top-header-3 d-none d-lg-block" id="top-header-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-3">
                <div class="top-logo">
                    <a href="{{route('acceuil')}}"><img src="img/logos/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="top-header-inner">
                    {{--<div class="top-contact-item">
                        <i class="bi bi-geo-alt"></i>
                        <div class="content">
                            <p>Notre adresse</p>
                            <a href="https://www.google.com/maps/search/25%2F7+Barden,+London/@51.5287718,-0.2416803,11z/data=!3m1!4b1" target="blank">25/7 Barden, London</a>
                        </div>
                    </div>--}}
                    <div class="top-contact-item">
                        <i class="bi bi-envelope-open"></i>
                        <div class="content">
                            <p>Support en ligne</p>
                            <a href="mailto:info@fetoxe2.com">info@gmail.com</a>
                        </div>
                    </div>
                    <div class="top-contact-item tci2">
                        <i class="bi bi-telephone-inbound"></i>
                        <div class="content">
                            <p>Contact</p>
                            <a href="tel:+55-4XX-634-7071">+229 4XX-634-781</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top header 3 end -->

<!-- Main header start -->
<header class="main-header sticky-header header-fixed main-header-5" id="main-header-6">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logos mr-auto" href="index.html">
                <img src="img/logos/logo-2.png" alt="logo" class="logo-photo">
            </a>
            <button class="navbar-toggler" id="drawer" type="button">
                <span class="fa fa-bars"></span>
            </button>
            <div class="navbar-collapse collapse w-100" id="navbar">
                <ul class="navbar-nav w-100 justify-content-start">
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="{{ route('acceuil') }}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Acceuil
                        </a>
                        
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Proprietés
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Listing Grid</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="grid-view.html">Grid View 1</a></li>
                                    <li><a class="dropdown-item" href="grid-view-2.html">Grid View 2</a></li>
                                    <li><a class="dropdown-item" href="grid-view-3.html">Grid View 3</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Listing List</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="list-view.html">List View 1</a></li>
                                    <li><a class="dropdown-item" href="list-view-2.html">List View 2</a></li>
                                    <li><a class="dropdown-item" href="list-view-3.html">List View 3</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Listing Half</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="map-view.html">Map View 1</a></li>
                                    <li><a class="dropdown-item" href="map-view-2.html">Map View 2</a></li>
                                    <li><a class="dropdown-item" href="map-view-3.html">Map View 3</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Single Property</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="single-property.html">Single Property 1</a></li>
                                    <li><a class="dropdown-item" href="single-property-2.html">Single Property 2</a></li>
                                    <li><a class="dropdown-item" href="single-property-3.html">Single Property 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('services')}}" id="navbarDropdownMenuLink11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink11">
                            <li><a class="dropdown-item" href="agent-grid.html">Agent Grid 1</a></li>
                            <li><a class="dropdown-item" href="agent-grid-2.html">Agent Grid 2</a></li>
                            <li><a class="dropdown-item" href="agent-list.html">Agent List 1</a></li>
                            <li><a class="dropdown-item" href="agent-detail.html">Agent Details</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            A propos
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Contact
                        </a>
                        
                    </li>
                </ul>

                <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                    <li class="nav-item">
                        <a href="submit-property.html" class="nav-link h-icon"><i class="fa fa-plus"></i> Publier un bien</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->

<!-- Sidenav start -->
<nav id="sidebar" class="nav-sidebar">
    <!-- Close btn-->
    <div id="dismiss">
        <i class="fa fa-close"></i>
    </div>
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <img src="img/logos/logo.png" alt="sidebarlogo">
        </div>
        <div class="sidebar-navigation">
            <h3 class="heading">Pages</h3>
            <ul class="menu-list">
                <li><a href="#" class="active pt0">Index <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li><a href="index.html">Index 01</a></li>
                        <li><a href="index-2.html">Index 02</a></li>
                        <li><a href="index-3.html">Index 03</a></li>
                        <li><a href="index-4.html">Index 04</a></li>
                        <li><a href="index-5.html">Index 05</a></li>
                        <li><a href="index-6.html">Index 06</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Listings <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li>
                            <a href="#">Listing Grid <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="grid-view.html">Grid View 1</a></li>
                                <li><a href="grid-view-2.html">Grid View 2</a></li>
                                <li><a href="grid-view-3.html">Grid View 3</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Listing List <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="list-view.html">List View 1</a></li>
                                <li><a href="list-view-2.html">List View 2</a></li>
                                <li><a href="list-view-3.html">List View 3</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Listing Half <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="map-view.html">Map View 1</a></li>
                                <li><a href="map-view-2.html">Map View 2</a></li>
                                <li><a href="map-view-3.html">Map View 3</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Single Property <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="single-property.html">Single Property 1</a></li>
                                <li><a href="single-property-2.html">Single Property 2</a></li>
                                <li><a href="single-property-3.html">Single Property 3</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Agents <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li><a href="agent-grid.html">Agent Grid 1</a></li>
                        <li><a href="agent-grid-2.html">Agent Grid 2</a></li>
                        <li><a href="agent-list.html">Agent List 1</a></li>
                        <li><a href="agent-detail.html">Agent Details</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li>
                            <a href="#">About <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="about.html">About 1</a></li>
                                <li><a href="about-2.html">About 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Services <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="services-1.html">Services 1</a></li>
                                <li><a href="services-2.html">Services 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Pricing Tables <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="pricing-tables.html">Pricing Tables 1</a></li>
                                <li><a href="pricing-tables-2.html">Pricing Tables 2</a></li>
                                <li><a href="pricing-tables-3.html">Pricing Tables 3</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Gallert <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="gallery-1.html">Gallery 1</a></li>
                                <li><a href="gallery-2.html">Gallery 2</a></li>
                                <li><a href="gallery-3.html">Gallery 3</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Typography <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="typography.html">Typography 1</a></li>
                                <li><a href="typography-2.html">Typography 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Faq <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="faq.html">Faq 1</a></li>
                                <li><a href="faq-2.html">Faq 2</a></li>
                                <li><a href="faq-3.html">Faq 3</a></li>
                            </ul>
                        </li>
                        <li><a href="property-comparison.html">Property Comparison</a></li>
                        <li><a href="search-brand.html">Property Brands</a></li>
                        <li><a href="elements.html">Elements</a></li>
                        <li><a href="icon.html">Icon</a></li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
                        <li>
                            <a href="#">My Profile <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="my-profile.html">My Profile</a></li>
                                <li><a href="my-property.html">My Property</a></li>
                                <li><a href="favorited-property.html">Favorited Property</a></li>
                                <li><a href="change-password.html">Change Password</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Pages 404 <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="404.html">Pages 404</a></li>
                                <li><a href="404-2.html">Pages 404 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Login <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="signup.html">Signup</a></li>
                                <li><a href="forgot-password.html">Forgot Password</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Blog <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li>
                            <a href="#">Grid Layout <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="blog-full-grid.html">Full Grid</a></li>
                                <li><a href="blog-grid-sidebar.html">With Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">List Layout <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="blog-full-list.html">Full List</a></li>
                                <li><a href="blog-list-sidebar.html">With Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="blog-detail.html">Blog Details</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Contact <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li><a href="contact.html">Contact 1</a></li>
                        <li><a href="contact-2.html">Contact 2</a></li>
                        <li><a href="contact-3.html">Contact 3</a></li>
                    </ul>
                </li>
                <li>
                    <a href="submit-property.html">Submit Property</a>
                </li>
            </ul>
        </div>
        <div class="get-in-touch">
            <h3 class="heading">Get in Touch</h3>
            <div class="get-in-touch-box d-flex">
                <i class="flaticon-technology-1"></i>
                <div class="detail">
                    <a href="tel:0477-0477-8556-552">0477 8556 552</a>
                </div>
            </div>
            <div class="get-in-touch-box d-flex">
                <i class="flaticon-envelope"></i>
                <div class="detail">
                    <a href="#">info@themevessel.com</a>
                </div>
            </div>
            <div class="get-in-touch-box d-flex mb-0">
                <i class="flaticon-globe"></i>
                <div class="detail">
                    <a href="#">info@themevessel.com</a>
                </div>
            </div>
        </div>
        <div class="get-social">
            <h3 class="heading">Get Social</h3>
            <a href="#" class="facebook-bg">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="#" class="twitter-bg">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="#" class="google-bg">
                <i class="fa fa-google"></i>
            </a>
            <a href="#" class="linkedin-bg">
                <i class="fa fa-linkedin"></i>
            </a>
        </div>
    </div>
</nav>
<!-- Sidenav end -->







{{$slot}}






<footer class="footer-1">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Contact Us</h4>
                    <ul class="contact-info">
                        <li>
                            360 Harvest St, North Subract, London. United States Of Amrica.
                        </li>
                        <li>
                            <a href="mailto:sales@hotelempire.com">info@themevessel.com</a>
                        </li>
                        <li>
                            <a href="tel:+55-417-634-7071">+1 347-465-0659</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Properties Types</h4>
                    <ul class="links">
                        <li>
                            <a>Apartment</a>
                        </li>
                        <li>
                            <a>Restaurant</a>
                        </li>
                        <li>
                            <a>My Houses</a>
                        </li>
                        <li>
                            <a>Villa & Condo</a>
                        </li>
                        <li>
                            <a>Family House</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Quick Links</h4>
                    <ul class="links">
                        <li>
                            <a>About Us</a>
                        </li>
                        <li>
                            <a>Services</a>
                        </li>
                        <li>
                            <a>Properties Details</a>
                        </li>
                        <li>
                            <a>My Account</a>
                        </li>
                        <li>
                            <a> Privacy Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4>Subscribe</h4>
                    <div class="subscribe-box-2">
                        <form class="form-inline d-flex" action="#" method="GET">
                            <input type="text" class="form-control mb-sm-0" id="inlineFormInputName4" placeholder="Your Email">
                            <button type="submit" class="btn"><i class="fa fa-paper-plane"></i></button>
                        </form>
                    </div>
                    <ul class="social-list clearfix">
                        <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Sub footer start -->
<div class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <p class="copy">© 2022 <a href="#">Theme Vessel.</a> Trademarks and brands are the property of their respective owners.</p>
            </div>
        </div>
    </div>
</div>
<!-- Sub footer end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="https://storage.googleapis.com/theme-vessel-items/checking-sites/real-house-2-html/HTML/main/index.html#">
        <input type="search" value="" placeholder="type keyword(s) here"/>
        <button type="submit" class="btn btn-sm button-theme">Search</button>
    </form>
</div>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script  src="{{asset('js/bootstrap-submenu.js')}}"></script>
<script  src="{{asset('js/rangeslider.js')}}"></script>
<script  src="{{asset('js/jquery.mb.YTPlayer.js')}}"></script>
<script  src="{{asset('js/wow.min.js')}}"></script>
<script  src="{{asset('js/bootstrap-select.min.js')}}"></script>
<script  src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script  src="{{asset('js/jquery.scrollUp.js')}}"></script>
<script  src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script  src="{{asset('js/leaflet.js')}}"></script>
<script  src="{{asset('js/leaflet-providers.js')}}"></script>
<script  src="{{asset('js/leaflet.markercluster.js')}}"></script>
<script  src="{{asset('js/dropzone.js')}}"></script>
<script  src="{{asset('js/slick.min.js')}}"></script>
<script  src="{{asset('js/jquery.filterizr.js')}}"></script>
<script  src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script  src="{{asset('js/jquery.countdown.js')}}"></script>
<script  src="{{asset('js/maps.js')}}"></script>
<script  src="{{asset('js/sidebar.js')}}"></script>
<script  src="{{asset('js/app.js')}}"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="{{asset('js/ie10-viewport-bug-workaround.js')}}"></script>
<!-- Custom javascript -->
<script  src="{{asset('js/ie10-viewport-bug-workaround.js')}}"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../../../../../www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-89110077-3', 'auto');
    ga('send', 'pageview');
</script>

</body>

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites/real-house-2-html/HTML/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Oct 2024 16:20:53 GMT -->
</html>