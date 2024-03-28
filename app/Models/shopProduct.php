<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shopProduct extends Model
{
    use HasFactory;

    protected $table = 'shop_products';
    protected $fillable = [
        'shop_id',
        'product_id',
        'stock',
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
