<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Moto;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ModeloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $motosIds = Moto::pluck('id'); // Obtener los IDs de usuarios existentes
        return [
            //
            'nombre_modelo' => $this->faker->companySuffix(),            
            'id_user' => $this->faker->randomElement($motosIds), // Asignar aleatoriamente un ID de usuario existente
        ];
    }
}
