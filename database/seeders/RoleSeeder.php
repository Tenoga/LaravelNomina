<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Employee']);


        //=================Admin Rol================//
        Permission::create(['name' => 'indexAdmin'])->assignRole($role1);
        Permission::create(['name' => 'createAdmin'])->assignRole($role1);
        Permission::create(['name' => 'editAdmin'])->assignRole($role1);
        Permission::create(['name' => 'destroyAdmin'])->assignRole($role1);
        Permission::create(['name' => 'payAdmin'])->assignRole($role1);

        //=================Employee Rol================//
        Permission::create(['name' => 'indexEmployee'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'editEmployee'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'payEmployee'])->syncRoles([$role1, $role2]);
    }
}
