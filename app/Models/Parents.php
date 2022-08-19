<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\Paren as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Parents extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    use HasFactory;

    protected $fillable =  [
        'id',
        'nom',
        'prenom',
        'dateNaissance',
        'genre',
        'email',
        'contact',
        'code_parent'
    ];
}
