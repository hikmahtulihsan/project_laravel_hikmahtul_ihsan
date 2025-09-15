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
            $table->id(); // kolom id primary key
            $table->string('name'); // nama user
            $table->string('email')->unique(); // email unik
            $table->timestamp('email_verified_at')->nullable(); // waktu verifikasi email
            $table->string('password'); // password user
            $table->rememberToken(); // token remember me
            $table->timestamps(); // created_at & updated_at
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
