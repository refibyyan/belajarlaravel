<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'products';
    protected $primaryKey = 'id_product';
    protected $fillable = [
        'name_product',
        'stock_product',
        'price_product',
        'desc_product',
        'id_category',
    ];

    // Local scope: Product::search('sepatu', 2000000)->get()
    public function scopeSearch($query, string $keyword, ?int $maxPrice = null)
    {
        if ($keyword !== '') {
            $query->where('name', 'like', "%{$keyword}%");
        }

        if ($maxPrice !== null) {
            $query->where('price', '<=', $maxPrice);
        }

        return $query;
    }
}
