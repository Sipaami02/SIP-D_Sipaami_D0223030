<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class PetugasSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'petugas@example.com')->first();

        DB::table('petugas')->insert([
            'user_id' => $user->id,
            'nama_petugas' => 'Petugas Satu',
            'no_hp' => '082345678901',
            'alamat' => 'Jl. Petugas No. 123',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
