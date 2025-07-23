<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleItem extends Model
{
    protected $fillable = ['product_id', 'quantity', 'subtotal', 'payment_method'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
