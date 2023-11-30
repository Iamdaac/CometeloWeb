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
                'categoria_costo' => '$$ (regular)',
                'tipo_restaurante' => 'Restaurante',
                'logo' => 'Picanteria.png',
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
                'categoria_costo' => '$$$ (alto)',
                'tipo_restaurante' => 'Restaurante',
                'logo' => 'Italiana.png',
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
                'categoria_costo' => '$$ (regular)',
                'tipo_restaurante' => 'Restaurante',
                'logo' => 'Vegano Delight.png',
            ],
            [
                'nombre' => 'Sabores Mexicanos',
                'direccion' => 'Calle México, David, Chiriquí',
                'horario' => '11:30 AM - 9:30 PM',
                'tipo_comida' => 'Comida mexicana',
                'provincia' => 4, // Chiriquí
                'telefono' => '555666777',
                'email' => 'contacto@saboresmexicanos.com',
                'website' => 'www.saboresmexicanos.com',
                'categoria_costo' => '$$ (regular)',
                'tipo_restaurante' => 'Restaurante',
                'logo' => 'mexicanos.png',
            ],
            [
                'nombre' => 'Sabores Peruanos',
                'direccion' => 'Avenida Lima, Ciudad de Panamá',
                'horario' => '12:00 PM - 9:00 PM',
                'tipo_comida' => 'Comida peruana',
                'provincia' => 8, // Panamá
                'telefono' => '333444555',
                'email' => 'info@saboresperuanos.com',
                'website' => 'www.saboresperuanos.com',
                'categoria_costo' => '$$ (regular)',
                'tipo_restaurante' => 'Restaurante',
                'logo' => 'peruanos.png',
            ],[
                'nombre' => 'La Casita Española',
                'direccion' => 'Calle Madrid, Santiago, Veraguas',
                'horario' => '1:00 PM - 10:00 PM',
                'tipo_comida' => 'Comida española',
                'provincia' => 9, // Veraguas
                'telefono' => '+507 678-9012',
                'email' => 'info@lacasitaespanola.com',
                'website' => 'www.lacasitaespanola.com',
                'categoria_costo' => '$$ (regular)',
                'logo' => 'url_del_logo_casita_espanola',
                'tipo_restaurante' => 'Restaurante',
                'logo' => 'casitaesp.png',
            ],
            [
                'nombre' => 'La Piramide Arabe',
                'direccion' => 'Panamericana 5-36, Coclé',
                'horario' => '11:00 AM - 10:00 PM',
                'tipo_comida' => 'Comida árabe',
                'provincia' => 2, // Coclé
                'telefono' => '+507 789-0123',
                'email' => 'info@lapiramidearabe-panama.com',
                'website' => 'www.lapiramidearabe-panama.com',
                'categoria_costo' => '$$ (regular)',
                'tipo_restaurante' => 'Foodtruck',
                'logo' => 'piramide.png',
            ],
            [
                'nombre' => 'Fire Wok Express',
                'direccion' => 'Avenida Pekín, Ciudad de Colón',
                'horario' => '11:30 AM - 9:30 PM',
                'tipo_comida' => 'Comida china',
                'provincia' => 3, // Colón
                'telefono' => '+507 890-1234',
                'email' => 'info@firewokexpress.com',
                'website' => 'www.firewokexpress.com',
                'categoria_costo' => '$$ (regular)',
                'tipo_restaurante' => 'Restaurante',
                'logo' => 'firewok.png',
            ],
            [
                'nombre' => 'Cooling Break',
                'direccion' => 'Calle Sabor, Penonomé, Coclé',
                'horario' => '12:00 PM - 8:00 PM',
                'tipo_comida' => 'Americana',
                'provincia' => 5, // Coclé
                'telefono' => '+507 901-2345',
                'email' => 'info@coolingbreak.com',
                'website' => 'www.coolingbreak.com',
                'categoria_costo' => '$ (barato)',
                'tipo_restaurante' => 'Restaurante',
                'logo' => 'coolingbreak.png',
            ],
            [
                'nombre' => 'Mariscos del Pacífico',
                'direccion' => 'Calle Mar, David, Chiriquí',
                'horario' => '11:00 AM - 9:00 PM',
                'tipo_comida' => 'Mariscos',
                'provincia' => 4, // Chiriquí
                'telefono' => '+507 234-5678',
                'email' => 'info@mariscosdelpacifico.com',
                'website' => 'www.mariscosdelpacifico.com',
                'categoria_costo' => '$$ (regular)',
                'tipo_restaurante' => 'Restaurante',
                'logo' => 'mariscos.png',
            ],
        ]);
        
    }
}
