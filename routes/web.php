<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
// 	return view('frontend.home');
// });
Route::group([
	'namespace'=>'Frontend',

],function(){
	//Trang home:
	Route::get('/','HomeController@index')->name('frontend.home.index');
	//Trang danh sách sản phẩm:
	Route::get('/allproducts','HomeController@all_products')->name('frontend.home.allproducts');
	//Trang chi tiết sản phẩm:
	Route::get('/productdetail/{id}','HomeController@product_detail')->name('frontend.home.productdetail');
	//Trang sản phẩm theo danh mục:
	Route::get('categoryProducts/{id}','HomeController@category_products_show')->name('frontend.home.categoryprodutsshow');

	//Giỏ hàng:(False)
	Route::get('/cart','HomeController@cart')->name('frontend.home.cart');
	Route::get('addtocart/{id}','HomeController@addToCart')->name('frontend.home.addtocart');
	Route::get('Delete-Item-Cart/{id}','HomeController@deleteItemCart')->name('frontend.home.deleteitemcart');
	Route::get('Delete-Item-List-Cart/{id}','HomeController@deleteItemListCart')->name('frontend.home.deleteitemlistcart');


	Route::get('/wishlist','HomeController@wish_list')->name('frontend.home.wishlist');
	Route::get('/checkout','HomeController@checkout')->name('frontend.home.checkout');
	Route::get('/contact_us','HomeController@contact_us')->name('frontend.home.contactus');
	Route::get('/blog','HomeController@blog')->name('frontend.home.blog');
	Route::get('/blog_details/{id}','HomeController@blog_details')->name('frontend.home.blogdetail');
	Route::get('myaccount','HomeController@my_account')->name('frontend.home.myaccount');

	//Giỏ hàng:
	Route::get('/cart_test','CartController@index')->name('frontend.cart.index');
	Route::get('/addtocart_test/{id}','CartController@add_to_cart')->name('frontend.cart.addtocarttest');
	Route::get('/delete_test/{rowId}','CartController@remove_item')->name('frontend.cart.removeitem');


	Route::get('/delete_test','CartController@destroy')->name('frontend.cart.destroy');

	//Update số lượng sản phẩm:
	Route::get('update/{rowId}','CartController@updateQtyItem')->name('frontend.cart.updateQtyItem');

	//Lọc sản phẩm:
	Route::get('filter/{id}','HomeController@filter_products')->name('frontend.home.filterproducts');
	//Tìm kiếm sản phẩm:
	Route::get('search','HomeController@search')->name('frontend.home.search');

	//Quản lý đơn hàng:
	Route::post('order','HomeController@storeOrder')->name('frontend.home.storeOrder');

	//Bình luận:
	Route::post('comment/{id}','HomeController@comment')->name('frontend.home.comment');

	//Xóa item cart:
	Route::get('/delete_item/{rowId}','AjaxController@remove_item')->name('frontend.ajax.removeitem');
	//Thêm vào giỏ hàng:
	Route::get('/add_to_cart/{id}','AjaxController@add_to_cart')->name('frontend.ajax.addtocart');
});


Route::group([
	'prefix'=>'admin',
	'namespace'=>'Backend',
	'middleware'=>'auth',
],function(){
	//Trang dashboard - trang chủ admin
	Route::get('/dashboard','DashboardController@index')->name('backend.dashboard');
	
	//Trang quản lý users:
	Route::group(['prefix'=>'users'],function(){
		Route::get('/','UserController@index')->name('backend.user.index');
		Route::get('create','UserController@create')->name('backend.user.create');
		Route::get('show/{id}','UserController@show')->name('backend.user.show');
		Route::post('store','UserController@store')->name('backend.user.store');
		Route::get('edit/{id}','UserController@edit')->name('backend.user.edit');
		Route::post('update/{id}','UserController@update')->name('backend.user.update');
		Route::get('destroy/{id}','UserController@destroy')->name('backend.user.destroy');
	});

	//Trang quản lý sản phẩm:
	Route::group(['prefix'=>'products'],function(){
		Route::get('/','ProductController@index')->name('backend.product.index');
		Route::get('show/{id}','ProductController@show')->name('backend.product.show');
		Route::get('create','ProductController@create')->name('backend.product.create');
		Route::post('store','ProductController@store')->name('backend.product.store');
		Route::get('edit/{id}','ProductController@edit')->name('backend.product.edit');
		Route::post('update/{id}','ProductController@update')->name('backend.product.update');
		Route::get('destroy/{id}','ProductController@destroy')->name('backend.product.destroy');
		
		//Xóa ảnh:
		Route::get('delete_image/{id}','AjaxController@delete_image')->name('frontend.product.deleteimage');

		//Test:
		Route::get('testsubmit','ProductController@showtest')->name('test.showtest');
		Route::post('test','ProductController@test')->name('test.submit');

		//Quản lý kho:
		Route::get('warehouse','ProductController@warehouse')->name('backend.product.warehouse');

	});
	//Trang quản lý danh mục:
	Route::group(['prefix'=>'categories'],function(){
		Route::get('/','CategoryController@index')->name('backend.category.index');
		Route::get('create','CategoryController@create')->name('backend.category.create');
		Route::get('show/{id}','CategoryController@show')->name('backend.category.show');
		Route::post('store','CategoryController@store')->name('backend.category.store');
		Route::get('edit/{id}','CategoryController@edit')->name('backend.category.edit');
		Route::post('update/{id}','CategoryController@update')->name('backend.category.update');
		Route::get('destroy/{id}','CategoryController@destroy')->name('backend.category.destroy');
	});
	
	//Quản lý bài viết:
	Route::group(['prefix'=>'posts'],function(){
		Route::get('/','PostController@index')->name('backend.post.index');
		Route::get('create','PostController@create')->name('backend.post.create');
		Route::post('store','PostController@store')->name('backend.post.store');
		Route::get('browselist','PostController@browse_list')->name('backend.post.browse');
		Route::get('browsepost/{id}','PostController@browse_post')->name('backend.post.browsepost');
		Route::get('edit/{id}','PostController@edit')->name('backend.post.edit');
		Route::post('update/{id}','PostController@update')->name('backend.post.update');
		Route::get('show/{id}','PostController@show')->name('backend.post.show');
		Route::get('destroy/{id}','PostController@destroy')->name('backend.post.destroy');
	});

	//Quản lý đơn hàng:
	Route::group(['prefix'=>'orders'],function(){
		Route::get('/','OrderController@index')->name('backend.order.index');
		Route::get('processing/{id}','OrderController@processing')->name('backend.order.processing');
		Route::get('delivered/{id}','OrderController@delivered')->name('backend.order.delivered');
		Route::get('return/{id}','OrderController@to_return')->name('backend.order.toreturn');
		Route::get('detail_order/{id}','OrderController@show')->name('backend.order.show');

	});

	
});

//Đăng ký & đăng nhập:
Auth::routes();
Route::get('/loginform','Auth\LoginController@showLoginForm')->name('login.form');

Route::get('/home', 'HomeController@index')->name('home');
