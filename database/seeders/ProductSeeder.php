<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['name' => 'Apel', 'price' => 5000, 'description' => 'Apel segar merah manis, cocok untuk camilan sehat.'],
            ['name' => 'Pisang', 'price' => 3000, 'description' => 'Pisang matang manis dengan tekstur lembut.'],
            ['name' => 'Jeruk', 'price' => 4000, 'description' => 'Jeruk segar dengan rasa manis asam menyegarkan.'],
            ['name' => 'Mangga', 'price' => 7000, 'description' => 'Mangga harum manis dengan daging tebal.'],
            ['name' => 'Semangka', 'price' => 8000, 'description' => 'Semangka besar dengan daging merah segar.'],
            ['name' => 'Melon', 'price' => 6000, 'description' => 'Melon hijau segar dengan rasa manis lembut.'],
            ['name' => 'Pepaya', 'price' => 4000, 'description' => 'Pepaya matang segar kaya vitamin.'],
            ['name' => 'Nanas', 'price' => 5000, 'description' => 'Nanas kuning segar rasa manis sedikit asam.'],
            ['name' => 'Anggur', 'price' => 8000, 'description' => 'Anggur ungu segar manis tanpa biji.'],
            ['name' => 'Strawberry', 'price' => 7000, 'description' => 'Strawberry segar rasa manis asam segar.'],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
