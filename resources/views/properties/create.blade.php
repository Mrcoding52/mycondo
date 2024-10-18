<x-base-component>

    <!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h1>Publier une proprieté</h1>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="breadcrumb-area">
                    <ul>
                        <li><a href="index.html">Acceuil</a></li>
                        <li><span>/</span>Publier une proprieté</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Submit Property start -->
<div class="submit-property content-area">
    <div class="container">
        <div class="my-address">
            <div class="row">
                
                <div class="col-md-12">
                    <div class="submit-address">
                        <form method="POST" action="{{ route('property.store') }}" enctype="multipart/form-data">
                            @csrf
                            <h3 class="heading-2">Informations de base</h3>
                            <div class="search-contents-sidebar mb-30">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group propertytitle">
                                            <label for="inputpropertytitle1" class="form-label">Titre de la proprité</label>
                                            <input type="text" name="titre" class="form-control" id="inputpropertytitle1" placeholder="Titre de la proprieté">
                                            @error('titre')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Statut de bail</label>
                                            <select class="selectpicker search-fields" name="statut">
                                                <option>A louer</option>
                                                <option>A vendre</option>
                                            </select>
                                            @error('statut')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Type</label>
                                            <select class="selectpicker search-fields" name="type">
                                                <option>Apartement</option>
                                                <option>Maison</option>
                                            </select>
                                            @error('type')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="heading-2">Galerie de la prorieté (La première image sera celle mise en avant)</h3>
                            <div id="myDropZone" class="dropzone dropzone-design mb-50">
                                <div class="dz-default dz-message"><span>Déposez vos images ici</span></div>
                                <input type="hidden" name="file" />
                                @error('statut')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <h3 class="heading-2">Adresse de la proprieté</h3>
                            <div class="row mb-30">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group address">
                                        <label for="inputAddress1" class="form-label">Adresse</label>
                                        <input type="text" name="adresse" class="form-control" id="inputAddress1" placeholder="Pays-Département-Ville/Village-Quartier-Rue-Maison">
                                        @error('adresse')
                                                <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <h3 class="heading-2">Informations détaillée</h3>
                            <div class="row mb-50">
                                <div class="col-md-12">
                                    <div class="form-group mb-0">
                                        <label>Informations détaillée</label>
                                        <textarea name="details" class="form-control" rows="3" placeholder="Minimum 300 caractères"></textarea>
                                        @error('details')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-30">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Nombre de chambres (facultatif)</label>
                                        <select class="selectpicker search-fields" name="nChambre">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        @error('nChambre')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Nombre de salle de bain (facultatif)</label>
                                        <select class="selectpicker search-fields" name="nDouche">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        @error('nDouche')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group phone">
                                        <label for="inputphone1" class="form-label">Télephone (Whatsapp recommandé)</label>
                                        <input type="text" name="telephone" class="form-control" id="inputphone1" placeholder="Numéro de téléphone">
                                        @error('telephone')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <h3 class="heading-2">Autres détails (facultatif)</h3>
                            <div class="row mb-40">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input name="nPiscine" value="1" id="checkbox1" type="checkbox">
                                                <label for="checkbox1">
                                                    Piscine
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-theme checkbox-circle">
                                                <input name="nGarage" value="1" id="checkbox2" type="checkbox">
                                                <label for="checkbox2">
                                                    Parking
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <button type="submit" class="btn-4 btn-round-3">Publier la proprieté</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Submit Property end -->

</x-base-component>