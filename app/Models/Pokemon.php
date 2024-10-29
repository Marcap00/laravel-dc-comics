<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $fillable = [
        'name',
        'category',
        'type',
        'ability',
        'stage_of_evolution',
        'height',
        'weight',
        'image',
    ];

    use HasFactory;
}
