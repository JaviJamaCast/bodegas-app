<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bodega>
 */
class BodegaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->text($maxNbChars = 10),
            'ubicacion' => $this->faker->text($maxNbChars = 20),
            'telefono' => $this->faker->text($maxNbChars = 8)
        ];
    }
}
