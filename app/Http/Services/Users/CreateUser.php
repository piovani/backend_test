<?php

namespace Services\Users;

use App\Models\User;

class CreateUser
{
    public function __invoke(array $data): ?User
    {
        $user = new User($data);

        return $user->save() ? $user : null;
    }
}
