<?php

namespace Database\Factories;

use App\Models\Reto;
use Illuminate\Database\Eloquent\Factories\Factory;

class RetoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nombre" => $this->faker->word,
            "plazo" => $this->faker->date(),
            "descripcion" => $this->faker->text(),
            "inicio" => $this->faker->numberBetween(1, 1000),
            "objetivo" => $this->faker->numberBetween(100, 1000),
        ];
    }
}
