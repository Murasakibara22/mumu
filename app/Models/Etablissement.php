<?php

namespace App\Models;

use App\Models\Enseignants;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Etablissement extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nom',
        'nom_proviseur',
        'email',
        'contact',
        'AnneeAcademique',
        'code_etablissement',
        'code_proviseur',
        'Adresse',
        'ville',
        'created_at',
        'updated_at'
    ];

    public function nievau(){
        return $this->hasMany('App\Models\Niveau');
    }

    public function eleve(){
        return $this->hasMany('App\Models\Eleves');
    }

    
    public function enseignant(){
        return $this->belongsToMany(Enseignants::class);
    }
}
