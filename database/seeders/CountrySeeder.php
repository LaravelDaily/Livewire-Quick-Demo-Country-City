<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::create(['name' => 'United States']);
        Country::create(['name' => 'United Kingdom']);
        Country::create(['name' => 'Germany']);
    }
}
