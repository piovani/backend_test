<?php

namespace Services\Users;

use App\Models\User;

class DeleteUser
{
    public function __invoke(User $user): bool
    {
        return $user->delete();
    }
}
