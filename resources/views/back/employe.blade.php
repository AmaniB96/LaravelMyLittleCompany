@extends('layouts.back')

@section('title', 'Gestion des Employés')

@section('content')
    <h1 class="mb-4">Liste des Employés</h1>

    <a href="{{ route('storeEmploye') }}" class="btn btn-primary mb-3">Ajouter un employé</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Poste</th>
                <th>Rôle</th>
                <th>Salaire</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employes as $employe)
                <tr>
                    <td>{{ $employe->nom }}</td>
                    <td>{{ $employe->prenom }}</td>
                    <td>{{ $employe->mail }}</td>
                    <td>{{ $employe->poste }}</td>
                    <td>{{ $employe->role }}</td>
                    <td>{{ $employe->salaire }} €</td>
                    <td>
                        <form action="{{ route('employe.destroy', $employe->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Virer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection