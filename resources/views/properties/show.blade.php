<x-base-component>



    <!-- Details banner start -->
<div class="details-banner">
    <div class="container-fluid">
        <div class="featured-slider row slide-box-btn slider" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
            <div class="slide slide-box">
                <div class="banner-img">
                    <img src="img/properties/properties-1.jpg" alt="banner" class="img-fluid bp">
                </div>
            </div>
            <div class="slide slide-box">
                <div class="banner-img">
                    <img src="img/properties/properties-2.jpg" alt="banner" class="img-fluid bp">
                </div>
            </div>
            <div class="slide slide-box">
                <div class="banner-img">
                    <img src="img/properties/properties-3.jpg" alt="banner" class="img-fluid bp">
                </div>
            </div>
            <div class="slide slide-box">
                <div class="banner-img">
                    <img src="img/properties/properties-4.jpg" alt="banner" class="img-fluid bp">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Details banner end -->

<!-- Propertiy info start -->
<div class="property-info">
    <div class="container">
        <div class="property-info-inner">
            <div class="row g-0">
                <div class="col-xl-3 col-lg-4 col-md-4">
                    <div class="photo">
                        <div class="home">
                            <img class="img-fluid" src="img/img-4.png" alt="properties">
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-8">
                    <div class="content">
                        <div class="for-sale">{{$property->statut}}</div>
                        <h2>{{$property->titre}} <span class="pull-right"> {{$property->price}} Fcfa<small>/mois</small></span></h2>
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
                        <p><i class="fa fa-map-marker"> </i>  {{$property->adresse}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Propertiy info end -->

<!-- Properties details page start -->
<div class="properties-details-page content-area-18">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- Properties description start -->
                <div class="properties-description mb-40">
                    <h3 class="heading-2">
                        Description
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra a. Aliquam pellentesque nibh et nibh feugiat gravida. Maecenas ultricies, diam vitae semper placerat, velit risus accumsan nisl, eget tempor lacus est vel nunc. Proin accumsan elit sed neque euismod fringilla. Curabitur lobortis nunc velit, et fermentum urna dapibus non. Vivamus magna lorem, elementum id gravida ac, laoreet tristique augue. Maecenas dictum lacus eu nunc porttitor, ut hendrerit arcu efficitur.</p>
                </div>
                <!-- Properties description end -->
            </div>
        </div>
    </div>
</div>
<!-- Properties details page end -->



</x-base-component>