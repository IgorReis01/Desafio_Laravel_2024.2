<?php

namespace Database\Factories;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ContaBancariaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'agencia' =>fake()->text(),
            'conta' =>fake()->text(),
            'saldo' =>mt_rand(2, 2000) / mt_getrandmax(),
            'limite_de_transferencia' =>mt_rand(2, 2000) / mt_getrandmax(),
            'password' => Hash::make('password'),
        ];
    }
}
