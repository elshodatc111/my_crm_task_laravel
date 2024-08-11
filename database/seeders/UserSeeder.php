<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void{
        User::create([
            'markaz_id' => 1,
            'role_id' => 1,
            'name' => 'Elshod Musurmonov',
            'phone1' => "90 883 0450",
            'phone2' => "90 883 0450",
            'addres' => "Qarshi shaxar",
            'tkun' => '2024-01-01',
            'email' => 'elshodatc1116@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'markaz_id' => 1,
            'role_id' => 2,
            'name' => 'Elshod Musurmonov',
            'phone1' => "90 883 0450",
            'phone2' => "90 883 0450",
            'addres' => "Qarshi shaxar",
            'tkun' => '2024-01-01',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'markaz_id' => 1,
            'role_id' => 3,
            'name' => 'Elshod Musurmonov',
            'phone1' => "90 883 0450",
            'phone2' => "90 883 0450",
            'addres' => "Qarshi shaxar",
            'tkun' => '2024-01-01',
            'email' => 'adminmeneger@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'markaz_id' => 1,
            'role_id' => 4,
            'name' => 'Elshod Musurmonov',
            'phone1' => "90 883 0450",
            'phone2' => "90 883 0450",
            'addres' => "Qarshi shaxar",
            'tkun' => '2024-01-01',
            'email' => 'meneger@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'markaz_id' => 1,
            'role_id' => 5,
            'name' => 'Elshod Musurmonov',
            'phone1' => "90 883 0450",
            'phone2' => "90 883 0450",
            'addres' => "Qarshi shaxar",
            'tkun' => '2024-01-01',
            'email' => 'techer@gmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}