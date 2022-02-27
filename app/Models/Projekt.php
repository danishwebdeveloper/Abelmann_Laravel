<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projekt extends Model
{
    use HasFactory;

    public function firma(){
        return $this->belongsTo(Firma::class);
    }
}
