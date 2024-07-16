<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MarkazSmsSetting;
class SmsSeeder extends Seeder
{
    public function run(): void
    {
        MarkazSmsSetting::create([
            'markaz_id' => 1,
            'new_user' => 'false',
            'tkun' => 'false',
            'new_pay' => 'false',
        ]);
    }
}
