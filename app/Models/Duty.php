<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Duty extends Model
{
    protected $fillable = [
        'title',
        'item_level',
        'difficulty',
        'status',
        'thumbnail',
        'hover_image',
    ];
}
