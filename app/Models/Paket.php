<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paket extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 
        'image', 
        'visibility', 
        'short_description', 
        'price', 
        'advantages', 
        'facilities', 
        'additional_services', 
        'bonuses', 
        'exclusions'
    ];

    protected $casts = [
        'image' => 'array',
        'visibility' => 'boolean',
        'price' => 'integer',
        'advantages' => 'array',
        'facilities' => 'array',
        'additional_services' => 'array',
        'bonuses' => 'array',
        'exclusions' => 'array',
    ];
}
