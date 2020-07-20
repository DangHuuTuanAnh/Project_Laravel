@extends('frontend.layouts1.master')
@section('title')
SELPHY SHOP
@endsection

@section('content')
<!-- header-mid-area-start -->
<body>
	<div class="product-layout-area">
		<div class="container">
			<div>
				<img src="https://cdn.cellphones.com.vn/media/wysiwyg/1200x75---HomePageGIF02.gif">
			</div>
			<br>
			<div class="row">
				<div class="col-lg-9">
					<!-- Product Layout Left -->
					<div class="product-layout-left">
						<!-- Main Slider Area -->
						<div class="main-slider-area another-home">
							<div class="row">
								<div class="col-md-12">
									<!-- Main Slider -->
									<div class="main-slider">
										<div class="slider">
											<div id="mainSlider" class="nivoSlider slider-image">
												<a href="#"><img src="https://cdn.cellphones.com.vn/media/ltsoft/promotion/1600x600-01.png" alt="main slider"></a>
												<a href="#"><img src="https://cdn.cellphones.com.vn/media/ltsoft/promotion/galaxy_note_10_1.7.2-.png" alt="main slider"></a>
												<a href="#"><img src="https://cdn.cellphones.com.vn/media/ltsoft/promotion/redmi_note_9s_29.6.jpg" alt="main slider"></a>
												<a href="#"><img src="https://cdn.cellphones.com.vn/media/ltsoft/promotion/airpod_2_1.7.20.png" alt="main slider"></a>
											</div>
										</div>
									</div><!-- End Main Slider -->
								</div>
								<div class="col-md-12">
									<!-- Top Banner Area -->
									<div class="top-banner-area">
										<div class="row">
											<div class="col-md-4 col-sm-4">
												<!-- Single Banner -->
												<div class="single-banner">
													<a href="#"><img src="{{URL::asset('frontend1/img/banner/banner1.png')}}" alt="banner"></a>
												</div>
											</div>
											<div class="col-md-4 col-sm-4">
												<!-- Single Banner -->
												<div class="single-banner">
													<a href="#"><img src="{{URL::asset('frontend1/img/banner/banner2.png')}}" alt="banner"></a>
												</div>
											</div>
											<div class="col-md-4 col-sm-4">
												<!-- Single Banner -->
												<div class="single-banner">
													<a href="#"><img src="{{URL::asset('frontend1/img/banner/banner3.png')}}" alt="banner"></a>
												</div>
											</div>
										</div>
									</div><!-- End Top Banner Area -->
								</div>
							</div>
						</div><!-- End Main Slider Area -->
						<!-- Single Product Area -->
						<div class="single-product-area">
							<div class="row">
								<div class="col-md-12">
									<!-- Single Product Tab -->
									<div class="single-product-tab custom-tab">
										<!-- Tabs Bar -->
										<ul class="nav nav-tabs" role="tablist">
											<li><a class="active" href="#bestseller" data-toggle="tab">Sản phẩm bán chạy</a></li>
											<li><a href="#most-viewed" data-toggle="tab">Sản phẩm được yêu thích</a></li>
											<li><a href="#random" data-toggle="tab">Một số sản phẩm</a></li>
										</ul><!-- End Tabs Bar -->
										<!-- Tab Content-->
										<div class="tab-content">
											<!-- Tab Pane-->
											<div class="tab-pane active" id="bestseller">
												<!-- Bestsell Carousel -->
												
												<div id="bestsell-carousel-2" class="owl-carousel custom-carousel">
													<!-- Single Product -->
													@foreach($products as $product)
													<div class="singel-product single-product-col">
														
														@if($product->discount_percent != 0)
														<div class="label-pro-sale" style="border-radius: 8px;
														height: auto;">Giảm {{$product->discount_percent}} %</div>
														@else
														<div class="label-pro-new">Mới</div>
														@endif
														<!-- Single Product Image -->
														<div class="single-product-img">
															@foreach($thumbnails as $thumbnail)
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
																<p><span>{{number_format($product->origin_price)}} đ</span>{{number_format($product->sale_price)}} đ</p>
															</div>
															<!-- Single Product Actions -->
															<div class="product-actions">
																{{-- <a href="{{route('frontend.cart.addtocarttest',$product->id)}}"><button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart">&nbsp;</i><span>Mua ngay</span></button></a> --}}
																<div class="add-to-link">
																	<ul class="">
																		<li class="quic-view">
																			{{-- <a href="{{route('frontend.cart.addtocarttest',$product->id)}}">Mua Ngay</a> --}}
																			<a href="javascript:void(0)" id="add_to_cart" value="{{$product->id}}">Mua Ngay</a>

																		</li>
																		<li class="wishlist"><a href="#"><i class="fa fa-heart"></i></a></li>
																		<li class="refresh"><a href="#"><i class="fa fa-refresh"></i></a></li>
																	</ul>
																</div>
															</div><!-- End Single Product Actions -->
														</div><!-- End Single Product Content -->
													</div>
													@endforeach<!-- End Single Product -->
													
												</div>
												<!-- Bestsell Carousel -->
											</div><!-- End Tab Pane-->
											<!-- Tab Pane-->
											<div class="tab-pane" id="most-viewed">
												<!-- Most Viewed Carousel -->
												<div id="most-viewed-carousel-2" class="owl-carousel custom-carousel">
													<!-- Single Product -->
													@foreach($products as $product)
													<div class="singel-product single-product-col">
														@if($product->discount_percent != 0)
														<div class="label-pro-sale" style="border-radius: 8px;
														height: auto;">Giảm {{$product->discount_percent}} %</div>
														@else
														<div class="label-pro-new">Mới</div>
														@endif
														<!-- Single Product Image -->
														<div class="single-product-img">
															@foreach($thumbnails as $thumbnail)
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
																<p><span>{{number_format($product->origin_price)}} đ</span>{{number_format($product->sale_price)}} đ</p>
															</div>
															<!-- Single Product Actions -->
															<div class="product-actions">
																{{-- <a href="{{route('frontend.cart.addtocarttest',$product->id)}}"><button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart">&nbsp;</i><span>Mua ngay</span></button></a> --}}
																<div class="add-to-link">
																	<ul class="">
																		<li class="quic-view">
																			{{-- <a href="{{route('frontend.cart.addtocarttest',$product->id)}}">Mua Ngay</a> --}}
																			<a href="javascript:void(0)" id="add_to_cart" value="{{$product->id}}">Mua Ngay</a>
																		</li>
																		<li class="wishlist"><a href="#"><i class="fa fa-heart"></i></a></li>
																		<li class="refresh"><a href="#"><i class="fa fa-refresh"></i></a></li>
																	</ul>
																</div>
															</div><!-- End Single Product Actions -->
														</div><!-- End Single Product Content -->
													</div>
													@endforeach<!-- End Single Product -->
												</div><!-- Most Viewed Carousel -->
											</div><!-- End Tab Pane-->
											<!-- Tab Pane-->
											<div class="tab-pane" id="random">
												<!-- Random Carousel -->
												<div id="random-carousel-2" class="owl-carousel custom-carousel">
													<!-- Single Product -->
													@foreach($products as $product)
													<div class="singel-product single-product-col">
														@if($product->discount_percent != 0)
														<div class="label-pro-sale" style="border-radius: 8px;
														height: auto;">Giảm {{$product->discount_percent}} %</div>
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
																<p><span>{{number_format($product->origin_price)}} đ</span>{{number_format($product->sale_price)}} đ</p>
															</div>
															<!-- Single Product Actions -->
															<div class="product-actions">
																{{-- <a href="{{route('frontend.cart.addtocarttest',$product->id)}}"><button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart">&nbsp;</i><span>Mua ngay</span></button></a> --}}
																<div class="add-to-link">
																	<ul class="">
																		<li class="quic-view">
																			{{-- <a href="{{route('frontend.cart.addtocarttest',$product->id)}}">Mua Ngay</a> --}}
																			<a href="javascript:void(0)" id="add_to_cart" value="{{$product->id}}">Mua Ngay</a>

																		</li>
																		<li class="wishlist"><a href="#"><i class="fa fa-heart"></i></a></li>
																		<li class="refresh"><a href="#"><i class="fa fa-refresh"></i></a></li>
																	</ul>
																</div>
															</div><!-- End Single Product Actions -->
														</div><!-- End Single Product Content -->
													</div>
													@endforeach<!-- End Single Product -->
												</div><!-- Random Carousel -->
											</div><!-- End Tab Pane-->
										</div><!-- End Tab Content-->
									</div><!-- End Single Product Tab -->
								</div>
							</div>
						</div><!-- End Single Product Area -->
						<!-- Product Area -->
						<div class="product-area">
							<div class="row">
								<div class="col-md-12">
									<!-- Product View Area -->
									<div class="product-view-area fix">
										<!-- Single Product Category -->
										<div class="single-product-category">
											<!-- Product Category Title-->
											<div class="head-title">
												<p><a href="shop.html">Phụ Kiện</a></p>
											</div>
											<!-- Product View -->
											<div class="product-view">
												<!-- Product View Carousel -->
												<div id="laptop-carousel" class="owl-carousel custom-carousel">
													<!-- Single Product -->
													@foreach($products as $product)
													<div class="singel-product single-product-col">
														@if($product->discount_percent != 0)
														<div class="label-pro-sale" style="border-radius: 8px;
														height: auto;">Giảm {{$product->discount_percent}} %</div>
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
																<p><span>{{number_format($product->origin_price)}} đ</span>{{number_format($product->sale_price)}}</p>
															</div>
															<!-- Single Product Actions -->
															<div class="product-actions">
																<div class="add-to-link">
																	<ul class="">
																		<li class="quic-view">
																			{{-- <a href="{{route('frontend.cart.addtocarttest',$product->id)}}">Mua Ngay</a> --}}
																			<a href="javascript:void(0)" id="add_to_cart" value="{{$product->id}}">Mua Ngay</a>
																		</li>
																		<li class="wishlist"><a href="#"><i class="fa fa-heart"></i></a></li>
																		<li class="refresh"><a href="#"><i class="fa fa-refresh"></i></a></li>
																	</ul>
																</div>
															</div><!-- End Single Product Actions -->
														</div><!-- End Single Product Content -->
													</div>
													@endforeach<!-- End Single Product -->

												</div><!-- End Product View Carousel -->
											</div><!-- End Product View-->
											<!-- Product Banner-->
											<div class="product-banner">
												<div class="row">
													<div class="col-md-8 col-sm-8">
														<div class="single-banner first">
															<a href="#"><img src="{{URL::asset('frontend1/img/banner/banner4.png')}}" alt="banner"></a>
														</div>
													</div>
													<div class="col-md-4 col-sm-4">
														<div class="single-banner">
															<a href="#"><img src="{{URL::asset('frontend1/img/banner/banner5.png')}}" alt="banner"></a>
														</div>
													</div>
												</div>
											</div><!-- End Product Banner-->
										</div><!-- End Single Product Category -->
										<!-- Single Product Category -->
										<div class="single-product-category">
											<!-- Product Category Title-->
											<div class="head-title">
												<p><a href="shop.html">Máy tính bảng</a></p>
											</div>
											<!-- Product View -->
											<div class="product-view">
												<!-- Product View Carousel -->
												<div id="tablet-carousel" class="owl-carousel custom-carousel">
													<!-- Single Product -->
													@foreach($products as $product)
													<div class="singel-product single-product-col">
														@if($product->discount_percent != 0)
														<div class="label-pro-sale" style="border-radius: 8px;
														height: auto;">Giảm {{$product->discount_percent}} %</div>
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
																<p><span>{{number_format($product->origin_price)}} đ</span>{{number_format($product->sale_price)}} đ</p>
															</div>
															<!-- Single Product Actions -->
															<div class="product-actions">
															</button>
															<div class="add-to-link">
																<ul class="">
																	<li class="quic-view">
																		{{-- <a href="{{route('frontend.cart.addtocarttest',$product->id)}}">Mua Ngay</a> --}}
																		<a href="javascript:void(0)" id="add_to_cart" value="{{$product->id}}">Mua Ngay</a>
																	</li>
																	<li class="wishlist"><a href="#"><i class="fa fa-heart"></i></a></li>
																	<li class="refresh"><a href="#"><i class="fa fa-refresh"></i></a></li>
																</ul>
															</div>
														</div><!-- End Single Product Actions -->
													</div><!-- End Single Product Content -->
												</div>
												@endforeach<!-- End Single Product -->

											</div><!-- End Product View Carousel -->
										</div><!-- End Product View-->
										<!-- Product Banner-->
										<div class="product-banner">
											<div class="row">
												<div class="col-md-4 col-sm-4">
													<div class="single-banner first">
														<a href="#"><img src="{{URL::asset('frontend1/img/banner/banner7.png')}}" alt="banner"></a>
													</div>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="single-banner">
														<a href="#"><img src="{{URL::asset('frontend1/img/banner/banner6.png')}}" alt="banner"></a>
													</div>
												</div>
											</div>
										</div><!-- End Product Banner-->
									</div><!-- End Single Product Category -->
								</div><!-- End Product View Area -->
							</div>
						</div>
					</div><!-- End Product Area -->
				</div><!-- End Product Layout Left -->
			</div>
			<div class="col-lg-3">
				<!-- Product Layout Right -->
				<div class="product-layout-right">
					<!-- Timer product -->
					<div style="border: 2px solid #dc3545;" class="timer-product">
						<div class="timer-product-title">
							<h2 style="background: #dc3545 none repeat scroll 0 0;
							color: #fff;"><i>Hot Sales</i></h2>
						</div>
						<!-- Timer product Carousel-->
						<div id="timer-product-carousel" class="owl-carousel custom-carousel">
							@foreach($products_discount as $pr_discount)	
							<!-- Single Product -->

							<div class="singel-product single-product-col">
								<!-- Single Product Image -->
								<div class="single-product-img">
									@foreach($thumbnails as $thumbnail)
									@if($thumbnail->product_id == $pr_discount->id)
									<a href="#"><img src="{{$thumbnail->path}}" alt="product"></a>
									@endif
									@endforeach
								</div>
								<!-- Countdown -->
								<div style="color: #ff560b; border-top: 1px solid #ff560b; border-bottom:1px solid #ff560b;" class="counterdown">
									<div class="counter">
										<div class="timer">
											<div data-countdown="{{$pr_discount->date_discount}}"></div>
										</div>
									</div>
								</div><!-- End Countdown -->
								<!-- Single Product Content -->
								<div class="single-product-content">
									<h2 class="product-name"><a title="Proin lectus ipsum" href="{{route('frontend.home.productdetail',$pr_discount->id)}}">{{$pr_discount->name}}</a></h2>
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
										<p><span>{{number_format($pr_discount->origin_price)}} đ</span>{{number_format($pr_discount->sale_price)}} đ</p>
									</div>
									<!-- Single Product Actions -->
									<div class="product-actions">

										<div class="add-to-link">
											<ul class="">
												<li class="quic-view">
													{{-- <a href="{{route('frontend.cart.addtocarttest',$pr_discount->id)}}">Mua Ngay</a> --}}
													<a href="javascript:void(0)" id="add_to_cart" value="{{$pr_discount->id}}">Mua Ngay</a>

												</li>
												<li class="wishlist"><a href="#"><i class="fa fa-heart"></i></a></li>
												<li class="refresh"><a href="#"><i class="fa fa-refresh"></i></a></li>
											</ul>
										</div>
									</div><!-- End Single Product Actions -->
								</div><!-- End Single Product Content -->
							</div>
							@endforeach<!-- End Single Product -->

						</div><!-- End Timer product Carousel-->
					</div><!-- End Timer product -->
					<!-- Featured Product Area -->
					<div class="featured-product-area">
						<div class="featured-product-title">
							<h2>Sản phẩm nổi bật</h2>
						</div>
						<!-- Featured Products -->
						@foreach($products_featured as $product_feature)
						<div class="featured-products">
							<div class="featured-product-category">
								<div class="featured-product-img">
									@foreach($thumbnails as $thumbnail)
									@if($thumbnail->product_id == $product_feature->id)
									<img style="margin-top: 15px;" src="{{$thumbnail->path}}" alt="product">
									@endif
									@endforeach
								</div>
								<div class="featured-product-content">
									<h2 class="product-name">
										<a href="{{route('frontend.home.productdetail',$product_feature->id)}}" title="Proin lectus ipsum">{{$product_feature->name}}</a>
									</h2>
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
										<p>{{number_format($product_feature->sale_price)}}</p>
									</div>
								</div>
							</div>
						</div>
						@endforeach<!-- End Featured Products -->

						<!-- Blog Post Area -->
						<div class="blog-post-area">
							<div class="head-title">
								<p>Bài viết nổi bật</p>
							</div>
							<div id="blog-post-carousel" class="owl-carousel custom-carousel-2">
								<!-- Single Blog Post -->
								@foreach($posts as $post)
								<div class="single-blog-post">
									<div class="blog-post-img">
										<a href="#"><img src="{{$post->thumbnail}}" alt="blog"></a>
									</div>
									<!-- Single Blog Post Content -->
									<div class="single-blog-post-content">
										<h2><a href="#">{{$post->name}}</a></h2>
										<div class="date-time">
											<div class="time-blog">
												<i class="fa fa-calendar-o">&nbsp;</i> 01 Jan 1970 <span>/</span>
											</div>
											<div class="time-comment">
												<span><i class="fa fa-comments-o"></i>0 Bình luận</span>
											</div>
										</div>
										<p>{{$post->description}}</p>
										<a href="{{route('frontend.home.blogdetail',$post->id)}}" class="readmore">Xem chi tiết</a>
									</div><!-- End Single Blog Post Content -->
								</div>
								@endforeach<!-- End Single Blog Post -->
								
							</div>
						</div><!-- End Blog Post Area -->
						<!-- Our Services -->
						<div class="our-services">
							<!-- Our Services Content -->
							<div class="our-services-content">
								<!-- Single Services -->
								<div class="single-services">
									<div class="single-services-icon">
										<i class="fa fa-truck"></i>
									</div>
									<div class="single-services-content">
										<h2>Free Ship</h2>
										<p>Giao hàng miễn phí cho tất cả đơn hàng trên 1.000.000 đ</p>
									</div>
								</div><!-- End Single Services -->
								<!-- Single Services -->
								<div class="single-services">
									<div class="single-services-icon">
										<i class="fa fa-tags"></i>
									</div>
									<div class="single-services-content">
										<h2>Sales & discounts</h2>
										<p>Worldwide delivery on all orders over $100</p>
									</div>
								</div><!-- End Single Services -->
								<!-- Single Services -->
								<div class="single-services">
									<div class="single-services-icon">
										<i class="fa fa-thumbs-o-up"></i>
									</div>
									<div class="single-services-content">
										<h2>Buy online</h2>
										<p>Worldwide delivery on all orders over $100</p>
									</div>
								</div><!-- End Single Services -->
								<!-- Single Services -->
								<div class="single-services">
									<div class="single-services-icon">
										<i class="fa fa fa-check"></i>
									</div>
									<div class="single-services-content">
										<h2>Quality assurance</h2>
										<p>Worldwide delivery on all orders over $100</p>
									</div>
								</div><!-- End Single Services -->
							</div><!-- End Our Services Content -->
						</div><!-- End Our Services -->
					</div><!-- End Product Layout Right -->
				</div>
			</div>
		</div>
	</div><!-- End Product Layout Area -->
	<!-- Services Group -->
	<div class="services-group">
		<div class="container">
			<div class="row">
				<div class="col-md-4">

				</div>
				<div class="col-md-4">

				</div>
				<div class="col-md-4">

				</div>
			</div>
		</div>
	</div><!-- End Services Group -->
	
</body>
@endsection
