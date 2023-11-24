<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('modelos')->insert([
                'nombre_modelo' => $faker->companySuffix(),
                'moto_id' => $faker->numberBetween(1, 10), // Esto es un ejemplo, ajusta según tus necesidades
                // Puedes agregar más columnas y datos según tu tabla
            ]);
        }
    }
}
