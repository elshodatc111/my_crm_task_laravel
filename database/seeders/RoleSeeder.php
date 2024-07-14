<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create([
            'name' => 'SuperAdmin'
        ]);
        Role::create([
            'name' => 'Admin'
        ]);
        Role::create([
            'name' => 'MenegerAdmin'
        ]);
        Role::create([
            'name' => 'Meneger'
        ]);
        Role::create([
            'name' => 'Techer'
        ]);
        Role::create([
            'name' => 'User'
        ]);
    }
}
