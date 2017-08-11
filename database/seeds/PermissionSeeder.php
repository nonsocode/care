<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name'=>'view driver requests']);
        Permission::create(['name'=>'delete driver requests']);
        Permission::create(['name'=>'update driver requests']);
        Permission::create(['name'=>'create driver requests']);
        Permission::create(['name'=>'manage driver requests']);

        Permission::create(['name'=>'manage users']);

        Permission::create(['name'=>'manage drivers']);
        Permission::create(['name'=>'create drivers']);
        Permission::create(['name'=>'update drivers']);
        Permission::create(['name'=>'read drivers']);
        Permission::create(['name'=>'delete drivers']);
        
        Permission::create(['name'=>'manage clients']);
        Permission::create(['name'=>'create clients']);
        Permission::create(['name'=>'delete clients']);
        Permission::create(['name'=>'update clients']);
        Permission::create(['name'=>'read clients']);
    }
}
