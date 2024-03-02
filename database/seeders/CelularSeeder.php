<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Celular;

class CelularSeeder extends Seeder
{
    public function run()
    {
        Celular::create([
            'name' => 'Celular 1',
            'price' => 1800,
            'description' => 'Lorenzo Ipsulum'
        ]);

        Celular::create([
            'name' => 'Celular 2',
            'price' => 3200,
            'description' => 'Lorem ipsum dolor'
        ]);

        Celular::create([
            'name' => 'Celular 3',
            'price' => 9800,
            'description' => 'Lorem ipsum dolor sit amet'
        ]);
    }
}
