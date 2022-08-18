<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElevesMatieres extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'matiere_id',
        'eleve_id',
        'created_at',
        'updated_at'
    ];
}
