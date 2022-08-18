<?php

namespace App\Models;

use App\Models\Niveau;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class classe extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'designation',
        'code',
        'niveau_id',
        'created_at',
        'updated_at'
    ];

    public function niveau(){
        return $this->belongsTo(Niveau::class,'niveau_id');
    }

    public function eleve(){
        return $this->hasMany('App\Models\eleves');
    }
}
