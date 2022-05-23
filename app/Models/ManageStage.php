<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageStage extends Model
{
    use HasFactory;
    protected $table = 'stage';

    protected $fillable = [
        'sex',
        'prenom',
        'nom',
        'cin',
        'email',
        'tele',
        'ville',
        'metier',
        'experience',
        'etude',
        'ecole',
        'motivation',
    ];

}

