@extends('layouts.back')

@section('title', 'Gestion des Produits')

@section('content')
    <h1 class="mb-4">Gestion des Produits</h1>

    <a href="{{ route('produit.create') }}" class="btn btn-primary mb-3">Ajouter un produit</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th style="width: 10%;">Image</th>
                <th>Nom</th>
                <th>Type</th>
                <th>Prix</th>
                <th style="width: 15%;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($produits as $produit)
                <tr>
                    <td><img src="{{ $produit->image }}" alt="{{ $produit->nom }}" class="img-fluid" style="max-height: 50px;"></td>
                    <td>{{ $produit->nom }}</td>
                    <td>{{ $produit->type }}</td>
                    <td>{{ number_format($produit->prix, 2, ',', ' ') }} €</td>
                    <td>
                        <form action="{{ route('produit.destroy', $produit->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer ce produit ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Aucun produit trouvé.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection