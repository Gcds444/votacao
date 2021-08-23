<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Enquete;

class Voto extends Model
{
    use HasFactory;

    public function enquete(){
        return $this->belongsTo(Enquete::class);
    }
}
