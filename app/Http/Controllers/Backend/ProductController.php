<?php

namespace App\Http\Controllers\Backend;
use App\Models\Category;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Policies\ProductPolicy;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $all_products = Product::all();
        $products = Product::orderby('updated_at','desc')->Paginate(5);
        $thumbnails = Image::where('status',1)->get();
        // dd($thumbnails);
        return view('backend.products.index')->with([
            'products'=>$products, 
            'thumbnails'=>$thumbnails,
            'all_products'=>$all_products,
        ]);
    }

    public function showtest()
    {
        return view('test.test');
    }

    public function test(Request $request)
    {
        //Arr[request->input(key)[i]] = request->input(value )[i]

        $keys = $request->input('key');
        
        $values = $request->input('value');

        // dd($keys,$values);

        $config = array_combine($keys,$values);

        $table_config = [];
        // $json_config = json_encode($table_config);
        foreach ($config as $key => $value) {
            $table_config[] = '<p>'.$key .':</p>'.'<b>'.$value.'</b>'; 
        }
        // $json_config = json_encode($table_config);
        // dd($table_config);
        foreach ($table_config as $config_product) {
            dd($config_product);
        }


        return view('test.test');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        if($user->can('create')){
           $categories = Category::get();
           return view('backend.products.create')->with([
            'categories'=>$categories
        ]);
       }else{
        $this->authorize('create');
    }

}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    // public function store(Request $request)
    {
        $product = new Product();
        $user = Auth::user();
        if($user->can('create',$product)){

            $name = $request->get('name');
            $category_id = $request->get('category_id');
            $origin_price = $request->get('origin_price');
            $discount_percent = $request->get('discount_percent');
            $sale_price= ($origin_price - (($origin_price/100)* $discount_percent));
            $content = $request->get('content');
            $status = $request->get('status');
            $date_discount = $request->get('date_discount');
            $keys = $request->input('key');

            $values = $request->input('value');

            $config = array_combine($keys,$values);
            $json_config = json_encode($config);


            $product->name = $name;
            $product->category_id = $category_id;
            $product->origin_price = $origin_price;
            $product->discount_percent = $discount_percent;
            $product->date_discount = $date_discount;
            $product->sale_price = $sale_price ;
            $product->content = $content;
            $product->status = $status;
            $product->configs = $json_config;
            $product->user_id = Auth::user()->id; 

            $product->save();
            $save = 1;

            if($save){
                $request->session()->flash('success','Tạo mới thành công');
            }else{
                $request->session()->flash('error','Tạo mới thất bại');
            }

            if($request->hasFile('thumbnail')){
                $thumbnail = $request->file('thumbnail');

                $namefile = $thumbnail->getClientOriginalName();
                $product_thumbnail = Storage::disk('public')->putFileAs('Product-images/Thumbnail',$thumbnail,$namefile);
                $url = Storage::url($product_thumbnail);

                // dd($url);

                $thumbnail = $product->images()->create([
                    'name' => $namefile,
                    'path' => $url,
                    'status'=>1,
                ]);
            // dd('OK');
            }else{
                dd('NO');
            }
            if ($request->hasFile('images')){
                $images = $request->file('images');
                foreach ($images as $image){
                 $namefile = $image->getClientOriginalName();

                 $product_images =Storage::disk('public')->putFileAs('products',$image,$namefile);

                 $url = Storage::url($product_images);

                 $image = $product->images()->create([
                    'name' => $namefile,
                    'path' =>$url,
                    'status'=>0,


                ]);
             }
         }



         return redirect()->route('backend.product.index');
     }else{
        $this->authorize('create',$product);
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        $configs = $product->configs;
        $arr_config = json_decode($configs);

        // dd($configs);
        
        $images = $product->images()->where('status',0)->get();
        $image = Image::where('product_id',$id)->where('status',0)->limit(1)->get();
        return view('backend.products.show')->with([
            'product'=>$product,
            'images'=>$images,
            'image'=>$image,
            'arr_config'=>$arr_config,
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
        $user = Auth::user();
        $product = Product::find($id);
        $configs = $product->configs;
        $arr_config = json_decode($configs);
        $thumbnails = Image::where('status',1)->get();
        $images_product = Image::where('status',0)->get();
        $categories = Category::get();
        $product = Product::find($id);
        if($user->can('update',$product)){
            return view('backend.products.edit')->with([
                'categories'=>$categories,
                'product'=>$product,
                'thumbnails'=>$thumbnails,
                'images_product'=>$images_product,
                'arr_config'=>$arr_config,
            ]);
        }else{
            $this->authorize('update',$product);
        }

    }

    public function warehouse()
    {
        $all_products = Product::all();
        $products = Product::orderby('updated_at','desc')->Paginate(5);
        $thumbnails = Image::where('status',1)->get();
        // dd($thumbnails);
        return view('backend.products.warehouse')->with([
            'products'=>$products, 
            'thumbnails'=>$thumbnails,
            'all_products'=>$all_products,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProductRequest $request, $id)
    // public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $name = $request->get('name');
        $category_id = $request->get('category_id');
        $origin_price = $request->get('origin_price');
        $discount_percent = $request->get('discount_percent');
        $sale_price= ($origin_price - (($origin_price/100)* $discount_percent));
        $content = $request->get('content');
        $status = $request->get('status');
        $date_discount = $request->get('date_discount');
        $keys = $request->input('key');

        $values = $request->input('value');

        $config = array_combine($keys,$values);
        $json_config = json_encode($config);

        $product->name = $name;
        $product->category_id = $category_id;
        $product->origin_price = $origin_price;
        $product->discount_percent = $discount_percent;
        $product->date_discount = $date_discount;
        $product->sale_price = $sale_price;
        $product->content = $content;
        $product->status = $status;
        $product->configs = $json_config;

        $product->save();
        // Kiểm tra tồn tại file images:
        if($request->hasFile('images')){
            $images = $request->file('images');
            foreach ($images as $image) {
                //Lấy tên file:
                $namefile = $image->getClientOriginalName();
                $product_images = Storage::disk('public')->putFileAs('Product-images',$image,$namefile);
                $url = Storage::url($product_images);

                // dd($url);

                $image = $product->images()->create([
                    'name' => $namefile,
                    'path' => $url,
                ]);
            }
            // dd('OK');
        }else{
            return redirect()->route('backend.product.index');
            // dd('NO');
        }

        // if($request->hasFile('thumbnail')){
        //     $thumbnail = $request->file('thumbnail');

        //     $namefile = $thumbnail->getClientOriginalName();
        //     $product_thumbnail = Storage::disk('public')->putFileAs('Product-images/Thumbnail',$thumbnail,$namefile);
        //     $url = Storage::url($product_thumbnail);

        //         // dd($url);

        //     $thumbnail = $product->images()->create([
        //         'name' => $namefile,
        //         'path' => $url,
        //         'status'=>1,
        //     ]);
        // }else{

        // }

        return redirect()->route('backend.product.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $user = Auth::user();
        $product = Product::find($id);
        if($user->can('delete',$product)){
           $image_product = Image::where('product_id',$id);
           $image_product->delete();
           $product->delete();
           return redirect()->route('backend.product.index');
       }else{
        $this->authorize('delete',$product);
    }

}
}
