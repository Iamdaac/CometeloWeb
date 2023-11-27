<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RestaurantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('restaurante')->insert([
            [
                'nombre' => 'La Picantería',
                'direccion' => 'Calle 50, Bella Vista, Ciudad de Panamá',
                'horario' => '11:30 AM - 9:00 PM',
                'tipo_comida' => 'Comida peruana',
                'provincia' => 8, // Panamá
                'telefono' => '123456789',
                'email' => 'info@lapicanteria.com',
                'website' => 'www.lapicanteria.com',
                'categoria_costo' => 'Moderado'
            ],
            [
                'nombre' => 'La Italiana',
                'direccion' => 'Vía Argentina, El Cangrejo, Ciudad de Panamá',
                'horario' => '12:00 PM - 10:00 PM',
                'tipo_comida' => 'Comida italiana',
                'provincia' => 8, // Panamá
                'telefono' => '987654321',
                'email' => 'reservas@laitaliana.com',
                'website' => 'www.laitaliana.com',
                'categoria_costo' => 'Alto'
            ],
            [
                'nombre' => 'Vegano Delight',
                'direccion' => 'Avenida Balboa, Obarrio, Ciudad de Panamá',
                'horario' => '10:00 AM - 8:00 PM',
                'tipo_comida' => 'Comida vegana',
                'provincia' => 8, // Panamá
                'telefono' => '111222333',
                'email' => 'info@veganodelight.com',
                'website' => 'www.veganodelight.com',
                'categoria_costo' => 'Moderado'
            ],
            // Puedes agregar más restaurantes con sus datos respectivos
        ]);
        
    }
}
