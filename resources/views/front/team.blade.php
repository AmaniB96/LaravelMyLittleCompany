@extends('layouts.front')

@section('title', 'Notre Équipe')

@section('content')
<div class="container py-5">
    <div class="row text-center mb-5">
        <div class="col-lg-8 mx-auto">
            <h1>Notre Équipe</h1>
            <p class="lead text-muted">Découvrez les experts qui composent MyLittleCompany.</p>
        </div>
    </div>

    <div class="row">
        @forelse ($employes as $employe)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">{{ $employe->prenom }} {{ $employe->nom }}</h5>
                        <div class="card-text text-muted">{{ $employe->poste }}</div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col">
                <p class="text-center">L'équipe est en cours de constitution.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection