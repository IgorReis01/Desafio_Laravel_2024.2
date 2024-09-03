<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Account;
use App\Models\ContaBancaria;



class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            ContaBancariaSeeder::class,
            AdmSeeder::class,
            GerenteSeeder::class,
            UsersSeeder::class,
        ]);
    }
        
    }

