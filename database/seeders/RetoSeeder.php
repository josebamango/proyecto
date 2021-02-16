<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Reto;


class RetoSeeder extends Seeder
{
    private $retos = array(
        array(
            'user_id'=>'2',
            'nombre' => 'PS5',
            'plazo' => '2021-09-05',
            'descripcion' => 'Reto para comprarme la nueva PlayStation 5 y poder disfrutar de la próxima entrega del God Of War, la cual será Ragnarok y promete mucho',
            'inicio' => 50,
            'objetivo' => 500,
        ),
        array(
            'user_id'=>'2',
            'nombre' => 'Telescopio',
            'plazo' => '2021-05-11',
            'descripcion' => 'Reto para comprarme el telescopio Celestron Inspire 80 AZ para contemplar la bóveda celeste',
            'inicio' => 30,
            'objetivo' => 300,
        ),
        array(
            'user_id'=>'1',
            'nombre' => 'Cancún',
            'plazo' => '2021-10-7',
            'descripcion' => 'Reto para ir de vacaciones este verano a Cancún con mis amigos',
            'inicio' => 100,
            'objetivo' => 1200,
        ),
    );

    public function run()
    {
        foreach ($this->retos as $reto) {
            $r = new Reto();
            $r->user_id=$reto['user_id'];
            $r->nombre = $reto['nombre'];
            $r->plazo =$reto['plazo'];
            $r->descripcion =$reto['descripcion'];
            $r->inicio =$reto['inicio'];
            $r->objetivo =$reto['objetivo'];
            $r->save();
        }
        $this->command->info('Tabla retos inicializada con datos');
    }


}
