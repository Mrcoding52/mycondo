<x-base-component>



    <div class="container tables-box mb-50">
        <br><br><br>
        <h3 class="heading-2">Liste des proprietés</h3>
        <a type="button" href="{{route('property.create')}}" class="btn btn-outline-primary bomd">Ajouter une nouvelle proprieté</a><br><br>
        <table class="table table-bordered mb-0">
        <thead class="bg-primary">
            <tr class="ass">
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Adresse</th>
                <th scope="col">Date de publication</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
            <tbody>
                @foreach ($properties as $property)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$property->titre}}</td>
                    <td>{{$property->adresse}}</td>
                    <td>{{$property->created_at}}</td>
                    <td>
                        <a type="button" href="{{route('property.show', $property->id)}}" class="btn btn-outline-primary bomd">Voir</a>
                        <a type="button" href="{{route('property.edit', $property->id)}}" class="btn btn-outline-success bomd">Modifier</a>
                        <form id="delete-form-{{ $property->id }}" action="{{ route('property.destroy', $property->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-outline-danger bomd" 
                                    onclick="confirmDelete('{{ $property->id }}')">
                                Supprimer
                            </button>
                        </form>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function confirmDelete(propertyId) {
            Swal.fire({
                title: "Êtes-vous sûr ?",
                text: "Cette action est irréversible !",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Oui, supprimer !",
                cancelButtonText: "Annuler"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`delete-form-${propertyId}`).submit();
                }
            });
        }
    </script>
    

    

    <div class="container tables-box mb-50">
        <h3 class="heading-2">Liste des services</h3>
        <a type="button" href="{{route('service.create')}}" class="btn btn-outline-primary bomd">Ajouter un service</a><br><br>
        <table class="table table-bordered mb-0">
        <thead class="bg-primary">
            <tr class="ass">
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Date de publication</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
            <tbody>
                @foreach ($services as $service)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$service->title}}</td>
                    <td>{{$service->created_at}}</td>
                    <td>
                        <a href="{{route('service.show', $service->id)}}" type="button" class="btn btn-outline-primary bomd">Voir</a>
                        <a href="{{route('service.edit', $service->id)}}" type="button" class="btn btn-outline-success bomd">Modifier</a>

                        <form id="delete-form-{{ $service->id }}" action="{{ route('service.destroy', $service->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-outline-danger bomd" 
                                    onclick="confirmDelete('{{ $service->id }}')">
                                Supprimer
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-base-component>


{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
