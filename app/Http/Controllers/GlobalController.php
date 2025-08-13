<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Employe;
use App\Models\Produit;


class GlobalController extends Controller
{
    public function home() {

        return view('front/home');
    }

    public function contact() {
        $messages = Message::all();
        return view('front/contact', compact('messages'));
    }


    public function store(Request $request) {
        $message = new Message();
        $message->nom = $request->nom;
        $message->prenom = $request->prenom;
        $message->tel = $request->tel;
        $message->mail = $request->mail;
        $message->sujet = $request->sujet;
        $message->message = $request->message;
        $message->save();
        return redirect()->route('home');
    }

    public function employe() {
        $employes = Employe::all();
        return view('back.employe', compact('employes'));
    }

      public function createEmploye()
    {
        return view('back.employe_create');
    }

    public function storeEmploye(Request $request) {
        $employe = new Employe();
        $employe->nom = $request->nom;
        $employe->prenom = $request->prenom;
        $employe->tel = $request->tel;
        $employe->mail = $request->mail;
        $employe->poste = $request->poste;
        $employe->role = $request->role;
        $employe->salaire = $request->salaire;

        $employe->save();
        return redirect()->route('employe');
    }

    public function destroyEmploye(Employe $employe) {
        $employe->delete();
        return redirect()->route('employe')->with('success', 'Employé viré.');
    }

    public function mail()
    {
        $messages = Message::all();
        return view('back.mail', compact('messages'));
    }

    public function mailDestroy(Message $message)
    {
        $message->delete();
        return redirect()->route('mail');
    }

    public function produit()
    {
        $produits = Produit::all();
        return view('back.produit', compact('produits'));
    }

    public function produitCreate()
    {
        return view('back.produit_create');
    }

    public function produitStore(Request $request)
    {
        $produit = new Produit();
        $produit->nom = $request->nom;
        $produit->type = $request->type;
        $produit->descriptif = $request->descriptif;
        $produit->image = $request->image;
        $produit->prix = $request->prix;
        
        $produit->save();

        return redirect()->route('produit');
    }

    public function produitDestroy(Produit $produit)
    {
        $produit->delete();
        return redirect()->route('produit');
    }

    public function team()
{
    $employes = Employe::all();
    return view('front.team', compact('employes'));
}

public function produitsFront()
    {
        $produits = Produit::all();
        return view('front.product', compact('produits'));
    }
}
