<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;
    protected $fillable = [
        'formation_title',
        'formation_price',
        'formation_type',
        'name',
        'email',
        'phone',
    ];
}
