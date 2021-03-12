<?php

namespace App\Models;

class User extends Domain
{
    protected $fillable = [
        'name',
        'email',
    ];
}
