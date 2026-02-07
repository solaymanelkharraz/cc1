@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h3>Détails de l'événement: {{ $evenement->id }}</h3>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tr><th>Thème</th><td>{{ $evenement->theme }}</td></tr>
                <tr><th>Date début</th><td>{{ $evenement->date_debut }}</td></tr>
                <tr><th>Date fin</th><td>{{ $evenement->date_fin }}</td></tr>
                <tr><th>Description</th><td>{{ $evenement->description }}</td></tr>
                <tr><th>Coût journalier</th><td>{{ $evenement->cout_journalier }} MAD</td></tr>
                <tr><th>Expert</th><td>{{ $evenement->expert->nomExp }} {{ $evenement->expert->prénomExp }}</td></tr>
            </table>

            <h4 class="mt-4">Liste des ateliers assurés :</h4>
            <table class="table table-bordered">
                <thead class="table-secondary">
                    <tr>
                        <th>Nom de l'atelier</th>
                        <th>Description de l'atelier</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($evenement->ateliers as $atelier)
                    <tr>
                        <td>{{ $atelier->nomAtelier }}</td>
                        <td>{{ $atelier->descriptionAtelier }}</td>
                    </tr>
                    @empty
                    <tr><td colspan="2" class="text-center">Aucun atelier pour cet événement.</td></tr>
                    @endforelse
                </tbody>
            </table>
            
            <a href="{{ route('evenements.index') }}" class="btn btn-secondary mt-3">Retour à la liste</a>
        </div>
    </div>
</div>
@endsection