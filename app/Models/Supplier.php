<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'suppliers';
    protected $fillable = [
        'document_type',
        'document',
        'name',
        'email',
        'phone',
        'address',
    ];
    public function purchaseOrders()
    {
        return $this->hasMany(PurchaseOrder::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
