<!DOCTYPE html>
<html lang="Fr">

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites/real-house-2-html/HTML/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Oct 2024 16:20:32 GMT -->
<head>
    <title>{{config('app.name')}} | Acceuil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <meta name="csrf-token" content="{{ csrf_token() }}">

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
    <link rel="stylesheet" type="text/css"  href="{{asset('css/skins/default.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon" >
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css')}}" />

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700')}}">
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600&amp;display=swap')}}" rel="stylesheet">
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800&amp;display=swap')}}" rel="stylesheet">
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;300;400;500;600;700;800;900&amp;display=swap')}}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/ie10-viewport-bug-workaround.css')}}">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script  src="{{asset('js/ie-emulation-modes-warning.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>


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
                    <a href="{{route('acceuil')}}"><img src="/img/logos/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">

                @if (session('status'))
                    <div  id="statusAlert" class="alert alert-success" role="alert">
                        {{session('status')}}
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            // Attendre 8 secondes avant de commencer à faire disparaître l'alerte
                            setTimeout(function() {
                                const alert = document.getElementById('statusAlert');
                                let opacity = 1; // niveau d'opacité initial

                                const fadeOutInterval = setInterval(function() {
                                    if (opacity <= 0.1) {
                                        clearInterval(fadeOutInterval);
                                        alert.style.display = 'none'; // cacher l'élément
                                    }
                                    alert.style.opacity = opacity;
                                    opacity -= 0.05; // diminuer l'opacité
                                }, 50); // intervalle de temps pour réduire l'opacité
                            }, 8000); // attendre 8 secondes avant de commencer à réduire l'opacité
                        });
                    </script>
                @endif
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
                            <a href="tel:+55-4XX-634-7071">+229 0155777171</a>
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
            <a class="navbar-brand logos mr-auto" href="{{ route('acceuil') }}">
                <img src="img/logos/logo-1.png" alt="logo" class="logo-photo">
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
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="{{route('coproperty.view',  3)}}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Co - proprieté
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            @foreach ($type as $item)
                            <li class="dropdown-submenu"><a class="dropdown-item " href="{{route('property.showByType',  $item->id)}}">{{$item->name}}</a>
                                {{-- <ul class="dropdown-menu">
                                    @foreach (array_slice($status->toArray(), 0, 2) as $item1)
                                    <li>
                                        <a class="dropdown-item" href="{{ route('property.filterByTypeAndStatus', ['type_id' => $item->id, 'status_id' => $item1['id']]) }}">
                                            {{ $item1['name'] }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul> --}}
                            </li>
                            @endforeach
                        </ul>
                        
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('property.showByStatus', 1)}}" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Co - location
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach ($type->take(2) as $item)
                        <li class="dropdown-submenu"><a class="dropdown-item " href="{{route('property.showByType',  $item->id)}}">{{$item->name}}</a>
                            {{-- <ul class="dropdown-menu">
                                @foreach (array_slice($status->toArray(), 0, 2) as $item1)
                                <li>
                                    <a class="dropdown-item" href="{{ route('property.filterByTypeAndStatus', ['type_id' => $item->id, 'status_id' => $item1['id']]) }}">
                                        {{ $item1['name'] }}
                                    </a>
                                </li>
                                @endforeach
                            </ul> --}}
                        </li>
                        @endforeach
                        </ul>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('property.view')}}" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Proprietés
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            @foreach (array_slice($type->toArray(), 1, 2) as $item)
                            <li class="dropdown-submenu"><a class="dropdown-item " href="{{route('property.showByType',  $item['id'])}}">{{$item['name']}}</a>
                                <ul class="dropdown-menu">
                                    @foreach (array_slice($status->toArray(), 0, 2) as $item1)
                                    <li>
                                        <a class="dropdown-item" href="{{ route('property.filterByTypeAndStatus', ['type_id' => $item['id'], 'status_id' => $item1['id']]) }}">
                                            {{ $item1['name'] }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                        </ul>  
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('services')}}" id="navbarDropdownMenuLink11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink11">
                            @foreach ($service as $item)
                                
                            <li><a style="text-wrap: wrap;" class="dropdown-item" href="{{route('service.show', $item->id)}}">{{$item->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('about')}}" id="navbarDropdownMenuLink5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            A propos
                        </a>
                    </li>
                </ul>

                <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                    {{-- <li class="nav-item">
                        <a href="{{route('property.create')}}" class="nav-link h-icon"> Publier un bien</a>
                    </li> --}}
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
            <img src="/img/logos/logo.png" alt="sidebarlogo">
        </div>
        <div class="sidebar-navigation">
            <h3 class="heading">Pages</h3>
            <ul class="menu-list">
                <li><a href="{{ route('acceuil') }}" class="active pt0">Acceuil <em class="fa fa-chevron-down"></em></a>
                
                </li>
                <li>
                    <a href="{{route('property.view')}}">Proprietés <em class="fa fa-chevron-down"></em></a>
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
                    </ul>
                </li>
                <li><a href="{{route('services')}}">Services <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li><a href="agent-grid.html">Agent Grid 1</a></li>
                        <li><a href="agent-grid-2.html">Agent Grid 2</a></li>
                        <li><a href="agent-list.html">Agent List 1</a></li>
                        <li><a href="agent-detail.html">Agent Details</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('about')}}">A propos <em class="fa fa-chevron-down"></em></a>
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
                    <a href="{{route('property.create')}}">Publier un bien</a>
                </li>
            </ul>
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
                    <h4>Informations de contact</h4>
                    <ul class="contact-info">
                        <li>
                            Cotonou, Benin.
                        </li>
                        <li>
                            <a href="mailto:sales@hotelempire.com">info@gmail.com</a>
                        </li>
                        <li>
                            <a href="tel:+55-417-634-7071">+229 0155777171</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Types de biens</h4>
                    <ul class="links">
                        @foreach ($type as $item)
                        <li>
                            <a href="{{route('property.showByType', $item->id)}}">{{$item->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Liens rapides</h4>
                    <ul class="links">
                        <li>
                            <a href="{{route('acceuil')}}">Acceuil</a>
                        </li>
                        <li>
                            <a href="{{route('services')}}">Services</a>
                        </li>
                        <li>
                            <a href="{{route('about')}}">A propos</a>
                        </li>
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
                <p class="copy">© 2024 <a href="#">SCORE.</a> Tout droits réservée.</p>
            </div>
        </div>
    </div>
</div>
<!-- Sub footer end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="">
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