<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GerenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
    
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'endereco' => fake()->address(),
            'telefone' => fake()->numerify('(##)# ####-####'),
            'data_de_nascimento' => fake()->dateTimeBetween('-100 years','-18 years'),
            'cpf' => fake()->numerify('###.###.###-##'),
            'foto_de_perfil' => fake()->image(null, 640, 480),
            'adm_id' => 1,
            'conta_bancaria_id' => 1,
        ];
    }
}
