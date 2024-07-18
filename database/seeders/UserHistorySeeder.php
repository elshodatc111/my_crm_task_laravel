<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserHistory;
class UserHistorySeeder extends Seeder
{
    public function run(): void{
        
        UserHistory::create([
            'markaz_id' => 1,
            'user_id' => 6,
            'status' => 'Markazga tashrif',
            'guruh' => '-',
            'summa' => '-',
            'tulov_type' => '-',
            'xisoblash' => '-',
            'balans' => 0,
            'meneger' => 'elshodatc1116',
        ]);
    }
}     