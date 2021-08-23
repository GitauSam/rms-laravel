<?php

namespace Database\Seeders;

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
        Permission::create(['name' => 'list dishes']);

        $role = Role::create(['name' => 'user'])
            ->givePermissionTo(
                                [
                                    'list dishes'
                                ]
                            );

        $role = Role::create(['name' => 'vendor']);
        $role = Role::create(['name' => 'moderator'])
            ->givePermissionTo(
                                [
                                    'list dishes',
                                ]
                            );

        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());


    }
}