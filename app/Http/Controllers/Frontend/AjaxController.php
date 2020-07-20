<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Models\Product;
use Request;
use Gloudemans\Shoppingcart\Facades\Cart;


class AjaxController extends Controller
{
	public function remove_item($rowid)
	{
		if(Request::ajax()){
			$idItem = Request::get('idItem');

			Cart::remove($idItem);
			return "OK";
		}

	}
	public function add_to_cart($id)
	{
		if(Request::ajax()){
			$idProduct = Request::get('idProduct');

			$product = Product::find($idProduct);
			Cart::add($product->id,$product->name,1,$product->sale_price,0);
			return "OK";
			
		}
	}


}
