<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotesMatiere extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'matiere_id',
        'note_id',
        'created_at',
        'updated_at'
    ];
}
