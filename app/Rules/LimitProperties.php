<?php

namespace App\Rules;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;

class LimitProperties implements Rule
{
    private $purchased;

    public function __construct()
    {
        $this->purchased = request()->get('purchased');
    }

    public function passes($attribute, $value)
    {
        $user = User::find($value);

        if (empty($user)) {
            return false;
        }

        if ($this->purchased) {
            return true;
        }

        return !($user->structuresNotPurchased()->count() >= 3);
    }

    public function message()
    {
        return 'Wwner has already reached the limit of unpurchased properties';
    }
}
