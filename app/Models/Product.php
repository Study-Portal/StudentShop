<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function Review()
    {
        return $this->hasMany(Review::class);
    }

    public function Order()
    {
        return $this->belongsToMany(Order::class);
    }

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
}
