<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AnggotaSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'anggota@example.com')->first();

        DB::table('anggota')->insert([
            'user_id' => $user->id,
            'kode_anggota' => 'AG001',
            'nama_lengkap' => 'Anggota Satu',
            'alamat' => 'Jl. Anggota No. 456',
            'no_hp' => '083456789012',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
