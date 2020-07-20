<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
	public $products = null;
	public $totalPrice = 0;
	public $totalQuanty = 0;

	public function __construct($cart)
	{
		if($cart){
			$this->products = $cart->products;
			$this->totalPrice = $cart->totalPrice;
			$this->totalQuanty = $cart->totalQuanty;
		}
	}

	public function addCart($product ,$id)
	{
		$newProduct = ['quanty'=>0,'price'=>$product->sale_price,'product_info'=>$product];
		if($this->products){
			if(array_key_exists($id, $this->products)){
				$newProduct = $this->products[$id];
			}
		}
		$newProduct['quanty']++;
		$newProduct['price'] = $newProduct['quanty'] * $product->sale_price;
		$this->products[$id] = $newProduct;
		$this->totalPrice += $product->sale_price;
		$this->totalQuanty++;

	}

	public function deleteItemCart($id){
		$this->totalQuanty -=$this->products[$id]['quanty'];
		$this->totalPrice -=$this->products[$id]['price'];
		unset($this->products[$id]);
	}
}
