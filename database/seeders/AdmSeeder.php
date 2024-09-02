<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Adm;
use App\Models\Endereco;
use App\Models\Account;
use App\Models\ContaBancaria;

class AdmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Endereco::create([
            'country' => fake()->country(),
            'state' => fake()->state(),
            'city' => fake()->city(),
            'street' => fake()->streetName(),
            'building_number' => fake()->buildingNumber(),
            'postcode' => fake()->postcode(),
        ]);

        Adm::factory(10)->create()->each(function ($admin){

            /** 
             * Associating an address with an admin.
             */

            $address = Endereco::create([
                'country' => fake()->country(),
                'state' => fake()->state(),
                'city' => fake()->city(),
                'street' => fake()->streetName(),
                'building_number' => fake()->buildingNumber(),
                'postcode' => fake()->postcode(),
            ]);

            $admin->adress_id = $address->id;
            $admin->save(); 
        });
    }
}