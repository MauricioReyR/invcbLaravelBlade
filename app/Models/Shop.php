<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $table = 'shops';
    protected $fillable = [
        'user_id',
        'name',
        'address',
        'phone',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function shopProducts()
    {
        return $this->hasMany(ShopProduct::class);
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
