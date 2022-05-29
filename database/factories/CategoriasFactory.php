<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categorias>
 */
class CategoriasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'estado' => $this->faker->randomElement(['ACTIVO', 'CANCELADO', 'ELIMINADO']),
            'nombre' => $this->faker->sentence(3),
            'updated_at'=> $this->faker->dateTime,
            'updated_at'=> $this->faker->dateTime,
        ];
    }
}
