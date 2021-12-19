<?php

namespace App\Contracts;


use Illuminate\Database\Eloquent\Collection;
use Spatie\Permission\Models\Role;

interface RoleRepositoryContract
{
    public function find(Collection $collection): Role|Collection|array;
}