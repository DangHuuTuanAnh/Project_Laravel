<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Image extends Model
{
	protected $table = 'images';
    // protected $fillable = ['name','path'];
    protected $fillable = ['name','path','status'];

    public function product(){
    	return $this->hasOne(Product::class);
    }
}
