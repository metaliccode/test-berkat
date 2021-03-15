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
}
