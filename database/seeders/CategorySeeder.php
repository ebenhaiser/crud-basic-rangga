<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            ['name' => 'Minuman', 'description' => 'Aneka minuman segar'],
            ['name' => 'Makanan Berat', 'description' => 'Makanan utama'],
            ['name' => 'Snack', 'description' => 'Camilan ringan'],
            ['name' => 'Dessert', 'description' => 'Makanan penutup'],
            ['name' => 'Kopi', 'description' => 'Berbagai jenis kopi']
        ]);
    }
}