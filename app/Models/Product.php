<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'slug', 'type', 'description', 'price', 'quantity',
        'photo'
    ];

    protected $hidden = [];

    public function galleries()
    {
        // return $this->hasMany(ProductGallery::class, 'products_id');
    }

    public function getPhotoAttribute($value)
    {
        return url('storage/' . $value);
        // return url('uploads/' . $value);
    }
}
