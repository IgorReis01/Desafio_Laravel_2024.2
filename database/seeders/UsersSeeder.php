<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Endereco;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(30)->create()->each(function ($user){

            $account = Account::create([
                'agency_number' => '0001',
                'account_number' => fake()->unique()->numerify('########-#'),
                'account_balance' => fake()->randomFloat(2, 1000, 20000),
                'transfer_limit' => fake()->randomFloat(2, 1000, 3500),
            ]);
            $address = Endereco::create([
                'country' => fake()->country(),
                'state' => fake()->state(),
                'city' => fake()->city(),
                'street' => fake()->streetName(),
                'building_number' => fake()->buildingNumber(),
                'postcode' => fake()->postcode(),   
            ]);

            $user->account_id = $account->id;
            $user->address_id = $address->id;
            $user->save();
        });
    }
}


  