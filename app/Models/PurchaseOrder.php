<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use HasFactory;

    protected $table = 'purchase_orders';
    protected $fillable = [
        'shop_id',
        'supplier_id',
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
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
