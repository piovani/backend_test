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
        'created_at',
    ];

    protected $appends = [
        'value_total',
    ];

    public function getValueTotalAttribute() {
        return $this->value * (($this->discount/100) + 1);
    }
}
