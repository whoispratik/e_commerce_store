<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['name', 'description', 'price', 'color', 'size', 'quantity'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
