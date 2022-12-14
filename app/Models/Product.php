<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function attribute()
    {
        return $this->hasOne(ProductAttributes::class, 'product_id', 'id');
    }

    public function saleDetail()
    {
        return $this->hasMany(Product::class, 'product_id', 'id');
    }
}
