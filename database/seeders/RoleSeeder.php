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
       $role1 = Role::create(['name' => 'Gerente']);
       $role2 = Role::create(['name' => 'Admin']);
       $role3 = Role::create(['name' => 'Vendedores']);
       $role4 = Role::create(['name' => 'Tecnico']);
       $role5 = Role::create(['name' => 'Clientes']);
       $role6 = Role::create(['name' => 'Contabilidad']);

       
       Permission::create(['name' => 'Ver Dashboard']);
    }
}
