<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Service;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Service::factory(4)->create();
        User::factory(4)->create();
        $city1 = City::create([
            'ibge_code' => 5201405,
            'city' => 'Aparecida de Goiânia',
            'state' => 'GO'
        ]);

        $city2 = City::create([
            'ibge_code' => 5208707,
            'city' => 'Goiânia',
            'state' => 'GO'
        ]);
    }
}
