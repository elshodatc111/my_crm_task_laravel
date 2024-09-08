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
            'phone' => '90 883 0450',
            'addres' => 'Qarshi shaxar',
            'payme_id' => '123456789456484',
            'image' => 'mycrm.jpg',
            'paymart' => '1',
        ]);
    }
}
