<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domicile extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',

        'pointdepart',
        'pointfinal',
        '  numero',
        'poids',
        'largeur',
        'hauteur',


    ];


}
