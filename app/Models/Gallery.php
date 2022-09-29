<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // relation many to one with news
    public function news()
    {
        return $this->belongsTo(News::class);
    }

    // relation many to one with service
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}