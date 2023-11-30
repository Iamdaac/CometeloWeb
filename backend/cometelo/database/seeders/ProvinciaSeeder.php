<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $provincias = [
            ['id' => 1, 'nombre' => 'Bocas del Toro'],
            ['id' => 2, 'nombre' => 'Coclé'],
            ['id' => 3, 'nombre' => 'Colón'],
            ['id' => 4, 'nombre' => 'Chiriquí'],
            ['id' => 5, 'nombre' => 'Darién'],
            ['id' => 6, 'nombre' => 'Herrera'],
            ['id' => 7, 'nombre' => 'Los Santos'],
            ['id' => 8, 'nombre' => 'Panamá'],
            ['id' => 9, 'nombre' => 'Veraguas'],
            ['id' => 10, 'nombre' => 'Panamá Oeste'],
        ];

        // Insertar los datos en la tabla 'provincia'
        foreach ($provincias as $provincia) {
            DB::table('provincia')->insert($provincia);
        }
    }
}
