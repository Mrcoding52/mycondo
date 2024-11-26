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
                                    @if($item->status = "A louer")
                                        <span class="featured">A louer</span>
                                    @else
                                        <div class="listing-time opening">A vendre</div>
                                    @endif
                                    <div class="price-ratings-box">
                                        <h4 class="price">
                                            {{$item->price}} XOF @if($item->status = "A louer")<span>/mois</span>@endif
                                        </h4>
                                    </div>
                                    <div class="property-overflow">
                                        <img class="d-block w-100" src="img/properties/properties-1.jpg" alt="properties">
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
                                <select class="selectpicker search-fields" name="all-status">
                                    <option>A louer</option>
                                    <option>A vendre</option>
                                    <option>Co-proprieté</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="all-type">
                                    @foreach ($type as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bedrooms">
                                            <option>Chambres</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bathroom">
                                            <option>Douches</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
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