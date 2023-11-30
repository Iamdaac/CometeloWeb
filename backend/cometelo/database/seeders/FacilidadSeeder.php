<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacilidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $facilidades = [
            ['id' => 1, 'descripcion' => 'Sillas para bebés'],
            ['id' => 2, 'descripcion' => 'Menú para niños'],
            ['id' => 3, 'descripcion' => 'Cambiador'],
            ['id' => 4, 'descripcion' => 'Facilidad para discapacitados'],
            ['id' => 5, 'descripcion' => 'Estacionamiento bajo techo'],
        ];

        // Insertar los datos en la tabla 'facilidad'
        foreach ($facilidades as $facilidad) {
            DB::table('facilidad')->insert($facilidad);
        }
    }
}
