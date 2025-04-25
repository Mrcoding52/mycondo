<x-base-component>

    <!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h1>Modifier une proprieté</h1>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="breadcrumb-area">
                    <ul>
                        <li><a href="index.html">Acceuil</a></li>
                        <li><span>/</span>Modifier une proprieté</li>
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
                        <form method="POST" action="{{ route('property.update', ['id' => $properties->id]) }}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <h3 class="heading-2">Informations de base</h3>
                            <div class="search-contents-sidebar mb-30">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group propertytitle">
                                            <label for="inputpropertytitle1" class="form-label">Titre de la proprité</label>
                                            <input type="text" name="titre" value="{{ $properties->titre }}" class="form-control" id="inputpropertytitle1" placeholder="Titre de la proprieté">
                                            @error('titre')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Statut de bail</label>
                                            <select class="selectpicker search-fields" name="statut">
                                                @foreach ($statut as $stat)
                                                <option value="{{ $stat->id }}" >{{ $stat->name }}</option>
                                                @endforeach
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
                                                @foreach ($types as $type)
                                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('type')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>  


                            <div class="row mb-30">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group address">
                                        <label for="inputAddress1" class="form-label">Images</label>
                                        
                                        <input type="file" class="form-control" name="images[]" multiple/>
                                        @error('images')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                        {{-- Affiche les erreurs spécifiques pour chaque fichier uploadé --}}
                                        @foreach ($errors->get('images.*') as $index => $messages)
                                            @foreach ($messages as $message)
                                                <div class="text-danger">Image {{ $index + 1 }} : {{ $message }}</div>
                                            @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <h3 class="heading-2">Adresse de la proprieté</h3>
                            <div class="row mb-30">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group address">
                                        <label for="inputAddress1" class="form-label">Adresse</label>
                                        <input type="text" name="adresse" value="{{ $properties->adresse }}" class="form-control" id="inputAddress1" placeholder="Pays-Département-Ville/Village-Quartier-Rue-Maison">
                                        @error('adresse')
                                                <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-30">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group address">
                                        <label for="inputAddress1" class="form-label">Prix</label>
                                        <input type="number" name="price" value="{{ $properties->price }}" class="form-control" id="inputAddress1" placeholder="Prix">
                                        @error('price')
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
                                        <textarea name="details" class="form-control" rows="3" id="details" placeholder="Minimum 300 caractères"> {{ $properties->details }}</textarea>
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
                                        <input type="text" name="telephone" value="{{ $properties->telephone }}" class="form-control" id="inputphone1" placeholder="Numéro de téléphone">
                                        @error('telephone')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <button type="submit" class="btn-4 btn-round-3">Modifier la proprieté</button>
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
<script>
    CKEDITOR.replace('details');
    CKEDITOR.replace('details');, {
        allowedContent: 'p h1 h2 h3 strong em; a[!href]; img[!src,width,height];'
    });
</script>

</x-base-component>