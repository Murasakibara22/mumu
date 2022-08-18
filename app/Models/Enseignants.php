<?php

namespace App\Models;

use App\Models\Matiere;
use App\Models\Etablissement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enseignants extends Model
{
    use HasFactory;
    protected $fillable =[
        'id',
        'nom',
        'prenom',
        'dateNaissance',
        'lieuNaissance',
        'genre',
        'email',
        'contact',
        'AnneeAcademique',
        'code_enseignant',
        'anneAcademique',
        'created_at',
        'updated_at'
    ];

    public function etablissement(){
        return $this->belongsToMany(Etablissement::class);
    }

    public function matiere(){
        return $this->belongsToMany(Matiere::class);
    }
}
