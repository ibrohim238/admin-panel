<?php

namespace App\Services;

use App\Contracts\RoleServiceContract;
use App\Contracts\UserRepositoryContract;
use App\Contracts\UserServiceContract;
use App\Http\Requests\Admins\UserRequest;
use App\Models\User;

class UserService implements UserServiceContract
{
    public function __construct(
        public UserRepositoryContract $userRepositories,
        public RoleServiceContract    $roleService,
    ) {
    }

    public function save(User $user, UserRequest $request): void
    {
        $data = $request->validated();
        $this->userRepositories->save($user, $data);
        $this->roleService->sync($user, $request->rolesCollection());
    }
}