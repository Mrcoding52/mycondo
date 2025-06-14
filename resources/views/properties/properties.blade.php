<x-base-component>


    <!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h1>Proprietés</h1>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="breadcrumb-area">
                    <ul>
                        <li><a href="{{ route('acceuil') }}">Acceuil</a></li>
                        <li><span>/</span>Proprietés</li>
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
                    
                    @if ($properties->count() > 0)
                    @foreach ($properties as $item)
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="property-box">
                            <div class="property-thumbnail">
                                <a href="{{ route('property.show', $item->id) }}" class="property-img">
                                    <div class="listing-badges">
                                        @if(isset($property) && $property->statut == 1)
                                            <span class="featured">A louer</span>
                                        @else
                                            <div class="listing-time opening">A vendre</div>
                                        @endif
                                    </div>
                                    <div class="price-ratings-box">
                                        <h4 class="price">
                                            {{$item->price}} XOF @if($item->statut == 1)<span>/mois</span>@endif
                                        </h4>
                                    </div>
<<<<<<< HEAD
                                    <div class="property-overflow">
                                        <img class="d-block w-100" src="img/properties/properties-1.jpg" alt="properties">
                                    </div>
=======
                                    @foreach ($item->images->take(2) as $image)

                                        @if($loop->first)
                                            <div class="property-overflow">
                                                <img class="d-block w-100" src="{{ asset('storage/'.$image->images) }}" alt="properties">
                                            </div>
                                        @endif

                                    @endforeach
>>>>>>> ef4c22462ca54af1a2d1e0cac7592c8e2157283f
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
                                    <a href="single-property.html">Aucune proprieté disponible</a>
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

                            {{ $properties->links() }}
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
                        <form method="GET" action="{{ route('property.search') }}">
                            <div class="form-group">
                                <input type="text" name="search" class="form-control" placeholder="Rechercher">
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn-4 btn-round-3 w-100">Rechercher</button>
                            </div>
                        </form>
                    {{-- </div>
                    <div class="posts-by-category widget">
                        <h3 class="sidebar-title">Types</h3>
                        <ul class="list-unstyled list-cat">
                            <li><a href="#">Appartments <span>(45)</span></a></li>
                            <li><a href="#">Maison <span>(21)</span> </a></li>
                            <li><a href="#">Parcelles <span>(23)</span></a></li>
                            <li><a href="#">Commercial <span>(19)</span></a></li>
                            <li><a href="#">Villa <span>(19)</span></a> </li>
                            <li><a href="#">Autres <span>(22) </span></a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Properties section body end -->


</x-base-component>