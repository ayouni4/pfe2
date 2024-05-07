<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    public function pointRelais()
    {
        return $this->belongsTo(Pointrelai::class, 'pointrelais');
    }



    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'pointdepart',
        'pointrelais',
        'numero',


    ];
}
