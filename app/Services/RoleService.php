<?php

namespace App\Services;

use App\Contracts\RoleServiceContract;
use App\Contracts\RoleRepositoryContract;
use App\Models\User;
use Illuminate\Support\Collection;

class RoleService implements RoleServiceContract
{
    public function __construct(
        public RoleRepositoryContract $roleRepository
    ) {
    }

    public function sync(User $user, Collection $roles): void
    {
        if (! empty($roles)) {
            $user->syncRoles($this->roleRepository->find($roles));
        }
    }
}