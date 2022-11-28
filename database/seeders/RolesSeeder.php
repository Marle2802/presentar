<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role1 = Role::create(['name'=>'SuperAdmin']);
        $role2 = Role::create(['name'=>'Admin']);
        $role3 = Role::create(['name'=>'Usuario']);
        

        Permission::create(['name'=> 'dashboard'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=> 'Roles.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'Roles.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'Roles.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'Roles.destroy'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=> 'Usuarios.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'Usuarios.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'Usuarios.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'Usuarios.destroy'])->syncRoles([$role1,$role2]);

    

    }

   
}
