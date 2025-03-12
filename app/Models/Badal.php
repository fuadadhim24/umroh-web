<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Badal extends Model
{
    protected $fillable = [
        'title', 
        'subtitle', 
        'harga_paket',  
        'facilities'
    ];

    protected $casts = [
        'harga_paket' => 'integer',
        'facilities' => 'array',
    ];
}
