<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Haji extends Model
{
    protected $fillable = [
        'title', 
        'subtitle', 
        'images', 
        'visibility', 
        'facilities', 
        'keunggulan', 
        'harga_paket', 
        'tidak_termasuk', 
        'akomodasi', 
        'gratis'
    ];

    protected $casts = [
        'images' => 'array',
        'harga_paket' => 'integer',
        'keunggulan' => 'array',
        'facilities' => 'array',
        'tidak_termasuk' => 'array',
        'akomodasi' => 'array',
        'gratis' => 'array',
    ];
}