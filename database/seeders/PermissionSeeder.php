<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'Crear cursos',
        ]);

        Permission::create([
            'name' => 'Leer cursos',
        ]);

        Permission::create([
            'name' => 'Actualizar cursos',
        ]);

        Permission::create([
            'name' => 'Eliminar cursos',
        ]);

        Permission::create([
            'name' => 'Ver dashboard',
        ]);

        Permission::create([
            'name' => 'Crear role',
        ]);

        Permission::create([
            'name' => 'Listar role',
        ]);

        Permission::create([
            'name' => 'Editar role',
        ]);

        Permission::create([
            'name' => 'Eliminar role',
        ]);

        Permission::create([
            'name' => 'Leer usuarios',
        ]);

        Permission::create([
            'name' => 'Editar usuarios',
        ]);






        Permission::create([
            'name' => 'Crear categoria',
        ]);

        Permission::create([
            'name' => 'Listar categorias',
        ]);

        Permission::create([
            'name' => 'Editar categoria',
        ]);

        Permission::create([
            'name' => 'Eliminar categoria',
        ]);


        Permission::create([
            'name' => 'Crear nivel',
        ]);

        Permission::create([
            'name' => 'Listar niveles',
        ]);

        Permission::create([
            'name' => 'Editar nivel',
        ]);

        Permission::create([
            'name' => 'Eliminar nivel',
        ]);



        Permission::create([
            'name' => 'Crear precio',
        ]);

        Permission::create([
            'name' => 'Listar precios',
        ]);

        Permission::create([
            'name' => 'Editar precio',
        ]);

        Permission::create([
            'name' => 'Eliminar precio',
        ]);


        Permission::create([
            'name' => 'Ver lista de cursos pendientes',
        ]);

        Permission::create([
            'name' => 'Ver curso pendiente',
        ]);


        Permission::create([
            'name' => 'Aprovar curso pendiente',
        ]);

        Permission::create([
            'name' => 'Observar curso pendiente',
        ]);

        Permission::create([
            'name' => 'Rechazar curso pendiente',
        ]);
    }
}
