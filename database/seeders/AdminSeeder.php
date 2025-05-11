<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'admin@example.com')->first();

        DB::table('admins')->insert([
            'user_id' => $user->id,
            'nama_admin' => 'Admin Utama',
            'no_hp' => '081234567890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
