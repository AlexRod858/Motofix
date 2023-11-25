<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Modelo;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProblemaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $modelosIds = Modelo::pluck('id'); // Obtener los IDs de usuarios existentes
        return [
            //
            'descripcion' => $this->faker->companySuffix(),
            'modelo_id' => $this->faker->randomElement($modelosIds), // Asignar aleatoriamente un ID de usuario existente
        ];
    }
}
