<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MarkazBalans;
class MarkazBalansSeeder extends Seeder
{
    public function run(): void{
        MarkazBalans::create([
            'markaz_id'=>1,
            'balans_naqt'=>0,
            'balans_naqt_chiqim'=>0,
            'kassa_naqt_xarajat'=>0,
            'balans_plastik'=>0,
            'balans_plastik_chiqim'=>0,
            'kassa_plastik_xarajat'=>0,
            'balans_payme'=>0,
            'balans_payme_chiqim'=>0,
        ]);
    }
}
