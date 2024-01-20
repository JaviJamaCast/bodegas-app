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
            'nombre' => $this->faker->text(10),
            'ubicacion' => $this->faker->text(10),
            'direccion' => $this->faker->streetAddress(),
            'email' => $this->faker->freeEmail(),
            'telefono' => $this->faker->phoneNumber(),
            'contacto_persona' => $this->faker->text(20),
            'anyo_fundacion' => $this->faker->dateTimeThisYear()->format('Y'),
            'descripcion' => $this->faker->text(20),
            'disp_restaurante' => $this->faker->boolean(50),
            'disp_hotel' => $this->faker->boolean(50),
        ];
    }
}
