<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Services\Users\CreateUser;
use Services\Users\DeleteUser;
use Services\Users\UpdateUser;

class UserController extends Controller
{
    public function index()
    {
        return $this->jsonReponseData(User::all());
    }

    public function store(UserRequest $request)
    {
        $data = $request->validated();

        return $this->jsonReponseData(call_user_func(new CreateUser(), $data));
    }

    public function show(User $user)
    {
        return $this->jsonReponseData($user);
    }

    public function update(UserRequest $request, User $user)
    {
        $data = $request->validated();

        return $this->jsonReponseData(call_user_func(new UpdateUser(), $user, $data));
    }

    public function destroy(User $user)
    {
        if (!call_user_func(new DeleteUser(), $user)) {
            return $this->jsonReponseData(null, 404);
        }

        return $this->jsonReponseData();
    }
}
