<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleOrder extends Model
{
    use HasFactory;
    protected $table = 'sale_orders';
    protected $fillable = [
        'shop_id',
        'customer_id',
        'total',
        'payment_method',
        'reference',
        'status',
        'note',
    ];
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
