@extends('layouts.back')

@section('title', 'Employés')

@section('content')

<form action={{ route('storeEmploye') }} method='POST'>
        @csrf
        <label for="nom">Nom:</label>
        <input type="text" name='nom'>
        <label for="prenom">Prenom:</label>
        <input type="text" name='prenom'>
        <label for="tel">Tel:</label>
        <input type="text" name='tel'>
        <label for="mail">Mail:</label>
        <input type="text" name='mail'>
        <label for="poste">Poste:</label>
        <select name="poste">
            <option value="Logistique">Logistique</option>
            <option value="Réception">Réception</option>
            <option value="Comptabilité">Comptabilité</option>
            <option value="Vente">Vente</option>
            <option value="Direction">Direction</option>
        </select>
        <label for="role">Role:</label>
        <select name="role">
            <option value="Ouvrier polyvalent">Ouvrier polyvalent</option>
            <option value="employé polyvalent">employé polyvalent</option>
            <option value="comptable">comptable</option>
            <option value="assistant du régional manager">assistant du régional manager</option>
            <option value="régional manager">régional manager</option>
        </select>
        <label for="salaire">Salaire:</label>
        <input type="text" name='salaire'>
        
        <input type="submit" value="Envoyer">
    </form>

<ul>
    @foreach ($employes as $employe )
        <li>{{$employe['nom']}}</li>    
    @endforeach
</ul>

@endsection