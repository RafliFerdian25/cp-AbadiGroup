<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoProduct extends Model
{
    use HasFactory;

    
    protected $guarded = ['id'];

    // relation many to one with product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}