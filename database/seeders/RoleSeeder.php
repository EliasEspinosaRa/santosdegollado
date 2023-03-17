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
     */
    public function run(): void
    {
        $role1 = Role::create(['name'=>'admin']);
        $role2 = Role::create(['name'=>'maestro']);
        $role3 = Role::create(['name'=>'alumno']);

        Permission::create(['name'=>'bienvenida'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'maestros.index'])->syncRoles([$role1]);
        Permission::create(['name'=>'maestros.create'])->syncRoles([$role1]);
        Permission::create(['name'=>'maestros.edit'])->syncRoles([$role1]);
        Permission::create(['name'=>'maestros.show'])->syncRoles([$role1]);
        Permission::create(['name'=>'maestros.update'])->syncRoles([$role1]);
        Permission::create(['name'=>'maestros.destroy'])->syncRoles([$role1]);


    }
}
