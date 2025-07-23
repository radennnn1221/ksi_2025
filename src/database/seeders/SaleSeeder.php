<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Sale::create([
            'sale_date' => now()->subDays(1),
            'total_price' => 100000,
        ]);
        \App\Models\Sale::create([
            'sale_date' => now(),
            'total_price' => 250000,
        ]);
    }
}
