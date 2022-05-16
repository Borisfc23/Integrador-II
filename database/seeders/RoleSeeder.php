<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;//se agrega para roles
use Spatie\Permission\Models\Permission;//se agrega para permisos
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1=Role::create(['name'=>"Administrador"]);
        $role2=Role::create(['name'=>"Almacenero"]);
        $role3=Role::create(['name'=>"Usuario"]);

        Permission::create(['name'=>'admin.index','description'=>'Ver el dashboard'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name'=>'admin.users.index','description'=>'Ver los usuarios'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.users.edit','description'=>'Editar usuarios'])->syncRoles([$role1]);

        Permission::create(['name'=>'admin.inputs.index','description'=>'Ver todos los inputs'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.inputs.edit','description'=>'Editar inputs'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.inputs.create','description'=>'Crear inputs'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.inputs.show','description'=>'Mostrar inputs'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.inputs.destroy','description'=>'Eliminar inputs'])->syncRoles([$role1]);        

        Permission::create(['name'=>'admin.products.index','description'=>'Ver todos los products'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.products.edit','description'=>'Editar products'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.products.create','description'=>'Crear products'])->syncRoles([$role1,$role2]);        
        Permission::create(['name'=>'admin.products.destroy','description'=>'Eliminar products'])->syncRoles([$role1,$role2]);        

        Permission::create(['name'=>'admin.providers.index','description'=>'Ver todos los providers'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.providers.edit','description'=>'Editar providers'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.providers.create','description'=>'Crear providers'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.providers.destroy','description'=>'Eliminar providers'])->syncRoles([$role1]);  
        
        
        


    }
}