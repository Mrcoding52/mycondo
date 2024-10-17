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
                                <a class="btn-2" href="#">Commencez maintenant</a>
                                <a class="btn-1" href="#"><span>Lire plus</span></a>
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
                                <a class="btn-2" href="#">Commencez maintenant</a>
                                <a class="btn-1" href="#"><span>Lire plus</span></a>
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
                                <a class="btn-2" href="#">Commencez maintenant</a>
                                <a class="btn-1" href="#"><span>Lire plus</span></a>
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
                                                                        <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                                                        <div class="clearfix"></div>
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

                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <h5>Autres détails</h5>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                                    <div class="checkbox checkbox-theme checkbox-circle">
                                                                        <input id="checkbox1" type="checkbox">
                                                                        <label for="checkbox1">
                                                                            Parking
                                                                        </label>
                                                                    </div>
                                                                    <div class="checkbox checkbox-theme checkbox-circle">
                                                                        <input id="checkbox2" type="checkbox">
                                                                        <label for="checkbox2">
                                                                            Piscine
                                                                        </label>
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
    
</x-base-component>