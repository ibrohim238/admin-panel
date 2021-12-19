<?php

namespace App\Contracts;

use App\Http\Requests\Admins\UserRequest;
use App\Models\User;

interface UserServiceContract
{
    public function save(User $user, UserRequest $request): void;
}