<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;
use Services\Users\CreateUser;

class CreateUserTest extends TestCase
{
    public function testMustCreateAUser()
    {
        $data = [
            "name" => "JOHN",
            "email" => "j23o34hn5@6test.com"
        ];
        $user = call_user_func(new CreateUser(), $data);

        $this->assertEquals(User::all()->count(), 1);
        $this->assertEquals($data['name'], $user->name);
        $this->assertEquals($data['email'], $user->email);
    }
}
