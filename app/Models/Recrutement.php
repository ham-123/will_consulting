<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recrutement extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'competences_requises',
        'competences_souhaitables',
        'type_contrat',
        'lieu_travail',
        'date_publication',
        'date_limite'
    ];
}
