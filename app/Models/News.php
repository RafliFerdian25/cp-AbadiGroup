<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    
    protected $guarded = ['id'];
    
    // relation with user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // relation one to many with gallery
    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }
}