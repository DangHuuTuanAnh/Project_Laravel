<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Image;
use App\Models\Comment;
// use App\Models\Cart;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Order;

class HomeController extends Controller
{
  public function index(Request $request){
    $auth_user = Auth::user();
    $items = Cart::content();
    $totalQty = Cart::count();
    $totalPrice = Cart::priceTotal();
    $posts = Post::orderby('updated_at','desc')->limit(3)->get();
    $products = Product::orderby('updated_at','desc')->Paginate(10);
    $products_discount = Product::where('view_count','>',10)->orderby('updated_at','desc')->get();
    $products_featured = Product::where('view_order','>',15)->orderby('updated_at','desc')->take(5)->get();
    $thumbnails = Image::where('status',1)->get();
    return view('frontend.home1')->with([
      'products'=>$products,
      'thumbnails'=>$thumbnails,
      'posts'=>$posts,
      'products_discount'=>$products_discount,
      'items'=>$items,
      'totalQty'=>$totalQty,
      'totalPrice'=>$totalPrice,
      'products_featured'=>$products_featured,
      'auth_user'=>$auth_user,
    ]);
  }


  public function all_products(Request $request){

    $auth_user = Auth::user();
    $items = Cart::content();
    $totalQty = Cart::count();
    $totalPrice = Cart::priceTotal(); 
    $products = Product::orderby('updated_at','desc');
    // $products_filter = [];
    if($request->orderby){
      $orderby = $request->orderby;
      switch ($orderby) {
        case 'desc':
        $products = Product::orderby('updated_at','desc'); 
        break;
        case 'asc':
        $products = Product::orderby('updated_at','asc'); 
        break;
        case 'price_max':
        $products = Product::orderby('sale_price','asc'); 
        break;
        case 'price_min':
        $products = Product::orderby('sale_price','desc'); 
        break;

        default:
          # code...
        break;
      }
    }

    if($request->price){
      $price = $request->price;
      switch ($price) {
        case '1':
        $products = Product::where('sale_price','<',1000000);

        break;
        case '1-5':
        $products = Product::whereBetween('sale_price',[1000000,5000000]);

        break;
        case '5-10':
        $products = Product::whereBetween('sale_price',[5000000,10000000]);

        break;
        case '10-15':
        $products = Product::whereBetween('sale_price',[10000000,15000000]);

        break;
        case '15-20':
        $products = Product::whereBetween('sale_price',[15000000,20000000]);

        break;
        case '20':
        $products = Product::where('sale_price','>',20000000);

        break;

      }
    }

    $products = $products->Paginate(12);
    $thumbnails = Image::where('status',1)->get();

    return view('frontend.shop')->with([
      'products'=>$products,
      'thumbnails'=>$thumbnails,
      'items'=>$items,
      'totalQty'=>$totalQty,
      'totalPrice'=>$totalPrice,
      'auth_user'=>$auth_user,
    ]);
  }


  public function category_products_show($id){
    $auth_user = Auth::user();
    $items = Cart::content();
    $totalQty = Cart::count();
    $totalPrice = Cart::priceTotal();
    $category = Category::find($id);
    if($category->depth == 0){
      $categories = Category::where('parent_id',$category->id)->get();

      $category_condition = [];
      foreach ($categories as $category) {
        $category_condition[] = $category->id;

      }
      $products = Product::whereIn('category_id',$category_condition)->orderby('updated_at','desc')->Paginate(12);
    }else{
      $products = $category->products()->orderby('updated_at','desc')->Paginate(16);
    }


    $thumbnails = Image::where('status',1)->get();

    return view('frontend.categoryProducts')->with([
      'category'=>$category,
      'products'=>$products,
      'thumbnails'=>$thumbnails,
      'items'=>$items,
      'totalQty'=>$totalQty,
      'totalPrice'=>$totalPrice,
      'auth_user'=>$auth_user,
    ]);
  }

