<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garcon extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
      
        'adresse',
        'typetransport',
        'matricule',
     
    ];
}
