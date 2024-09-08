<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kassa;
class KassaSeeder extends Seeder
{
    public function run(): void
    {
        Kassa::create([
            'markaz_id' => 1
        ]);
    }
}
