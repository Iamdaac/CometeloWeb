<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RestauranteFacilidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sql = "
        -- La Picantería
        INSERT INTO restaurantefacilidad (restaurante_id, facilidad_id)
        VALUES
            ((SELECT id FROM restaurante WHERE nombre = 'La Picantería'), (SELECT id FROM facilidad WHERE descripcion = 'Menú para niños')),
            ((SELECT id FROM restaurante WHERE nombre = 'La Picantería'), (SELECT id FROM facilidad WHERE descripcion = 'Cambiador')),
            ((SELECT id FROM restaurante WHERE nombre = 'La Picantería'), (SELECT id FROM facilidad WHERE descripcion = 'Facilidad para discapacitados')),
            ((SELECT id FROM restaurante WHERE nombre = 'La Picantería'), (SELECT id FROM facilidad WHERE descripcion = 'Estacionamiento bajo techo'));
        ";
        DB::statement($sql);

        $sql2 = "
        -- Bella Italia
        INSERT INTO restaurantefacilidad (restaurante_id, facilidad_id)
        VALUES
            ((SELECT id FROM restaurante WHERE nombre = 'La Italiana'), (SELECT id FROM facilidad WHERE descripcion = 'Sillas para bebés')),
            ((SELECT id FROM restaurante WHERE nombre = 'La Italiana'), (SELECT id FROM facilidad WHERE descripcion = 'Facilidad para discapacitados')),
            ((SELECT id FROM restaurante WHERE nombre = 'La Italiana'), (SELECT id FROM facilidad WHERE descripcion = 'Estacionamiento bajo techo'));
        ";
        DB::statement($sql2);

        $sql3 = "
        -- Vegano Delight
        INSERT INTO restaurantefacilidad (restaurante_id, facilidad_id)
        VALUES
            ((SELECT id FROM restaurante WHERE nombre = 'Vegano Delight'), (SELECT id FROM facilidad WHERE descripcion = 'Menú para niños')),
            ((SELECT id FROM restaurante WHERE nombre = 'Vegano Delight'), (SELECT id FROM facilidad WHERE descripcion = 'Cambiador')),
            ((SELECT id FROM restaurante WHERE nombre = 'Vegano Delight'), (SELECT id FROM facilidad WHERE descripcion = 'Facilidad para discapacitados')),
            ((SELECT id FROM restaurante WHERE nombre = 'Vegano Delight'), (SELECT id FROM facilidad WHERE descripcion = 'Estacionamiento bajo techo'));
         ";

        DB::statement($sql3);

        $sql4 = "
        -- Restaurante 4
        INSERT INTO restaurantefacilidad (restaurante_id, facilidad_id)
        VALUES
            ((SELECT id FROM restaurante WHERE nombre = 'Sabores Mexicanos'), (SELECT id FROM facilidad WHERE descripcion = 'Sillas para bebés')),
            ((SELECT id FROM restaurante WHERE nombre = 'Sabores Mexicanos'), (SELECT id FROM facilidad WHERE descripcion = 'Facilidad para discapacitados')),
            ((SELECT id FROM restaurante WHERE nombre = 'Sabores Mexicanos'), (SELECT id FROM facilidad WHERE descripcion = 'Estacionamiento bajo techo'));
        ";
        DB::statement($sql4);
        
        $sql5 = "
        -- Restaurante 5
        INSERT INTO restaurantefacilidad (restaurante_id, facilidad_id)
        VALUES
            ((SELECT id FROM restaurante WHERE nombre = 'Sabores Peruanos'), (SELECT id FROM facilidad WHERE descripcion = 'Sillas para bebés')),
            ((SELECT id FROM restaurante WHERE nombre = 'Sabores Peruanos'), (SELECT id FROM facilidad WHERE descripcion = 'Cambiador')),
            ((SELECT id FROM restaurante WHERE nombre = 'Sabores Peruanos'), (SELECT id FROM facilidad WHERE descripcion = 'Facilidad para discapacitados')),
            ((SELECT id FROM restaurante WHERE nombre = 'Sabores Peruanos'), (SELECT id FROM facilidad WHERE descripcion = 'Estacionamiento bajo techo'));
        ";
        DB::statement($sql5);
        
        $sql6 = "
        -- Restaurante 6
        INSERT INTO restaurantefacilidad (restaurante_id, facilidad_id)
        VALUES
            ((SELECT id FROM restaurante WHERE nombre = 'La Casita Española'), (SELECT id FROM facilidad WHERE descripcion = 'Facilidad para discapacitados')),
            ((SELECT id FROM restaurante WHERE nombre = 'La Casita Española'), (SELECT id FROM facilidad WHERE descripcion = 'Estacionamiento bajo techo'));
        ";
        DB::statement($sql6);

        $sql7 = "
        -- Restaurante 7
        INSERT INTO restaurantefacilidad (restaurante_id, facilidad_id)
        VALUES
            ((SELECT id FROM restaurante WHERE nombre = 'La piramide Arabe'), (SELECT id FROM facilidad WHERE descripcion = 'Menú para niños')),
            ((SELECT id FROM restaurante WHERE nombre = 'La piramide Arabe'), (SELECT id FROM facilidad WHERE descripcion = 'Facilidad para discapacitados')),
            ((SELECT id FROM restaurante WHERE nombre = 'La piramide Arabe'), (SELECT id FROM facilidad WHERE descripcion = 'Estacionamiento bajo techo'));
        ";
        DB::statement($sql7);

        $sql8 = "
        -- Restaurante 8
        INSERT INTO restaurantefacilidad (restaurante_id, facilidad_id)
        VALUES
            ((SELECT id FROM restaurante WHERE nombre = 'Fire Wok Express'), (SELECT id FROM facilidad WHERE descripcion = 'Sillas para bebés')),
            ((SELECT id FROM restaurante WHERE nombre = 'Fire Wok Express'), (SELECT id FROM facilidad WHERE descripcion = 'Facilidad para discapacitados')),
            ((SELECT id FROM restaurante WHERE nombre = 'Fire Wok Express'), (SELECT id FROM facilidad WHERE descripcion = 'Estacionamiento bajo techo'));
        ";
        DB::statement($sql8);
        
        $sql9 = "
        -- Restaurante 9
        INSERT INTO restaurantefacilidad (restaurante_id, facilidad_id)
        VALUES
            ((SELECT id FROM restaurante WHERE nombre = 'Cooling break'), (SELECT id FROM facilidad WHERE descripcion = 'Menú para niños')),
            ((SELECT id FROM restaurante WHERE nombre = 'Cooling break'), (SELECT id FROM facilidad WHERE descripcion = 'Facilidad para discapacitados')),
            ((SELECT id FROM restaurante WHERE nombre = 'Cooling break'), (SELECT id FROM facilidad WHERE descripcion = 'Estacionamiento bajo techo'));
        ";
        DB::statement($sql9);

        $sql10 = "
        -- Restaurante 10
        INSERT INTO restaurantefacilidad (restaurante_id, facilidad_id)
        VALUES
            ((SELECT id FROM restaurante WHERE nombre = 'Mariscos del Pacífico'), (SELECT id FROM facilidad WHERE descripcion = 'Sillas para bebés')),
            ((SELECT id FROM restaurante WHERE nombre = 'Mariscos del Pacífico'), (SELECT id FROM facilidad WHERE descripcion = 'Facilidad para discapacitados')),
            ((SELECT id FROM restaurante WHERE nombre = 'Mariscos del Pacífico'), (SELECT id FROM facilidad WHERE descripcion = 'Estacionamiento bajo techo'));        
        ";

        // Ejecutar las inserciones mediante SQL
        DB::statement($sql10);
    }
}
