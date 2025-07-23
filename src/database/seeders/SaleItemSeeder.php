<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SaleItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = \App\Models\Product::first();
        if ($product) {
            \App\Models\SaleItem::create([
                'product_id' => $product->id,
                'quantity' => 10,
                'subtotal' => $product->price * 10,
                'payment_method' => 'cash',
            ]);
        }
        $product2 = \App\Models\Product::skip(1)->first();
        if ($product2) {
            \App\Models\SaleItem::create([
                'product_id' => $product2->id,
                'quantity' => 5,
                'subtotal' => $product2->price * 5,
                'payment_method' => 'transfer',
            ]);
        }
    }
}
