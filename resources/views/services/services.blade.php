<x-base-component>



    <!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h1>Services</h1>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="breadcrumb-area">
                    <ul>
                        <li><a href="index.html">Acceuil</a></li>
                        <li><span>/</span>Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Services 1 start -->
<div class="comon-slick services-1 content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <p>Nos services</p>
            <h1>Nos services immobilier</h1>
        </div>
        <div class="slick row comon-slick-inner" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
            @foreach ($services as $service)
            <div class="item slide-box">
                <div class="card service-box">
                    <img class="card-img-top" src="{{ asset('storage/'.$service->image) }}" alt="{{ $service->title}}">
                    <div class="card-body detail">
                        <div class="heading clearfix">
                            <div class="number">
                                <h5><i class="fa-solid fa-briefcase"></i></h5>
                            </div>
                            <div class="title">
                                <h4><a href="#">{{ $service->title }}</a></h4>
                            </div>
                        </div>
                        <p>{{ \Illuminate\Support\Str::limit($service->description, 100) }}</p>
                        <a href="#" class="read-more">Lire plus</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Services 1 end -->





</x-base-component>