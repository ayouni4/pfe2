<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coli extends Model
{


    use HasFactory;
    protected $fillable = [
        'code',
        'hauteur',
        'largeur',
        'poids',
        'adresse_debut',
        'adresse_fin',
        'type_colis',
        'type_matier',
    ];



}
