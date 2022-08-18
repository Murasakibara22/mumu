<?php

namespace App\Models;

use App\Models\Eleves;
use App\Models\Enseignants;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matiere extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'designation',
        'code',
        'created_at',
        'updated_at'
    ];

    public function enseignant(){
        return $this->belongsToMany(Enseignants::class);
    }

    public function eleve(){
        return $this->belongsToMany(Eleves::class);
    }

    public function note(){
        return $this->belongsToMany(Notes::class);
    }
    

}
