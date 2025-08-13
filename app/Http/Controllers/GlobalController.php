<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class GlobalController extends Controller
{
    public function home() {

        return view('home');
    }

    public function contact() {
        $messages = Message::all();
        return view('contact', compact('messages'));
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
}
