<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Nama pengguna
            $table->string('email')->unique(); // Email untuk login
            $table->timestamp('email_verified_at')->nullable(); // Verifikasi email (opsional)
            $table->string('password'); // Password terenkripsi
            $table->enum('role', ['admin', 'petugas', 'anggota']); // Role user
            $table->rememberToken(); // Token untuk "remember me"
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
