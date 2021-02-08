<?php

namespace Database\Factories;

use App\Models\Apuesta;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApuestaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Apuesta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            "usuario_id" => User::all()->random()->id,
            "nombre" => $this->faker->name(),
            "cuota_1" => $this->faker->randomFloat(2, 1, 20),
            "cuota_x" => $this->faker->randomFloat(2, 1, 20),
            "cuota_2" => $this->faker->randomFloat(2, 1, 20),
            "eleccion" => $this->faker->randomElement([1, 2, 3]),
            "importe" => $this->faker->randomFloat(2, 1, 10000),
            "fecha" => $this->faker->date(),
            "deporte" => $this->faker->randomElement(['Baloncesto', 'Fútbol']),
            "estado" => $this->faker->boolean,
            "resultado" => $this->faker->boolean,

        ];
    }
}
