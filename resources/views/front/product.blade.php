@extends('layouts.front')

@section('title', 'Nos Produits')

@section('content')
<div class="container py-5">
    <div class="row text-center mb-5">
        <div class="col-lg-8 mx-auto">
            <h1>Nos Produits</h1>
            <p class="lead text-muted">Découvrez notre catalogue de solutions et logiciels conçus pour vous.</p>
        </div>
    </div>

    <div class="row">
        @forelse ($produits as $produit)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <img src="{{ $produit->image }}" alt="Image de {{ $produit->nom }}" class="card-img-top" style="height: 225px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $produit->nom }}</h5>
                        <p class="card-text text-muted">{{ $produit->descriptif }}</p>
                        <div class="mt-auto text-end">
                            <span class="fs-5 fw-bold">{{ number_format($produit->prix, 2, ',', ' ') }} €</span>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col">
                <p class="text-center">Aucun produit disponible pour le moment.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection