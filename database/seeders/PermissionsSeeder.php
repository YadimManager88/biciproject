<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
       $permissions_producto = Permission::create(['name' => 'Vistaproducto']);
       $permissions_usuario = Permission::create(['name' => 'Vistausuario']);
       $permissions_rol = Permission::create(['name' => 'Vistarole']);
       $permissions_sucursal = Permission::create(['name' => 'Vistasucursal']);
      
      
      //vista cliente
       $permissions_cliente = Permission::create(['name' => 'Vistacliente']);
       $permissions_crearcliente = Permission::create(['name' => 'crearcliente']);
       $permissions_editarcliente = Permission::create(['name' => 'editarcliente']);
       $permissions_crearcliente = Permission::create(['name' => 'eliminarcliente']);



       $permissions_efectuarventa = Permission::create(['name' => 'Efectuarventa']);


       $permissions_ventas = Permission::create(['name' => 'Vistaventas']);  
       $permissions_eliminarventa = Permission::create(['name' => 'eliminarventa']); 


       
       
      $administradorrole = Role::create(['name' => 'administrador']);
      $clienterole = Role::create(['name' => 'cliente']);
      $vendedorrole = Role::create(['name' => 'vendedor']);
       $mecanicorole = Role::create(['name' => 'mecanico']);
       $supervisorrole = Role::create(['name' => 'supervisor']);

       
       $administradorrole ->syncPermissions($permissions_producto,$permissions_usuario,$permissions_rol);

   
      $usuarioadministrador = User::create ([
       'name' => 'admin',
        'email' => 'superadmin@gmail.com',
        'password' => Hash::make('admin123'),
      ]);
      $usuarioadministrador->assignRole('administrador'); 
    }
}


