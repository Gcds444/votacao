<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquete extends Model
{
    use HasFactory;

    public function voto()
    {
        return $this->hasMany('App\Models\Voto');
    }
    
}
