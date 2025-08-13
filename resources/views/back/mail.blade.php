@extends('layouts.back')

@section('title', 'Boîte de réception')

@section('content')
    <h1 class="mb-4">Messages reçus</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Expéditeur</th>
                <th>Email</th>
                <th>Sujet</th>
                <th>Date de réception</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($messages as $message)
                <tr>
                    <td>{{ $message->nom }} {{ $message->prenom }}</td>
                    <td>{{ $message->mail }}</td>
                    <td>{{ $message->sujet }}</td>
                    <td>{{ $message->created_at->format('d/m/Y à H:i') }}</td>
                    <td>
                        <form action="{{ route('mail.destroy', $message->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer ce message ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Aucun message pour le moment.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection