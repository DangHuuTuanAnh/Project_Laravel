<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::orderby('created_at','desc')->Paginate(5);

        return view('backend.orders.index')->with([
            'orders'=>$orders,
        ]);
    }

    public function processing($id)
    {
        $order = Order::find($id);

        $order->status = 1;
        $order->save();

        return redirect()->route('backend.order.index');
    }

    public function delivered($id)
    {
        $order = Order::find($id);

        $order->status = 2;
        $order->save();

        return redirect()->route('backend.order.index');
    }

    public function to_return($id)
    {
        $order = Order::find($id);

        $order->status = 3;
        $order->save();

        return redirect()->route('backend.order.index');
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
        // $order = new Order();
        // $user = Auth::user();
        // $order->user_id = $user->id;
        // $order->total_price = 2;
        // $order->total_qty = 200000;
        // $order->save();
        // Cart::destroy();

        // return redirect()->route('frontend.home.allproducts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        $products = $order->products;
        return view('backend.orders.detail')->with([
            'order'=>$order,
            'products'=>$products,
        ]);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
