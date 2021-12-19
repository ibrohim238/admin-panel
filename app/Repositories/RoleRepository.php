<?php

namespace App\Repositories;

use App\Contracts\RoleRepositoryContract;
use Illuminate\Database\Eloquent\Collection as DCollection;
use Illuminate\Support\Collection;
use Spatie\Permission\Models\Role;

class RoleRepository implements RoleRepositoryContract
{
    public function find(Collection $collection): Role|DCollection|array
    {
        return Role::find($collection);
    }
}