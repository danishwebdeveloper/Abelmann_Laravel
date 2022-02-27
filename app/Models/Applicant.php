<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Applicant extends Model
{
    use HasFactory;
    protected $table = "Applicants";
    protected $fillable = [
        'salution',
        'firstname',
        'lastname',
        'email',
        'mobile',
        'locations_id',
        'Documents',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class, 'locations_id');
    }

    public function setFileNameattributes($value){
        $this->attributes['documents'] = json_encode($value);
    }
}


