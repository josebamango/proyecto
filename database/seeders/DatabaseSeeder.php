<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    private $apuestas = array(
        array(
            'nombre' => 'FB Barcelona - Real Madrid',
            'cuota_1' => 1.50,
            'cuota_x' => 3.00,
            'cuota_2' => 2.20,
            'importe' => 150,
            'fecha' => '2014-09-07',
            'tipo' => 'simple',
            'deporte' => 'futbol',
            'estado' => false,
            'resultado' => true,
        ),
        array(
            'nombre' => 'Brooklin Nets -LA Lakers',
            'cuota_1' => 2.80,
            'cuota_x' => 20.00,
            'cuota_2' => 1.45,
            'importe' => 500,
            'fecha' => '2021-09-05',
            'tipo' => 'simple',
            'deporte' => 'baloncesto',
            'estado' => false,
            'resultado' => true,
        ),
        array(
            'nombre' => 'Miami Heat - Milwaukee Bucks',
            'cuota_1' => 1.90,
            'cuota_x' => 20.00,
            'cuota_2' => 1.90,
            'importe' => 20,
            'fecha' => '2020-10-10',
            'tipo' => 'simple',
            'deporte' => 'baloncesto',
            'estado' => true,
            'resultado' => false,
        ),
        array(
            'nombre' => 'Almería FB - Atlético de Madrid',
            'cuota_1' => 4.50,
            'cuota_x' => 3.00,
            'cuota_2' => 1.50,
            'importe' => 250,
            'fecha' => '2020-02-04',
            'tipo' => 'simple',
            'deporte' => 'futbol',
            'estado' => false,
            'resultado' => true,
        ),
        array(
            'nombre' => 'Philadelphia 76ers - Boston Celtics',
            'cuota_1' => 2.10,
            'cuota_x' => 20.00,
            'cuota_2' => 1.80,
            'importe' => 1000,
            'fecha' => '2021-02-11',
            'tipo' => 'simple',
            'deporte' => 'baloncesto',
            'estado' => false,
            'resultado' => true,
        ),
        array(
            'nombre' => 'Sporting de Gijón - RCD Espanyol',
            'cuota_1' => 3.10,
            'cuota_x' => 5.00,
            'cuota_2' => 1.80,
            'importe' => 750,
            'fecha' => '2021-02-12',
            'tipo' => 'simple',
            'deporte' => 'futbol',
            'estado' => false,
            'resultado' => true,
        ),
        array(
            'nombre' => 'Dallas Mavericks - LA Clippers',
            'cuota_1' => 2.40,
            'cuota_x' => 20.00,
            'cuota_2' => 1.60,
            'importe' => 2500,
            'fecha' => '2021-03-09',
            'tipo' => 'simple',
            'deporte' => 'baloncesto',
            'estado' => true,
            'resultado' => false,
        ),
    );

    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('apuestas')->delete();
        $this->call(ApuestaSeeder::class);
    }
}
