<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Product::create([
            'name' => 'Ayam',
            'price' => 12000,
            'stock' => 100,
        ]);
        \App\Models\Product::create([
            'name' => 'Sapi',
            'price' => 15000,
            'stock' => 50,
        ]);
    }
}
