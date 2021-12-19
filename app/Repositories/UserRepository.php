<?php

namespace App\Repositories;

use App\Contracts\UserRepositoryContract;
use App\Models\User;

class UserRepository implements UserRepositoryContract
{
    public function save(User $user, array $data): void
    {
        $user->fill($data)->save();
    }
}