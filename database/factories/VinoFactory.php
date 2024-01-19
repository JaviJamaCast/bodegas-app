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
            'nombre' => $this->faker->text($maxNbChars = 10),
            'tipo' => $this->faker->text($maxNbChars = 20),
            'cosecha' => $this->faker->text($maxNbChars = 8),
            'precio' => $this->faker->numberBetween(0, 100),
            'stock' => $this->faker->numberBetween(0, 22),
            'bodega_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
