<?php

namespace App\Models;

class Structure extends Domain
{
    protected $fillable = [
        'address',
        'bedrooms',
        'bathrooms',
        'total_area',
        'purchased',
        'value',
        'discount',
        'owner_id',
        'expired',
    ];
}
