<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function path()
    {
        return route('products.show', $this);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
