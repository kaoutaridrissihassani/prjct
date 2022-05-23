<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stageaire extends Model
{
    use HasFactory;
    protected $table = '_form';
    protected $fillable = [
        'sex',
        'prenom',
        'nom',
        'email',
        'tele',
        'ville',
        'poste',
        'metier',
        'experience',
        'etude',
        'ville',
        'cin',
        'file_pdf',
        'region',
        'dateDebut',
        'dateFin',
        'created_at',
        'updated_at',
    ];
       public $timestamps = true;
}
