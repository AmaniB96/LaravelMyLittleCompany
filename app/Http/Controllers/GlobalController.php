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
        return view('home', compact('messages'));
    }
}
