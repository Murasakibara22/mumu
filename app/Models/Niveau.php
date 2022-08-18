<?php

namespace App\Models;

use App\Models\classe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Niveau extends Model
{
    use HasFactory;
    protected $fillable =[ 
        'id',
        'designation',
        'code',
    ]; 

    public function niveau(){
        return $this->hasMany(classe::class);
    }
}
