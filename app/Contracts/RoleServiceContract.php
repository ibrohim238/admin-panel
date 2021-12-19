<?php

namespace App\Contracts;

use App\Models\User;
use Illuminate\Support\Collection;

interface RoleServiceContract
{
    public function sync(User $user, Collection $roles): void;
}