<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
        Permission::create(['name' => 'view_admin']);

        Permission::create(['name' => 'add_user']);
        Permission::create(['name' => 'update_user']);
        Permission::create(['name' => 'delete_user']);

        Permission::create(['name' => 'add_incident']);
        Permission::create(['name' => 'update_incident']);
        Permission::create(['name' => 'delete_incident']);

        Permission::create(['name' => 'create_inquiry']);
        Permission::create(['name' => 'update_inquiry']);
        Permission::create(['name' => 'delete_inquiry']);

        // create roles and assign created permissions
        $role = Role::create(['name' => 'user']);
        $role->givePermissionTo(['view_admin']);

        $role = Role::create(['name' => 'co-worker-inf-sec']);
        $role->givePermissionTo(['add_incident', 'update_incident']);

        $role = Role::create(['name' => 'co-worker-inv-dep']);
        $role->givePermissionTo(['add_incident', 'update_incident', 'delete_incident', 'create_inquiry', 'update_inquiry']);

        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());
    }
}
