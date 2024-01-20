<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vino>
 */
class VinoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->text(10),
            'tipo' => $this->faker->text(5),
            'descripcion' => $this->faker->text(200),
            'anyo' => $this->faker->dateTimeThisYear()->format('Y'),
            'alcohol' => $this->faker->randomFloat(2, 10, 100),
            'bodega_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
