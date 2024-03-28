<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'name',
        'description',
        'size',
        'color',
        'material',
        'image',
        'price',
        'stock',
    ];
    public function shopProducts()
    {
        return $this->hasMany(ShopProduct::class);
    }
    public function detailOrders()
    {
        return $this->hasMany(detailOrder::class);
    }
    public function purchaseOrders()
    {
        return $this->hasMany(PurchaseOrder::class);
    }
    public function saleOrders()
    {
        return $this->hasMany(SaleOrder::class);
    }
}