  public function product_detail($id){
    $auth_user = Auth::user();

    $user = Auth::user();
    $product = Product::find($id);
    $configs = $product->configs;
    $arr_config = json_decode($configs);
    $items = Cart::content();
    $totalQty = Cart::count();
    $totalPrice = Cart::priceTotal();
    $all_comment = Comment::orderby('created_at','desc')->get();
    $images = $product->images()->where('status',0)->take(4)->get();
    $images_limit = $product->images()->where('status',0)->take(1)->get();
    $products_suggest = Product::orderby('updated_at','desc')->take(8)->get();
    $products_same = Product::where('category_id',$product->category_id)->take(8)->get();

    return view('frontend.productDetail')->with([
      'product'=>$product,
      'images'=>$images,
      'items'=>$items,
      'totalQty'=>$totalQty,
      'totalPrice'=>$totalPrice,
      'all_comment'=>$all_comment,
      'user'=>$user,
      'images_limit'=>$images_limit,
      'products_suggest'=>$products_suggest,
      'products_same'=>$products_same,
      'arr_config'=>$arr_config,
      'auth_user'=>$auth_user,

    ]);
  }
  public function cart(){
    $auth_user = Auth::user();
    return view('frontend.cart')->with([
      'auth_user'=>$auth_user,
    ]);
  }
  public function addToCart(Request $request,$id){
    $auth_user = Auth::user();

    $products = Product::orderby('updated_at','desc')->Paginate(12);
    $thumbnails = Image::where('status',1)->get();
    $product = Product::where('id',$id)->first();
    if($product !=null){
      $oldCart = Session('Cart') ? Session('Cart') : null;
      $newCart = new Cart($oldCart);
      $newCart->addCart($product,$id);

      $request->Session()->put('Cart',$newCart);
    }
    return view('frontend.shop')->with([

      'products'=>$products,
      'thumbnails'=>$thumbnails,
      'auth_user'=>$auth_user,
    ]);
  }
  public function deleteItemCart(Request $request,$id){
    $auth_user = Auth::user();

    $products = Product::orderby('updated_at','desc')->Paginate(12);   
    $thumbnails = Image::where('status',1)->get();
    $oldCart = Session('Cart') ? Session('Cart') : null;
    $newCart = new Cart($oldCart);
    $newCart->deleteItemCart($id);
    if(Count($newCart->products) > 0){
      $request->Session()->put('Cart',$newCart);
    }else{
      $request->Session()->forget('Cart');
    }

    return view('frontend.shop')->with([
      'products'=>$products,
      'thumbnails'=>$thumbnails,
      'auth_user'=>$auth_user,
    ]);
  }

  public function deleteItemListCart(Request $request,$id){
    $auth_user = Auth::user();

    $products = Product::orderby('updated_at','desc')->Paginate(12);   
    $thumbnails = Image::where('status',1)->get();
    $oldCart = Session('Cart') ? Session('Cart') : null;
    $newCart = new Cart($oldCart);
    $newCart->deleteItemCart($id);
    if(Count($newCart->products) > 0){
      $request->Session()->put('Cart',$newCart);
    }else{
      $request->Session()->forget('Cart');
    }

    return view('frontend.cart')->with([

      'products'=>$products,
      'thumbnails'=>$thumbnails,
      'auth_user'=>$auth_user,
    ]);
  }

  public function comment(Request $request,$id)
  {
    $auth_user = Auth::user();
    $comment = new Comment();
    $user_id = Auth::user()->id;

    $comment_product = $request->input('comment');

    $comment->user_id = $user_id;
    $comment->product_id = $id;
    $comment->content = $comment_product;

    $comment->save();

    return redirect()->route('frontend.home.productdetail');
  } 

  public function search(Request $request){
    $auth_user = Auth::user();
    $items = Cart::content();
    $totalQty = Cart::count();
    $totalPrice = Cart::priceTotal();
    $products = Product::where('name','like','%'.$request->key.'%')->orwhere('sale_price','like',$request->key)->Paginate(12);
    $key = $request->key;
    $total_result = count($products);
    // dd($total_result);
    return view('frontend.search')->with([
      'products'=>$products,
      'key'=>$key,
      'total_result'=>$total_result,
      'items'=>$items,
      'totalQty'=>$totalQty,
      'totalPrice'=>$totalPrice,
      'auth_user'=>$auth_user,
    ]);
  }

