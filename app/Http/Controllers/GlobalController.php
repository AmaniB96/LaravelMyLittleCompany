<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Employe;

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
}
