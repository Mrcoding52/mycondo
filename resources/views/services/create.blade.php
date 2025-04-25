
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites/real-house-2-html/HTML/main/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Oct 2024 16:21:35 GMT -->
<head>
    <title>{{ config('app.name') }} | Creer un service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-submenu.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/leaflet.css" type="text/css">
    <link rel="stylesheet" href="css/map.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="fonts/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css"  href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css"  href="css/dropzone.css">
    <link rel="stylesheet" type="text/css"  href="css/slick.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/initial.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="css/skins/default.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script  src="js/ie-emulation-modes-warning.js"></script>

    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script  src="js/html5shiv.min.js"></script>
    <script  src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="page_loader"></div>

<!-- Login section start -->
<div class="login-section">
    <div class="container-fluid">
        <div class="row login-box">
            <div class="col-lg-6 align-self-center pad-0 form-section">
                <div class="form-inner">
                    <a href="index.html" class="logo">
                        <img src="img/logos/logo.png" alt="logo">
                    </a>
                    <h3>Publier un service</h3>
                    <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group clearfix">
                            <input name="title" type="text" class="form-control" placeholder="Le titre de la description" aria-label="Full Name">
                        </div>
                        <div class="form-group clearfix">
                            <textarea name="description" id="description" class="form-control" rows="3" placeholder="Minimum 300 caractères"></textarea>
                        </div>
                        <div class="form-group clearfix">
                            <input name="image" type="file" class="form-control" placeholder="Password" aria-label="Password">
                        </div>
                        <div class="form-group clearfix">
                            <button type="submit" class="btn-md btn-theme w-100">Publier</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 bg-color-15 pad-0 none-992 bg-img">
            </div>
        </div>
    </div>
</div>
<!-- Login section end -->



<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script  src="js/bootstrap-submenu.js"></script>
<script  src="js/rangeslider.js"></script>
<script  src="js/jquery.mb.YTPlayer.js"></script>
<script  src="js/wow.min.js"></script>
<script  src="js/bootstrap-select.min.js"></script>
<script  src="js/jquery.easing.1.3.js"></script>
<script  src="js/jquery.scrollUp.js"></script>
<script  src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script  src="js/leaflet.js"></script>
<script  src="js/leaflet-providers.js"></script>
<script  src="js/leaflet.markercluster.js"></script>
<script  src="js/dropzone.js"></script>
<script  src="js/slick.min.js"></script>
<script  src="js/jquery.filterizr.js"></script>
<script  src="js/jquery.magnific-popup.min.js"></script>
<script  src="js/jquery.countdown.js"></script>
<script  src="js/maps.js"></script>
<script  src="js/sidebar.js"></script>
<script  src="js/app.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script  src="js/ie10-viewport-bug-workaround.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../../../../../www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-89110077-3', 'auto');
    ga('send', 'pageview');
</script>
<script>
    CKEDITOR.replace('description');
    CKEDITOR.replace('description', {
        allowedContent: 'p h1 h2 h3 strong em; a[!href]; img[!src,width,height];'
    });
</script>


</body>

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites/real-house-2-html/HTML/main/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Oct 2024 16:21:35 GMT -->
</html>