  public function wish_list(){
    $auth_user = Auth::user();
    $items = Cart::content();
    $totalQty = Cart::count();
    $totalPrice = Cart::priceTotal();
    return view('frontend.wishList')->with([

     'items'=>$items,
     'totalQty'=>$totalQty,
     'totalPrice'=>$totalPrice,
     'auth_user'=>$auth_user,
   ]);
  }
  public function checkout(){
    $auth_user = Auth::user();
    $items = Cart::content();
    $totalQty = Cart::count();
    $totalPrice = Cart::priceTotal();
    if(Auth::check()){
      $user = Auth::user();
      $items = Cart::content();
      $totalQty = Cart::count();
      $totalPrice = Cart::priceTotal();
      return view('frontend.checkout')->with([
        'user'=>$user,
        'items'=>$items,
        'totalQty'=>$totalQty,
        'totalPrice'=>$totalPrice,
        'auth_user'=>$auth_user,
      ]);
    }else{
      return redirect()->route('login.form');
    }

  }

  public function storeOrder(Request $request)
  {
    $auth_user = Auth::user();
    $order = new Order();
    $id_products = [];
    $items = Cart::content();

    foreach ($items as $item) {
      $id_item = $item->id;
      $id_products[] = $id_item;
    }


    $user_id = Auth::user()->id;
    $name = $request->input('name');
    $phone = $request->input('phone');
    $email = $request->input('email');
    $address = $request->input('address');
    $totalQty = Cart::count();
    $totalPrice = Cart::priceTotal();

    $order->user_id = $user_id;
    $order->user_name = $name;
    $order->phone = $phone;
    $order->email = $email;
    $order->address = $address;
    $order->total_price = $totalPrice;
    $order->total_qty = $totalQty;

    $order->save();
    Cart::destroy();
    $order->products()->attach($id_products);

    return redirect()->route('frontend.home.allproducts');
  }

  public function contact_us(){
    $auth_user = Auth::user();
    $items = Cart::content();
    $totalQty = Cart::count();
    $totalPrice = Cart::priceTotal();
    return view('frontend.contact')->with([
     'items'=>$items,
     'totalQty'=>$totalQty,
     'totalPrice'=>$totalPrice,
     'auth_user'=>$auth_user,
   ]);
  }
  public function blog(){
    $auth_user = Auth::user();
    $items = Cart::content();
    $totalQty = Cart::count();
    $totalPrice = Cart::priceTotal();
    $posts = Post::where('status',1)->orderby('updated_at','desc')->Paginate(5);
    return view('frontend.blog')->with([
      'posts'=>$posts,
      'items'=>$items,
      'totalQty'=>$totalQty,
      'totalPrice'=>$totalPrice,
      'auth_user'=>$auth_user,
    ]);
  }
  public function blog_details($id){
    $auth_user = Auth::user();
    $items = Cart::content();
    $totalQty = Cart::count();
    $totalPrice = Cart::priceTotal();
    $post = Post::find($id);
    return view('frontend.blogDetails')->with([
      'post'=>$post,
      'items'=>$items,
      'totalQty'=>$totalQty,
      'totalPrice'=>$totalPrice,
      'auth_user'=>$auth_user,
    ]);
  }
  public function my_account(){
    $auth_user = Auth::user();
    $items = Cart::content();
    $totalQty = Cart::count();
    $totalPrice = Cart::priceTotal();
    if (Auth::check()) {
      $user = Auth::user();
      return view('frontend.myAccount')->with([
        'user'=>$user,
        'items'=>$items,
        'totalQty'=>$totalQty,
        'totalPrice'=>$totalPrice,
        'auth_user'=>$auth_user,
      ]);
    }else{
      return redirect()->route('login.form');
    }

  }

}
