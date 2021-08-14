<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Product;

class Category extends Model
{
    //
    protected $fillable = [
        'id',
        'categoryName',
        
    ];

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
