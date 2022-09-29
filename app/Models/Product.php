<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    // relation one to many with photo_products
    public function photo_product(){
        return $this->hasMany(PhotoProduct::class);
    }

    // relation many to one with category
    public function category(){
        return $this->belongsTo(Category::class);
    }
}