@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Liste des Événements</h2>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>Thème</th>
                <th>Date Début</th>
                <th>Date Fin</th>
                <th>Description</th>
                <th>Coût journalier</th>
                <th>Expert_id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($evenements as $event)
            <tr>
                <td>{{ $event->theme }}</td>
                <td>{{ $event->date_debut }}</td>
                <td>{{ $event->date_fin }}</td>
                <td>{{ Str::limit($event->description, 50) }}</td>
                <td>{{ $event->cout_journalier }}</td>
                <td>{{ $event->expert_id }}</td>
                <td class="d-flex gap-2">
                    <a href="{{ route('evenements.show', $event->id) }}" class="btn btn-info btn-sm">Consulter</a>
                    <a href="{{ route('evenements.edit', $event->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                    <form action="{{ route('evenements.destroy', $event->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Supprimer?')">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection