<?php

namespace App\Contracts;

use App\Models\User;

interface UserRepositoryContract
{
    public function save(User $user, array $data): void;
}