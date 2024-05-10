<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Ordre extends Model
{

    use HasFactory;
    public function Domicile()
    {
        return $this->belongsTo(Domicile::class);
    }

    public function Coli()
    {
        return $this->belongsTo(Coli::class);
    }

}