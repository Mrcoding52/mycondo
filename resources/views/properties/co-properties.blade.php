<x-base-component>


    <!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h1>Co-proprietés</h1>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="breadcrumb-area">
                    <ul>
                        <li><a href="{{ route('acceuil') }}">Acceuil</a></li>
                        <li><span>/</span>Co-proprietés</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->


<!-- About real estate start -->
<div class="about-real-estate content-area-5">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center">
                    <div class="about-text clearfix">
                        <!-- Main title -->
                        <div class="main-title-2">
                            <p>Co-proprieté</p>
                            <h1>C'est quoi la co-proprieté ?</h1>
                        </div>
                        <!-- paragraph -->
                        <p class="mb-30">
                            La gestion d’une co-propriété peut s’avérer complexe, mais avec CONDO, nous simplifions tout pour garantir une harmonie parfaite entre les co-propriétaires. Notre service de co-propriété est conçu pour répondre aux besoins spécifiques des résidences collectives, en assurant une gestion transparente, efficace et professionnelle.

                            <h4>Ce que nous proposons :</h4>

                            <strong>Gestion administrative :</strong> Organisation des assemblées générales, rédaction des procès-verbaux, et suivi des décisions prises par les co-propriétaires. <br><br>
                            <strong>Gestion des finances :</strong> Élaboration des budgets, gestion des charges de co-propriété, suivi des paiements et gestion des éventuelles créances. <br><br>
                            <strong>Gestion des espaces communs :</strong> Entretien des parties communes : Coordination des prestataires pour assurer le nettoyage, les réparations et l’entretien des espaces communs. <br><br>
                            <strong>Médiation et communication :</strong> Assistance dans la résolution des différends entre co-propriétaires et maintien d’une communication claire entre toutes les parties. <br><br>
                            <strong>Respect des obligations légales :</strong> Veille juridique et conformité avec les réglementations en vigueur pour protéger la co-propriété. <br><br>
                           </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="hotels-detail-slider simple-slider">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/properties/properties-11.jpg" class="d-block w-100" alt="about-photo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About real estate end -->

<!-- Properties section body start -->
<div class="properties-section-body content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">

                <!-- Grid view start -->
                <div class="row">
                    @if ($coproperties->count() > 0)
                    @foreach ($coproperties as $item)
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="property-box">
                            <div class="property-thumbnail">
                                <a href="{{ route('property.show', $item->id) }}" class="property-img">
                                    <div class="price-ratings-box">
                                        <h4 class="price">
                                            {{$item->price}} XOF
                                        </h4>
                                    </div>
                                    <div class="property-overflow">
                                        <img class="d-block w-100" src="/img/properties/properties-1.jpg" alt="properties">
                                    </div>
                                </a>
                            </div>
                            <div class="detail">
                                <h1 class="title">
                                    <a href="single-property.html">{{$item->title}}</a>
                                </h1>
                                <div class="location">
                                    <a href="single-property.html">
                                        <i class="fa fa-map-marker"></i>{{$item->adresse}}
                                    </a>
                                </div>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-furniture"></i> 3 Bedrooms
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i> 2 Bathrooms
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
                                            <a href="{{ route('property.show', $item->id) }}">
                                                <img src="img/logos/logo.png" alt="avatar">
                                            </a>
                                        </div>
                                        <div class="user-name">
                                            <p><a href="#">Condo Immo</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="pull-right days">
                                    <p><i class="flaticon-time"></i> 6 Days ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    @endforeach
                    @else
                    <div class="col-lg-12 col-md-12">
                        <div class="property-box">
                            <div class="detail">
                                <h1 class="title">
                                    <a href="single-property.html">Aucune co-proprieté disponible</a>
                                </h1>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                <!-- Grid view end -->

                <!-- Page navigation start -->
                <div class="pagination-box hidden-mb-45 text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="grid-view-2.html">2</a></li>
                            <li class="page-item"><a class="page-link" href="grid-view-3.html">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="grid-view-3.html"><i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Page navigation end-->
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-right">
                    <!-- Advanced search start -->
                    <div class="sidebar widget advanced-search">
                        <h3 class="sidebar-title">Recherche</h3>
                        <form method="GET">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Rechercher">
                            </div>
                            <div class="form-group mb-0">
                                <button class="btn-4 btn-round-3 w-100">Rechercher</button>
                            </div>
                        </form>
                    </div>
                    <div class="posts-by-category widget">
                        <h3 class="sidebar-title">Types</h3>
                        <ul class="list-unstyled list-cat">
                            <li><a href="#">Appartments <span>(45)</span></a></li>
                            <li><a href="#">Maison <span>(21)</span> </a></li>
                            <li><a href="#">Parcelles <span>(23)</span></a></li>
                            <li><a href="#">Commercial <span>(19)</span></a></li>
                            <li><a href="#">Villa <span>(19)</span></a> </li>
                            <li><a href="#">Autres <span>(22) </span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Properties section body end -->



</x-base-component>