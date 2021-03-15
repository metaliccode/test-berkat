<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sales_order extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'uuid', 'customers_id', 'products_id', 'transaction_total', 'transaction_status'
    ];

    protected $hidden = [];

    public function product()
    {
        // relasi ke products
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }

    public function customer()
    {
        // relasi ke customer
        return $this->belongsTo(Customer::class, 'customers_id', 'id');
    }

    public function details()
    {
        // relasi ke customer
        return $this->hasMany(TannsactionDetail::class, 'transactions_id');
    }
}
