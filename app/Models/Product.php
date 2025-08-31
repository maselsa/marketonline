<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['categories_id', 'name', 'slug', 'price', 'stock', 'description', 'image'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }
}
