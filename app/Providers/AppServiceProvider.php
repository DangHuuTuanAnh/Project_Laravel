<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    //   if(!Cache::has('categories')){
    //     $categories = Category::all();
    //     Cache::put('categories',$categories,20);
    // }
    // $categories = Cache::get('categories');

        // $categories = Cache::rememner('categories',10,function(){
        //     return Category::all();
        // });

        $categories = Category::get();
        $thumbnails = Image::where('status',1)->get();
        $parent_categories = Category::where('depth',0)->get();
        $child_categories = Category::where('depth',1)->get();
        $grand_categories = Category::where('depth',2)->get();
        $count_users = count(User::all());
        $count_products = count(Product::all());
        $count_orders = count(Order::all());

        \Illuminate\Support\Facades\View::share('categories',$categories);
        \Illuminate\Support\Facades\View::share('parent_categories',$parent_categories);
        \Illuminate\Support\Facades\View::share('child_categories',$child_categories);
        \Illuminate\Support\Facades\View::share('grand_categories',$grand_categories);
        \Illuminate\Support\Facades\View::share('thumbnails',$thumbnails);
        \Illuminate\Support\Facades\View::share('count_users',$count_users);
        \Illuminate\Support\Facades\View::share('count_products',$count_products);
        \Illuminate\Support\Facades\View::share('count_orders',$count_orders);
    }
}
