<?php

namespace App\Models;

class User extends Domain
{
    protected $fillable = [
        'name',
        'email',
    ];

    public function structures()
    {
        return $this->hasMany(Structure::class, 'owner_id');
    }

    public function structuresNotPurchased()
    {
        return $this->structures()->where('purchased', false);
    }
}
