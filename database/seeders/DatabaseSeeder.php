<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Account;



class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AdmSeeder::class,
            GerenteSeeder::class,
            UsersSeeder::class,
        ]);
    }
        
    }

