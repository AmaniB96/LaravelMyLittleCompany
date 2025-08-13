<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\GlobalController;

class Message extends Model
{
    protected $fillable = ['nom', 'prenom', 'tel', 'mail','sujet','message'];
}
