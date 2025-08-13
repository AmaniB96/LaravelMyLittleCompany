@extends('layouts.front')

@section('title', 'Contactez-nous')

@section('content')
    <form action={{ route('store') }} method='POST'>
        @csrf
        <label for="nom">Nom:</label>
        <input type="text" name='nom'>
        <label for="prenom">Prenom:</label>
        <input type="text" name='prenom'>
        <label for="tel">Tel:</label>
        <input type="text" name='tel'>
        <label for="mail">Mail:</label>
        <input type="text" name='mail'>
        <label for="sujet">Sujet:</label>
        <input type="text" name='sujet'>
        <label for="message">Message:</label>
        <input type="text" name='message'>
        
        <input type="submit" value="Envoyer">
    </form>
@endsection