<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::insert([
            ['category_id' => 1, 'name' => 'Es Teh Manis', 'description' => 'Teh manis dingin', 'price' => 5000],
            ['category_id' => 1, 'name' => 'Jus Jeruk', 'description' => 'Segar dan alami', 'price' => 10000],
            ['category_id' => 1, 'name' => 'Lemon Tea', 'description' => 'Teh dengan lemon', 'price' => 8000],
            ['category_id' => 1, 'name' => 'Air Mineral', 'description' => 'Air kemasan 600ml', 'price' => 4000],
            ['category_id' => 1, 'name' => 'Soda Gembira', 'description' => 'Susu soda', 'price' => 12000],

            ['category_id' => 2, 'name' => 'Nasi Goreng Spesial', 'description' => 'Dengan telur dan ayam', 'price' => 18000],
            ['category_id' => 2, 'name' => 'Mie Goreng', 'description' => 'Mie goreng Jawa', 'price' => 15000],
            ['category_id' => 2, 'name' => 'Ayam Geprek', 'description' => 'Pedas level 5', 'price' => 20000],
            ['category_id' => 2, 'name' => 'Soto Ayam', 'description' => 'Soto bening khas Jawa', 'price' => 16000],
            ['category_id' => 2, 'name' => 'Nasi Ayam Teriyaki', 'description' => 'Ayam saus teriyaki', 'price' => 19000],

            ['category_id' => 3, 'name' => 'Kentang Goreng', 'description' => 'Kentang crispy', 'price' => 10000],
            ['category_id' => 3, 'name' => 'Roti Bakar Coklat', 'description' => 'Roti isi coklat meleleh', 'price' => 12000],
            ['category_id' => 3, 'name' => 'Pisang Goreng', 'description' => 'Dilengkapi keju', 'price' => 10000],
            ['category_id' => 3, 'name' => 'Cireng Isi', 'description' => 'Isi ayam pedas', 'price' => 9000],
            ['category_id' => 3, 'name' => 'Singkong Keju', 'description' => 'Singkong goreng + keju', 'price' => 10000],

            ['category_id' => 4, 'name' => 'Es Krim Vanila', 'description' => 'Lembut dan manis', 'price' => 8000],
            ['category_id' => 4, 'name' => 'Puding Coklat', 'description' => 'Dengan fla susu', 'price' => 9000],

            ['category_id' => 5, 'name' => 'Kopi Hitam', 'description' => 'Kopi robusta tanpa gula', 'price' => 7000],
            ['category_id' => 5, 'name' => 'Cappuccino', 'description' => 'Kopi susu berbuih', 'price' => 12000],
        ]);
    }
}