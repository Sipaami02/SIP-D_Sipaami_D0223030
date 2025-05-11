<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin Utama',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Petugas Satu',
            'email' => 'petugas@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Anggota Satu',
            'email' => 'anggota@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}
