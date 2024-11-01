<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
    use SoftDeletes;

    public function getAbstractImagePath()
    {
        return substr($this->image, 0, 25) . '...';
    }
}
