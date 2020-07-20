<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $auth_user = Auth::user();
       $items = Cart::content();
       $totalQty = Cart::count();
       $totalPrice = Cart::priceTotal();
        // dd($items);
       return view('frontend.cart')->with([
        'items'=>$items,
        'totalQty'=>$totalQty,
        'totalPrice'=>$totalPrice,
        'auth_user'=>$auth_user,
    ]);
   }

   public function remove_item($rowId){

    Cart::remove($rowId);
    return redirect()->route('frontend.cart.index');
}

public function add_to_cart(Request $request,$id){
    $product = Product::find($id);
    Cart::add($product->id,$product->name,1,$product->sale_price,0);
    $request->session()->flash('success', 'Đã thêm sản phẩm vào giỏ hàng!');
    return redirect()->route('frontend.home.allproducts');
}

public function updateQtyItem(Request $request,$rowId)
{   

    $qty = $request->input('qty');

    Cart::update($rowId,$qty);

    return redirect()->route('frontend.cart.index');
}




public function destroy(){
    Cart::destroy();

    return redirect()->route('frontend.cart.index');
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    
}
