<?php

namespace Services\Users;

use App\Models\User;

class UpdateUser
{
    public function __invoke(User $user, array $data): ?User
    {
        $user->update($data);

        return $user->save() ? $user : null;
    }
}
