<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//agregamos el modelo de permisos de spatie
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            //Operaciones sobre tabla roles
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',

            //Operacions sobre tabla blogs
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            'ver-producto',
            'crear-producto',
            'editar-producto',
            'borrar-producto',
            'cargar-producto',
            
            'ver-materia_prima',
            'crear-materia_prima',
            'editar-materia_prima',
            'borrar-materia_prima',
            'cargar-materia_prima',

            'ver-pedido',
            'crear-pedido',
            'editar-pedido',
            'borrar-pedido',
            
            'ver-punto_venta',
            'crear-punto_venta',
            'editar-punto_venta',
            'borrar-punto_venta',
        ];

        foreach($permisos as $permiso) {
            Permission::create(['name'=>$permiso]);
        }
    }
}
