<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MarkazHodimStatistka;
class MarkazHodimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MarkazHodimStatistka::create([
            'markaz_id'=>1,
            'user_id'=>1,
            'naqt'=>0,
            'plastik'=>0,
            'chegirma'=>0,
            'qaytarildi'=>0,
            'tashrif'=>0,
        ]);
        MarkazHodimStatistka::create([
            'markaz_id'=>1,
            'user_id'=>2,
            'naqt'=>0,
            'plastik'=>0,
            'chegirma'=>0,
            'qaytarildi'=>0,
            'tashrif'=>0,
        ]);
        MarkazHodimStatistka::create([
            'markaz_id'=>1,
            'user_id'=>3,
            'naqt'=>0,
            'plastik'=>0,
            'chegirma'=>0,
            'qaytarildi'=>0,
            'tashrif'=>0,
        ]);
        MarkazHodimStatistka::create([
            'markaz_id'=>1,
            'user_id'=>4,
            'naqt'=>0,
            'plastik'=>0,
            'chegirma'=>0,
            'qaytarildi'=>0,
            'tashrif'=>0,
        ]);
    }
}
