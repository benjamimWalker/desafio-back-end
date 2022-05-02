<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Phone;
use App\Models\Sale;
use App\Models\User;
use Database\Factories\SaleFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Address::factory(10)->create();
        Phone::factory(10)->create();
        Sale::factory(10)->create();
        User::factory(5)->create();
    }
}
