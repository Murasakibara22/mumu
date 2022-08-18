<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnseignantsEtablissement extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'etablissement_id',
        'enseignant_id',
        'created_at',
        'updated_at'
    ];
}
