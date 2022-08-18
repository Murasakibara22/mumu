<?php

namespace App\Models;

use App\Models\Matiere;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notes extends Model
{
    use HasFactory;

    protected $fillable =[ 
        'id',
        'designation',
        'date',
        'trimestre',
        'moyenne',
        'matiere_id'
    ];

    public function matiere(){
        return $this->belongsToMany(Matiere::class, 'matiere_id');
    }
}
