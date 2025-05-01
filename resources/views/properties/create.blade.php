<x-base-component>
    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <h1>Publier une propriété</h1>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="breadcrumb-area">
                        <ul>
                            <li><a href="index.html">Accueil</a></li>
                            <li><span>/</span>Publier une propriété</li>
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
                                                <label for="inputpropertytitle1" class="form-label">Titre de la propriété</label>
                                                <input type="text" name="titre" class="form-control" id="inputpropertytitle1" placeholder="Titre de la propriété">
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
                                                        <option value="{{ $stat->id }}">{{ $stat->name }}</option>
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


                                <h3 class="heading-2">Adresse de la propriété</h3>

                                <label for="departement">Département:</label>
                                <select id="departement">
                                    <option value="">-- Sélectionner un département --</option>
                                    @foreach($departements as $departement)
                                        <option value="{{ $departement->id_dep }}">{{ $departement->lib_dep }}</option>
                                    @endforeach
                                </select>

                                <label for="commune">Commune:</label>
                                <select id="commune" disabled>
                                    <option value="">-- Sélectionner une commune --</option>
                                </select>

                                <label for="arrondissement">Arrondissement:</label>
                                <select id="arrondissement" disabled>
                                    <option value="">-- Sélectionner un arrondissement --</option>
                                </select>

                                <div class="row mb-30">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group address">
                                            <label for="inputAddress1" class="form-label">Adresse</label>
                                            <input type="text" name="adresse" class="form-control" id="inputAddress1" placeholder="Département-Ville-Arrondissement" readonly>
                                            @error('adresse')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                

                                <script>
                                    $(document).ready(function () {
                                        // Mise à jour du champ "Adresse" en fonction des sélections
                                        function updateAddressField() {
                                            const departement = $('#departement').find('option:selected').text();
                                            const commune = $('#commune').find('option:selected').text();
                                            const arrondissement = $('#arrondissement').find('option:selected').text();

                                            // Construire l'adresse complète
                                            const fullAddress = `${departement !== '-- Sélectionner un département --' ? departement : ''}` +
                                                                `${commune !== '-- Sélectionner une commune --' ? '-' + commune : ''}` +
                                                                `${arrondissement !== '-- Sélectionner un arrondissement --' ? '-' + arrondissement : ''}`;

                                            // Mettre à jour le champ adresse
                                            $('#inputAddress1').val(fullAddress);
                                        }

                                        // Charger les communes lorsqu'un département est sélectionné
                                        $('#departement').on('change', function () {
                                            let id_dep = $(this).val();
                                            $('#commune').prop('disabled', true);
                                            $('#arrondissement').prop('disabled', true);

                                            if (id_dep) {
                                                $.ajax({
                                                    url: `/communes/${id_dep}`,
                                                    type: 'GET',
                                                    success: function (data) {
                                                        $('#commune').prop('disabled', false).empty().append('<option value="">-- Sélectionner une commune --</option>');
                                                        data.forEach(commune => {
                                                            $('#commune').append(`<option value="${commune.id_com}">${commune.lib_com}</option>`);
                                                        });
                                                        updateAddressField(); // Mettre à jour l'adresse
                                                    },
                                                    error: function (xhr, status, error) {
                                                        console.error('Erreur lors du chargement des communes:', error);
                                                    }
                                                });
                                            } else {
                                                updateAddressField(); // Mettre à jour l'adresse
                                            }
                                        });

                                        // Charger les arrondissements lorsqu'une commune est sélectionnée
                                        $('#commune').on('change', function () {
                                            let id_com = $(this).val();
                                            $('#arrondissement').prop('disabled', true);

                                            if (id_com) {
                                                $.ajax({
                                                    url: `/arrondissements/${id_com}`,
                                                    type: 'GET',
                                                    success: function (data) {
                                                        $('#arrondissement').prop('disabled', false).empty().append('<option value="">-- Sélectionner un arrondissement --</option>');
                                                        data.forEach(arrondissement => {
                                                            $('#arrondissement').append(`<option value="${arrondissement.id_arrond}">${arrondissement.lib_arrond}</option>`);
                                                        });
                                                        updateAddressField(); // Mettre à jour l'adresse
                                                    },
                                                    error: function (xhr, status, error) {
                                                        console.error('Erreur lors du chargement des arrondissements:', error);
                                                    }
                                                });
                                            } else {
                                                updateAddressField(); // Mettre à jour l'adresse
                                            }
                                        });

                                        // Mettre à jour l'adresse lorsqu'un arrondissement est sélectionné
                                        $('#arrondissement').on('change', updateAddressField);
                                    });
                                </script>

                                <div class="row mb-30">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group address">
                                            <label for="inputAddress1" class="form-label">Prix</label>
                                            <input type="number" name="price" class="form-control" id="inputAddress1" placeholder="Prix">
                                            @error('price')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <h3 class="heading-2">Informations détaillées</h3>
                                <div class="row mb-50">
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <label>Informations détaillées</label>
                                            <textarea name="details" class="form-control" rows="3" id="details" placeholder="Minimum 300 caractères"></textarea>
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
                                            <label for="inputphone1" class="form-label">Téléphone (Whatsapp recommandé)</label>
                                            <input type="text" name="telephone" class="form-control" id="inputphone1" placeholder="Numéro de téléphone">
                                            @error('telephone')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                        <button type="submit" class="btn-4 btn-round-3">Publier la propriété</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        CKEDITOR.replace('details');
        CKEDITOR.replace('details', {
            allowedContent: 'p h1 h2 h3 strong em; a[!href]; img[!src,width,height];'
        });
    </script>
    <!-- Submit Property end -->
</x-base-component>
