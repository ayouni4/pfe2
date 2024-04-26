<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pointrelai extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'responsable',
        'numero',
       'matricule',
       'adresse',
       'Houvert',
       'Hfermeture',
       'journnée',
       'typeprelais',
        
        
    ];
}
