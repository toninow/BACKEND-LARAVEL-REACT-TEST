<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Materiales>
 */
class MaterialesFactory extends Factory
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
            'descripcion' => $this->faker->sentence(6),
            'stock_minimo' => $this->faker->randomFloat($maxDeximals = 10, $min = 2, $max = 10),
            'categoria_id' => $this->faker->numberBetween(1, 10),
            'updated_at'=> $this->faker->dateTime,
            'updated_at'=> $this->faker->dateTime,
        ];
    }
}
