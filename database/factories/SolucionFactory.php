<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Problema;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SolucionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $problemasIds = Problema::pluck('id'); // Obtener los IDs de usuarios existentes
        return [
            //
            'solucion' => $this->faker->companySuffix(),
            'problema_id' => $this->faker->randomElement($problemasIds), // Asignar aleatoriamente un ID de usuario existente
        ];
    }
}
