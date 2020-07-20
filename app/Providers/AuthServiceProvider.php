<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Post;
use App\Models\Product;
use App\Policies\ProductPolicy;
use App\Policies\PostPolicy;
use App\Policies\UsePolicy;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        //Đăng ký policy:
        Post::class => PostPolicy::class,
        Product::class => ProductPolicy::class,
        User::class => UserPolicy::class,

        // 'App\Model' => 'App\Policies\ModelPolicy',

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //Phân quyền quản lý bài viết:
        Gate::define('update-post', function($user,$post){
            return $user->id == $post->user_id || $user->role == 1;
        });
        Gate::define('delete-post',function($user,$post){
            return $user->id == $post->user_id || $user->role == 1;
        });
        Gate::define('browse-post',function($user,$post){
            return $user->role == 1 || $user->role == 2;
        });

        //Phân quyền quản lý sản phẩm:
        Gate::define('update-product', function($user,$product){
            return $user->id == $product->user_id || $user->role == 1;
        });
        Gate::define('delete-product', function($user,$product){
            return $user->id == $product->user_id || $user->role == 1;
        });

        //Phân quyền quản lý user:

        Gate::define('update',function($user){
            return $user->id = Auth::user()->id || $user->role == 1;
        });

        Gate::define('create',function($user){
            return $user->role == 1 || $user->role ==2;
        });

    }
}
