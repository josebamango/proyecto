<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Apuesta;

class ApuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $apuestas = array(
        array(
            'nombre' => 'FB Barcelona - Real Madrid',
            'cuota_1' => 1.50,
            'cuota_x' => 3.00,
            'cuota_2' => 2.20,
            'eleccion' => 1,
            'importe' => 150,
            'fecha' => '2014-09-07 15:55:00',
            'deporte' => 'Fútbol',
            'estado' => false,
            'resultado' => true,
        ),
        array(
            'nombre' => 'Brooklin Nets -LA Lakers',
            'cuota_1' => 2.80,
            'cuota_x' => 20.00,
            'cuota_2' => 1.45,
            'eleccion' => 1,
            'importe' => 500,
            'fecha' => '2021-09-05 04:00:00',
            'deporte' => 'Baloncesto',
            'estado' => false,
            'resultado' => true,
        ),
        array(
            'nombre' => 'Miami Heat - Milwaukee Bucks',
            'cuota_1' => 1.90,
            'cuota_x' => 20.00,
            'cuota_2' => 1.90,
            'eleccion' => 3,
            'importe' => 20,
            'fecha' => '2020-10-10 00:15:00',
            'deporte' => 'Baloncesto',
            'estado' => true,
            'resultado' => false,
        ),
        array(
            'nombre' => 'Almería FB - Atlético de Madrid',
            'cuota_1' => 4.50,
            'cuota_x' => 3.00,
            'cuota_2' => 1.50,
            'eleccion' => 3,
            'importe' => 250,
            'fecha' => '2020-02-04 19:45:00',
            'deporte' => 'Fútbol',
            'estado' => false,
            'resultado' => true,
        ),
        array(
            'nombre' => 'Philadelphia 76ers - Boston Celtics',
            'cuota_1' => 2.10,
            'cuota_x' => 20.00,
            'cuota_2' => 1.80,
            'eleccion' => 1,
            'importe' => 1000,
            'fecha' => '2021-02-11 02:30:00',
            'deporte' => 'Baloncesto',
            'estado' => false,
            'resultado' => true,
        ),
        array(
            'nombre' => 'Sporting de Gijón - RCD Espanyol',
            'cuota_1' => 3.10,
            'cuota_x' => 5.00,
            'cuota_2' => 1.80,
            'eleccion' => 2,
            'importe' => 750,
            'fecha' => '2021-02-12 16:30:00',
            'deporte' => 'Fútbol',
            'estado' => false,
            'resultado' => true,
        ),
        array(
            'nombre' => 'Dallas Mavericks - LA Clippers',
            'cuota_1' => 2.40,
            'cuota_x' => 20.00,
            'cuota_2' => 1.60,
            'eleccion' => 3,
            'importe' => 2500,
            'fecha' => '2021-03-09 20:30:00',
            'deporte' => 'Baloncesto',
            'estado' => true,
            'resultado' => false,
        ),
    );
    public function run()
    {
        foreach ($this->apuestas as $apuesta) {
            $a = new Apuesta();
            $a->nombre = $apuesta['nombre'];
            $a->cuota_1 = $apuesta['cuota_1'];
            $a->cuota_x = $apuesta['cuota_x'];
            $a->cuota_2 = $apuesta['cuota_2'];
            $a->eleccion = $apuesta['eleccion'];
            $a->importe = $apuesta['importe'];
            $a->fecha = $apuesta['fecha'];
            $a->deporte = $apuesta['deporte'];
            $a->estado = $apuesta['estado'];
            $a->resultado = $apuesta['resultado'];
            $a->save();
        }
        $this->command->info('Tabla apuestas inicializada con datos');
    }

}
