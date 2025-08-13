@extends('layouts.back')

@section('title', 'Ajouter un employé')

@section('content')
    <h1 class="mb-4">Ajouter un nouvel employé</h1>

    <form action="{{ route('storeEmploye') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Nom:</label>
            <input type="text" name="nom" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom:</label>
            <input type="text" name="prenom" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tel" class="form-label">Tel:</label>
            <input type="text" name="tel" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="mail" class="form-label">Mail:</label>
            <input type="email" name="mail" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="poste" class="form-label">Poste:</label>
            <select name="poste" class="form-select" required>
                <option value="Logistique">Logistique</option>
                <option value="Réception">Réception</option>
                <option value="Comptabilité">Comptabilité</option>
                <option value="Vente">Vente</option>
                <option value="Direction">Direction</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Rôle:</label>
            <select name="role" class="form-select" required>
                <option value="Ouvrier polyvalent">Ouvrier polyvalent</option>
                <option value="employé polyvalent">employé polyvalent</option>
                <option value="comptable">comptable</option>
                <option value="assistant du régional manager">assistant du régional manager</option>
                <option value="régional manager">régional manager</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="salaire" class="form-label">Salaire:</label>
            <input type="number" step="0.01" name="salaire" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('employe') }}" class="btn btn-secondary">Annuler</a>
    </form>
@endsection