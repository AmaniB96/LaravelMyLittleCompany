@extends('layouts.back')

@section('title', 'Ajouter un Produit')

@section('content')
    <h1 class="mb-4">Ajouter un nouveau produit</h1>

    <form action="{{ route('produit.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Nom du produit (max 70 car.)</label>
            <input type="text" name="nom" class="form-control" maxlength="70" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type (max 30 car.)</label>
            <input type="text" name="type" class="form-control" maxlength="30" required>
        </div>
        <div class="mb-3">
            <label for="descriptif" class="form-label">Descriptif (max 50 car.)</label>
            <input type="text" name="descriptif" class="form-control" maxlength="50" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">URL de l'image</label>
            <input type="url" name="image" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="prix" class="form-label">Prix</label>
            <input type="number" step="0.01" name="prix" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-success">Enregistrer le produit</button>
        <a href="{{ route('produit') }}" class="btn btn-secondary">Annuler</a>
    </form>
@endsection