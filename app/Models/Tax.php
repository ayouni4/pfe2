<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    protected $fillable = ['name', 'rate', 'is_percentage'];
    public function calculateFor($amount)
    {
        return $this->type === 'percentage' ? $amount * ($this->rate / 100) : $this->rate;
    }
}
