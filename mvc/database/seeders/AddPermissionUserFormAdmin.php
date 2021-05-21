<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AddPermissionUserFormAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role  = Role::find(2);

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);
    }
}
