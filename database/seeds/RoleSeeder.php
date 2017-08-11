<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super = Role::create(['name' => 'super admin']);
        $admin = Role::create(['name' => 'admin']);
        $dirver = Role::create(['name' => 'driver']);
        $client = Role::create(['name' => 'client']);

        $super->syncPermissions(Permission::all());
        $admin->syncPermissions(['manage driver requests','manage drivers','manage clients']);
    }
}
