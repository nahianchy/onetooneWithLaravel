<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    //
    protected $fillable = [
        'id',
        'name',
        'description'
    ];

    public function categories()
    {
        return $this->hasOne(Category::class);
    }
}
