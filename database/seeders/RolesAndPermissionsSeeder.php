<?php

namespace Database\Seeders;

use App\Enums\RolesAndPermissionsEnum;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => RolesAndPermissionsEnum::MANAGE_PRODUCTS]);
        Permission::create(['name' => RolesAndPermissionsEnum::MANAGE_USERS]);

        // create roles and assign created permissions
        Role::create(['name' => RolesAndPermissionsEnum::ADMIN])->givePermissionTo(Permission::all());
        Role::create(['name' => RolesAndPermissionsEnum::EDITOR])->givePermissionTo(RolesAndPermissionsEnum::toPermissionEditor());
        Role::create(['name' => RolesAndPermissionsEnum::USER]);
    }
}
