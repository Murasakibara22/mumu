<?php

namespace App\Models;

use App\Models\classe;
use App\Models\Matiere;
use App\Models\Etablissement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Eleves extends Model
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
        'code_eleve',
        'matricule',
        'AnneeAcademique',
        'etablissement_id',
        'classe_id',
        'created_at',
        'updated_at'
    ];


    public function eleve(){
        return $this->belongsTo(Etablissement::class);
    }

    public function classe(){
        return $this->belongsTo(classe::class, 'classe_id');
    }

    
    public function matiere(){
        return $this->belongsToMany(Matiere::class);
    }
}
