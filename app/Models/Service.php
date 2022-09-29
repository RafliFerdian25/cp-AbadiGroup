<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    // relation one to many with gallery
    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }
}