<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\Category;

class Product extends Model
{
    protected $table = 'products';

    public function images()
    {
    	return $this->hasMany(Image::class);
    }
    public function category()
    {
    	return $this->hasOne(Category::class);
    }
    public function orders()
    {
    	return $this->belongsToMany(Order::class);
    }
}
