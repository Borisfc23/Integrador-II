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

        // DASHBOARD
        Permission::create(['name'=>'admin.index','description'=>'Ver el dashboard'])->syncRoles([$role1,$role2]);

        // USERS
        Permission::create(['name'=>'admin.users.index','description'=>'Ver los usuarios'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.users.edit','description'=>'Editar usuarios'])->syncRoles([$role1]);

        // ROLES
        Permission::create(['name'=>'admin.roles.index','description'=>'Ver los roles'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.roles.edit','description'=>'Editar roles'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.roles.create','description'=>'Crear roles'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.roles.show','description'=>'Ver roles'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.roles.destroy','description'=>'Eliminar roles'])->syncRoles([$role1]);

        // PROVIDERS
        Permission::create(['name'=>'admin.providers.index','description'=>'Ver todos los providers'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.providers.edit','description'=>'Editar providers'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.providers.create','description'=>'Crear providers'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.providers.destroy','description'=>'Eliminar providers'])->syncRoles([$role1,$role2]);  
         
        // INPUTS
        Permission::create(['name'=>'admin.inputs.index','description'=>'Ver todos los inputs'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.inputs.edit','description'=>'Editar inputs'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.inputs.create','description'=>'Crear inputs'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.inputs.show','description'=>'Mostrar inputs'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.inputs.destroy','description'=>'Eliminar inputs'])->syncRoles([$role1,$role2]);        

        // OUTPUTS
        Permission::create(['name'=>'admin.outputs.index','description'=>'Ver todos los outputs'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.outputs.edit','description'=>'Editar outputs'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.outputs.create','description'=>'Crear outputs'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.outputs.show','description'=>'Mostrar outputs'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.outputs.destroy','description'=>'Eliminar outputs'])->syncRoles([$role1,$role2]);        

        // PRODUCTS
        Permission::create(['name'=>'admin.products.index','description'=>'Ver todos los products'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.products.edit','description'=>'Editar products'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.products.create','description'=>'Crear products'])->syncRoles([$role1,$role2]);        
        Permission::create(['name'=>'admin.products.destroy','description'=>'Eliminar products'])->syncRoles([$role1,$role2]);        

        // DETAILS
        Permission::create(['name'=>'admin.details.index','description'=>'Ver todos los details'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.details.edit','description'=>'Editar details'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.details.create','description'=>'Crear details'])->syncRoles([$role1,$role2]);        
        Permission::create(['name'=>'admin.details.destroy','description'=>'Eliminar details'])->syncRoles([$role1,$role2]);        

        //ORDERS
        Permission::create(['name'=>'admin.orders.index','description'=>'Ver todos los orders'])->syncRoles([$role3,$role1]);
        Permission::create(['name'=>'admin.orders.edit','description'=>'Editar orders'])->syncRoles([$role3,$role1]);
        Permission::create(['name'=>'admin.orders.create','description'=>'Crear orders'])->syncRoles([$role3,$role1]);
        Permission::create(['name'=>'admin.orders.destroy','description'=>'Eliminar orders'])->syncRoles([$role3,$role1]);  

        //PDF
        Permission::create(['name'=>'admin.providers.pdf','description'=>'Imprimir reporte proveedor pdf'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.users.pdf','description'=>'Imprimir reporte usuarios pdf'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.almacen.pdf','description'=>'Imprimir reporte almacen pdf'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'admin.inputs.pdf','description'=>'Imprimir reporte inputs pdf'])->syncRoles([$role1,$role2]);  
        Permission::create(['name'=>'admin.outputs.pdf','description'=>'Imprimir reporte outputs pdf'])->syncRoles([$role1,$role2]);  
        
        //CORREO
        Permission::create(['name'=>'admin.email','description'=>'Enviar mensaje al Admin'])->syncRoles([$role3,$role2,$role1]);  
    }
}