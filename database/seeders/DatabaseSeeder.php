<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat user dengan nama & email Ihsan
        User::factory()->create([
            'name' => 'Ihsan',
            'email' => 'ihsan@example.com',
        ]);

        // Jalankan seeder untuk produk
        $this->call(ProductSeeder::class);
    }
}
