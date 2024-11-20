<x-base-component>

    <!-- Banner start -->
<div class="banner" id="banner">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item item-bg active">
                <img class="d-block w-100 h-100" src="img/banner/img-2.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-start">
                    <div class="carousel-content container align-self-center">
                        <div class="banner-info2">
                            <div class="text-l">
                                <h3>Votre coproprieté démarre ici</h3>
                                <p>Trouvez des biens immobiliers en toute tranquilité.</p>
                                <a class="btn-2" href="{{route('property.view')}}">Commencez maintenant</a>
                                <a class="btn-1" href="{{route('services')}}"><span>Lire plus</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item-bg">
                <img class="d-block w-100 h-100" src="img/banner/img-3.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-start">
                    <div class="carousel-content container align-self-center">
                        <div class="t-left banner-info2">
                            <div class="text-r">
                                <h3>Découvrez la maison de vos rêves</h3>
                                <p>Trouvez votre nouvelle maison en toute sécurité.</p>
                                <a class="btn-2" href="{{route('property.view')}}">Commencez maintenant</a>
                                <a class="btn-1" href="{{route('services')}}"><span>Lire plus</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item-bg">
                <img class="d-block w-100 h-100" src="img/banner/img-1.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-start">
                    <div class="carousel-content container align-self-center">
                        <div class="t-left banner-info2">
                            <div class="text-center">
                                <h3>Trouvez votre nouvel appartement</h3>
                                <p>Trouvez votre nouvel appartement en lieu sûr en toute tranquilité.</p>
                                <a class="btn-2" href="{{route('property.view')}}">Commencez maintenant</a>
                                <a class="btn-1" href="{{route('services')}}"><span>Lire plus</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Précedant</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Suivant</span>
        </button>
    </div>
</div>
<!-- Banner end -->

<!-- Search options start -->
<div class="search-options-btn-area2">
    <div class="search-options-icon">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h3>Options de recherche</h3>
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <span class="d-none">d</span>
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="search-section new-search search-area bg-grea animated fadeInDown">
                                        <div class="container">
                                            <div class="search-section-area">
                                                <div class="search-area-inner">
                                                    <div class="search-contents">
                                                        <form method="GET">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <h5>Critères de recherche</h5>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                                    <div class="form-group">
                                                                        <input type="text" name="name" class="form-control" placeholder="Entrez un mot clé">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                                    <div class="form-group">
                                                                        <select class="selectpicker search-fields" name="Type de propriété">
                                                                            <option>Appartement</option>
                                                                            <option>Maison</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                                    <div class="form-group">
                                                                        <select class="selectpicker search-fields" name="location" placeholder="Type de bail">
                                                                            <option>Achat</option>
                                                                            <option>Location</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                                    <div class="range-slider">
                                                                        <input type="range" data-min="0" data-max="150000" data-unit="XOF" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false">
                                                                        <div class="clearfix">0 XOF -150000 XOF</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-20">
                                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                                    <div class="form-group">
                                                                        <select class="selectpicker search-fields" name="bedrooms" placeholder="Nombre de chambres">
                                                                            
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                                    <div class="form-group">
                                                                        <select class="selectpicker search-fields" name="bathrooms" placeholder="Nombre de salles de bain">
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                                    <div class="form-group">
                                                                        <button class="search-button">Rechercher</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search options end -->

<!-- Featured Properties start -->
<div class="featured-properties content-area-9 comon-slick">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <p>Meilleurs types de proprieté</p>
            <h1>Récentes proprietés</h1>
        </div>
        <div class="slick row comon-slick-inner csi2 wow fadeInUp delay-04s" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
            
            @foreach ($properties as $propertie)
           
            <div class="item slide-box">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="single-property.html" class="property-img">
                            <div class="listing-badges">
                                <span class="featured">Featured</span>
                                
                            <div class="listing-time opening">For Sale</div>
                            </div>
                            <div class="price-ratings-box">
                                <h4 class="price">
                                    {{$propertie->price}} XOF<span>/mois</span>
                                </h4>
                            </div>
                            <div class="property-overflow">
                                <img class="d-block w-100" src="img/properties/properties-1.jpg" alt="properties">
                            </div>
                        </a>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="single-property.html">{{$propertie->title}}</a>
                        </h1>
                        <div class="location">
                            <a href="single-property.html">
                                <i class="fa fa-map-marker"></i>{{$propertie->adresse}},
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-furniture"></i> {{$propertie->nChambre}} Douches
                            </li>
                            <li>
                                <i class="flaticon-holidays"></i> {{$propertie->nDouche}} Chambres
                            </li>
                            <li>
                                <i class="flaticon-square"></i> Sq Ft:3400
                            </li>
                            <li>
                                <i class="flaticon-vehicle"></i> 1 Garage
                            </li>
                        </ul>
                    </div>
                    <div class="footer clearfix">
                        <div class="pull-left agent">
                            <div class="agent">
                                <div class="user">
                                    <a href="#">
                                        <img src="img/avatar/avatar-1.jpg" alt="avatar">
                                    </a>
                                </div>
                                <div class="user-name">
                                    <p><a href="#">Tom Paran</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="pull-right days">
                            <p><i class="flaticon-time"></i> 6 Days ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

             
        @endforeach

        <div class="text-center">
            <a href="{{route('property.view')}}" class="button btn-3">
               Voir plus
            </a>
        </div>
    </div>
</div>
<!-- Featured Properties end -->
    
</x-base-component>