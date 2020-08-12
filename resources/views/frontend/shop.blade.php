@extends('frontend.layouts1.master')
@section('title')
SHOP PAGE
@endsection
<style type="text/css">
.shop-layout .active{
	color: #0091D5!important;
}
</style>

@section('content')
<body>
	
	<!-- Shop Product Area -->
	<div class="shop-product-area">
		<div class="breadcurb-area">
			<div class="container">
				<ul class="breadcrumb">
					<li class="home"><a href="#">Home/</a></li>
					<li>Sản phẩm</li>
				</ul>
				<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="row">
								<img src="https://cdn.cellphones.com.vn/media/ltsoft/promotioncategory/S10_PLUS_13.6.jpg" class="col-6 d-block w-50" alt="...">
								<img src="https://cdn.cellphones.com.vn/media/ltsoft/promotioncategory/poco_f2_pro_12.6_cat.png" class="col-6 d-block w-50" alt="...">
							</div>

						</div>
						<div class="carousel-item">
							<div class="row">
								<img src="https://cdn.cellphones.com.vn/media/ltsoft/promotioncategory/iphone_8plus_16.6.png" class="col-6 d-block w-50" alt="...">
								<img src="https://cdn.cellphones.com.vn/media/ltsoft/promotioncategory/Cate_Duoi2trieu_1903.jpg" class="col-6 d-block w-50" alt="...">
							</div>

						</div>
						<div class="carousel-item">
							<div class="row">
								<img src="https://cdn.cellphones.com.vn/media/ltsoft/promotioncategory/nokia_800_touggh_20.4.png" class="col-6 d-block w-50" alt="...">
								<img src="https://cdn.cellphones.com.vn/media/ltsoft/promotioncategory/11_pro_max_26.5.jpg" class="col-6 d-block w-50" alt="...">
							</div>

						</div>
					</div>
				</div>
				<br>
			</div>

		</div><!-- End Breadcurb Area -->

		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-12">
					<!-- Left Sidebar-->
					<div class="left-sidebar">
						<div class="left-sidebar-title">
							<h2>Shop By</h2>
						</div>
						<!-- Shop Layout -->
						<div class="shop-layout">
							<div class="layout-title">
								<h2>Khoảng giá</h2>
							</div>
							<div class="layout-list">
								<ul>
									
									<li><a class="{{Request::get('price')=='1' ? 'active':''}} " href="{{request()->fullUrlWithQuery(['price' => '1'])}}">Dưới 1 triệu</a></li>
									<li><a class="{{Request::get('price')=='1-5'? 'active':''}}" href="{{request()->fullUrlWithQuery(['price' => '1-5'])}}">Từ 1 - 5 triệu</a></li>
									<li><a class="{{Request::get('price')=='5-10'? 'active':''}}" href="{{request()->fullUrlWithQuery(['price' => '5-10'])}}">Từ 5 - 10 triệu</a></li>
									<li><a class="{{Request::get('price')=='10-15'? 'active':''}}" href="{{request()->fullUrlWithQuery(['price' => '10-15'])}}">Từ 10 - 15 triệu</a></li>
									<li><a class="{{Request::get('price')=='15-20'? 'active':''}}" href="{{request()->fullUrlWithQuery(['price' => '15-20'])}}">Từ 15 - 20 triệu</a></li>
									<li><a class="{{Request::get('price')==20? 'active':''}}" href="{{request()->fullUrlWithQuery(['price' => '20'])}}">Trên 20 triệu</a></li>
								</ul>
							</div>
						</div><!-- End Shop Layout Area -->
						<!-- Shop Layout -->
						<div class="shop-layout">
							<div class="layout-title">
								<h2>Màn hình</h2>
							</div>
							<div class="layout-list">
								<ul>
									<li><a href="#">6.43 inches</a></li>
									<li><a href="#">< 5 inches</a></li>
									<li><a href="#">Từ 5 đến 5.5 inches</a></li>
									<li><a href="#">Từ 5.5 đến 6 inches</a></li>
									<li><a href="#">>= 6 inches</a></li>
									<li><a href="#">7.9 inches</a></li>
								</ul>
							</div>
						</div><!-- End Shop Layout Area -->
						<!-- Shop Layout -->
						<div class="shop-layout">
							<div class="layout-title">
								<h2>Bộ nhớ trong</h2>
							</div>
							<div class="layout-list">
								<ul>
									<li><a href="#">4 MB</a></li>
									<li><a href="#">24 MB</a></li>
									<li><a href="#">32 MB</a></li>
									<li><a href="#">64 MB</a></li>
									<li><a href="#">4 GB</a></li>
									<li><a href="#">8 GB</a></li>
									<li><a href="#">64 MB</a></li>
								</ul>
							</div>
						</div><!-- End Shop Layout Area -->
						

						<!-- Shop Layout Banner -->
						<div class="shop-layout-banner single-banner">
							<a href="#">
								<img alt="banner" src="https://cdn.cellphones.com.vn/media/ltsoft/promotion/s20_series_right_banner_16.7.png">
							</a>
						</div><!-- End Shop Layout Banner -->
						<!-- Popular Tag Area -->
						<div class="popular-tag-area">
							<div class="tag-title">
								<h2>Danh mục sản phẩm</h2>
							</div>
							<!-- Shop Layout -->
							<div class="shop-layout">
								<div class="popular-tag">
									<div class="tag-list">
										<ul>
											<li><a href="#">Clothing</a></li>
											<li><a href="#">accessories</a></li>
											<li><a href="#">fashion</a></li>
											<li><a href="#">footwear</a></li>
											<li><a href="#">good</a></li>
											<li><a href="#">kid</a></li>
											<li><a href="#">Men</a></li>
											<li><a href="#">Women</a></li>
										</ul>
									</div>
									<div class="tag-action">
										<ul>
											<li><a href="#">View all tags</a></li>
										</ul>
									</div>
								</div>
							</div><!-- End Shop Layout -->
						</div><!-- End Popular Tag Area -->
					</div><!-- End Left Sidebar -->
				</div>
				<div class="col-lg-9 col-md-12">
					<!-- Shop Product View -->
					<div class="shop-product-view">
						<!-- Shop Category Image -->
						<div class="shop-category-image">
							<div class="row">
								<img class="col-6" src="https://cdn.cellphones.com.vn/media/ltsoft/promotion/ip_11_right.jpg" alt="banner">
								<img class="col-6" src="https://cdn.cellphones.com.vn/media/ltsoft/promotion/laptop_hp_right_banner_20.6.jpg" alt="banner">
							</div>

						</div>
						<!-- Shop Product Tab Area -->
						<div class="product-tab-area">
							<!-- Tab Bar -->
							<div class="tab-bar">
								<div class="tab-bar-inner">
									<ul class="nav nav-tabs" role="tablist">
										<li><a class="active" href="#shop-product" data-toggle="tab"><i class="fa fa-th-large"></i></a></li>
										<li><a href="#shop-list" data-toggle="tab"><i class="fa fa-th-list"></i></a></li>
									</ul>
								</div>
								<div class="toolbar">
									
									<div class="sorter">
										<form id="form_order" method="get">
											<div class="sort-by">
												<label>Sắp xếp</label>
												<select name="orderby" class="orderby">
													<option value="position">Mặc định</option>
													<option value="desc">Mới nhất</option>
													<option value="asc">Sản phẩm cũ</option>
													<option value="price_max">Giá tăng dần</option>
													<option value="price_min">Giá giảm dần</option>
												</select>
												
												<a href="#"><i class="fa fa-long-arrow-up"></i></a>
											</div>
										</form>
									</div>
									
								</div>
							</div><!-- End Tab Bar -->
							<!-- Tab Content -->
							<div class="tab-content">
								<p id="id_me"></p>
								<!-- Shop Product-->
								{{-- <div class="tab-pane active" id="shop-product"> --}}
									<!-- Tab Single Product-->

									<div id="filter" class="tab-single-product">
										<!-- Single Product -->
										@foreach($products as $product)
										<div class="singel-product single-product-col" style="border: 1px solid #e5e5e5;">
											@if($product->discount_percent != 0)
											<div class="label-pro-sale" style="border-radius: 8px;
											height: auto;width: 75px;">Giảm {{$product->discount_percent}} %</div>
											@else
											<div class="label-pro-new">Mới</div>
											@endif
											<!-- Single Product Image -->
											<div class="single-product-img">
												
												@foreach($thumbnails as $thumbnail )
												@if($thumbnail->product_id == $product->id)
												<a href="#"><img src="{{$thumbnail->path}}" alt="product"></a>
												@endif
												@endforeach
											</div>
											<!-- Single Product Content -->
											<div class="single-product-content">
												<h2 class="product-name"><a title="Proin lectus ipsum" href="{{route('frontend.home.productdetail',$product->id)}}">{{$product->name}}</a></h2>
												<div class="ratings">
													<div class="rating-box">  
														<div class="rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>  
													</div>
												</div>
												<div class="product-price">
													@if($product->origin_price == $product->sale_price)
													<p>{{number_format($product->sale_price)}} đ</p>
													@else
													<p><span>{{number_format($product->origin_price)}} đ</span>{{number_format($product->sale_price)}} đ</p>
													@endif
												</div>
												<!-- Single Product Actions -->
												<div class="product-actions">
													{{-- <a href="{{route('frontend.home.addtocart',$product->id)}}"><button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button></a> --}}
													{{-- Test cart --}}
													{{-- <a href="{{route('frontend.cart.addtocarttest',$product->id)}}"><button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart">&nbsp;</i><span>Mua ngay</span></button></a> --}}
													<div class="add-to-link">
														<ul class="">
															<li class="quic-view ">
																{{-- <a href="{{route('frontend.cart.addtocarttest',$product->id)}}">Mua Ngay</a> --}}
																<a href="javascript:void(0)" id="add_to_cart" value="{{$product->id}}">Mua Ngay</a>
																
															</li>	
															<li class="wishlist"><a href="#"><i class="fa fa-heart"></i></a></li>
															<li class="refresh"><a href="#"><i class="fa fa-refresh"></i></a></li>
														</ul>
													</div>
												</div><!-- End Single Product Actions -->
											</div><!-- End Single Product Content -->
										</div><!-- End Single Product -->
										@endforeach
									</div><!-- End Tab Single Product-->
									
								{{-- </div> --}}
								<!-- End Shop Product-->
								<!-- Shop List -->
								<div class="tab-pane" id="shop-list">
									<!-- Single Shop -->
									@foreach($products as $product)
									<div class="single-shop single-product">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-5">
												<div class="single-product-img">
													@foreach($thumbnails as $thumbnail )
													@if($thumbnail->product_id == $product->id)
													<a href="#"><img src="{{$thumbnail->path}}" alt="product"></a>
													@endif
													@endforeach
													<div class="add-to-link">
														<ul class="">
															<li class="quic-view"><button data-toggle="modal" data-target="#productModal" type="button"><i class="fa fa-search"></i>Quick view</button></li>
															<li class="wishlist"><a href="#"><i class="fa fa-heart"></i></a></li>
															<li class="refresh"><a href="#"><i class="fa fa-refresh"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="col-lg-8 col-md-8 col-sm-7">
												<div class="single-product-content">
													<h2 class="product-name"><a href="{{route('frontend.home.productdetail',$product->id)}}" title="Proin lectus ipsum">{{$product->name}}</a></h2>
													<div class="ratings">
														<div class="rating-box">  
															<div class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>  
														</div>
													</div>
													<div class="product-price">
														<p>{{number_format($product->sale_price)}}</p>
													</div>
													<div class="single-shop-details">
														<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva </p>
													</div>
													<!-- Single Product Actions -->
													<div class="product-actions">
														<button type="button" title="Add to Cart" class="button btn-cart"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button>
													</div><!-- End Single Product Actions -->
												</div>
											</div>
										</div>
									</div>
									@endforeach<!-- End Single Shop -->
									{{-- <!-- Single Shop -->
									<div class="single-shop single-product">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-5">
												<div class="single-product-img">
													<a href="#"><img src="{{URL::asset('frontend1/img/products/s2.jpg')}}" alt="product"></a>
													<div class="add-to-link">
														<ul class="">
															<li class="quic-view"><button data-toggle="modal" data-target="#productModal" type="button"><i class="fa fa-search"></i>Quick view</button></li>
															<li class="wishlist"><a href="#"><i class="fa fa-heart"></i></a></li>
															<li class="refresh"><a href="#"><i class="fa fa-refresh"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="col-lg-8 col-md-8 col-sm-7">
												<div class="single-product-content">
													<h2 class="product-name"><a href="product-details.html" title="Proin lectus ipsum">Aliquam consequat</a></h2>
													<div class="ratings">
														<div class="rating-box">  
															<div class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>  
														</div>
													</div>
													<div class="product-price">
														<p><span>$300.00</span>$155.00</p>
													</div>
													<div class="single-shop-details">
														<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva </p>
													</div>
													<!-- Single Product Actions -->
													<div class="product-actions">
														<button type="button" title="Add to Cart" class="button btn-cart"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button>
													</div><!-- End Single Product Actions -->
												</div>
											</div>
										</div>
									</div><!-- End Single Shop -->
									<!-- Single Shop -->
									<div class="single-shop single-product">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-5">
												<div class="single-product-img">
													<a href="#"><img src="{{URL::asset('frontend1/img/products/s3.jpg')}}" alt="product"></a>
													<div class="add-to-link">
														<ul class="">
															<li class="quic-view"><button data-toggle="modal" data-target="#productModal" type="button"><i class="fa fa-search"></i>Quick view</button></li>
															<li class="wishlist"><a href="#"><i class="fa fa-heart"></i></a></li>
															<li class="refresh"><a href="#"><i class="fa fa-refresh"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="col-lg-8 col-md-8 col-sm-7">
												<div class="single-product-content">
													<h2 class="product-name"><a href="product-details.html" title="Proin lectus ipsum">Fusce aliquam</a></h2>
													<div class="ratings">
														<div class="rating-box">  
															<div class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>  
														</div>
													</div>
													<div class="product-price">
														<p><span>$245.00</span>$199.00</p>
													</div>
													<div class="single-shop-details">
														<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva </p>
													</div>
													<!-- Single Product Actions -->
													<div class="product-actions">
														<button type="button" title="Add to Cart" class="button btn-cart"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button>
													</div><!-- End Single Product Actions -->
												</div>
											</div>
										</div>
									</div>End Single Shop
									<!-- Single Shop -->
									<div class="single-shop single-product">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-5">
												<div class="single-product-img">
													<a href="#"><img src="{{URL::asset('frontend1/img/products/s4.jpg')}}" alt="product"></a>
													<div class="add-to-link">
														<ul class="">
															<li class="quic-view"><button data-toggle="modal" data-target="#productModal" type="button"><i class="fa fa-search"></i>Quick view</button></li>
															<li class="wishlist"><a href="#"><i class="fa fa-heart"></i></a></li>
															<li class="refresh"><a href="#"><i class="fa fa-refresh"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="col-lg-8 col-md-8 col-sm-7">
												<div class="single-product-content">
													<h2 class="product-name"><a href="product-details.html" title="Proin lectus ipsum">Pellentesque habitant </a></h2>
													<div class="ratings">
														<div class="rating-box">  
															<div class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>  
														</div>
													</div>
													<div class="product-price">
														<p>$99.00</p>
													</div>
													<div class="single-shop-details">
														<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva </p>
													</div>
													<!-- Single Product Actions -->
													<div class="product-actions">
														<button type="button" title="Add to Cart" class="button btn-cart"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button>
													</div><!-- End Single Product Actions -->
												</div>
											</div>
										</div>
									</div><!-- End Single Shop -->
									<!-- Single Shop -->
									<div class="single-shop single-product">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-5">
												<div class="single-product-img">
													<a href="#"><img src="{{URL::asset('frontend1/img/products/s5.jpg')}}" alt="product"></a>
													<div class="add-to-link">
														<ul class="">
															<li class="quic-view"><button data-toggle="modal" data-target="#productModal" type="button"><i class="fa fa-search"></i>Quick view</button></li>
															<li class="wishlist"><a href="#"><i class="fa fa-heart"></i></a></li>
															<li class="refresh"><a href="#"><i class="fa fa-refresh"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="col-lg-8 col-md-8 col-sm-7">
												<div class="single-product-content">
													<h2 class="product-name"><a href="product-details.html" title="Proin lectus ipsum">Quisque in arcu</a></h2>
													<div class="ratings">
														<div class="rating-box">  
															<div class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>  
														</div>
													</div>
													<div class="product-price">
														<p>$234.00</p>
													</div>
													<div class="single-shop-details">
														<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva </p>
													</div>
													<!-- Single Product Actions -->
													<div class="product-actions">
														<button type="button" title="Add to Cart" class="button btn-cart"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button>
													</div><!-- End Single Product Actions -->
												</div>
											</div>
										</div>
									</div><!-- End Single Shop --> --}}
								</div><!-- End Shop List -->
							</div><!-- End Tab Content -->
							<!-- Tab Bar -->
							<div class="tab-bar tab-bar-bottom">
								<div class="toolbar">
									
									<div class="pages">
										<div class="row">
											<strong>Page:</strong>
											{{$products->links()}}
										</div>
									</div>
								</div>
							</div><!-- End Tab Bar -->
						</div><!-- End Shop Product Tab Area -->
					</div><!-- End Shop Product View -->
				</div>
			</div>
		</div>
	</div><!-- End Shop Product Area -->
	<!-- Brand Area -->
	
</body>

@endsection

