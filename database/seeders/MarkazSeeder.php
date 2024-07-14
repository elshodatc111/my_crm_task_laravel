<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Markaz;

class MarkazSeeder extends Seeder
{
    public function run(): void
    {
        Markaz::create([
            'name' => 'ATKO',
            'drektor' => 'Elshod Musurmonov',
            'phone' => '',
            'addres' => '',
            'payme_id' => '',
            'image' => '',
        ]);
    }
}
