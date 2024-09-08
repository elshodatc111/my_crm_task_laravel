<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            MarkazSeeder::class,
            KassaSeeder::class,
            UserSeeder::class,
            MarkazBalansSeeder::class,
            SmsSeeder::class,
            MarkazHodimSeeder::class,
            UserBalansSeeder::class,
            UserHistorySeeder::class,
        ]);
    }
}
