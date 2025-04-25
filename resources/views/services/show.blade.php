<x-base-component>




    <!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h1>{{ $servicees->title }}</h1>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="breadcrumb-area">
                    <ul>
                        <li><a href="{{route('acceuil')}}">Acceuil</a></li>
                        <li><span>/</span>{{ $servicees->title }}</li>
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
                            <p>Détails</p>
                            <h1>{{ $servicees->title }}</h1>
                        </div>
                        <!-- paragraph -->
                        <p class="mb-30">
                            {!! $servicees->description !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="hotels-detail-slider simple-slider">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            
                            <div class="carousel-item active">
                                <img src="{{ asset('storage/'.$servicees->image) }}" class="d-block w-100" alt="about-photo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About real estate end -->





</x-base-component>