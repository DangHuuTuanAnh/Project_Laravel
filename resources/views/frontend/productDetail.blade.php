@extends('frontend.layouts1.master')
@section('title')
PRODUCT DETAIL
@endsection
@section('css')
<style type="text/css">
.list_text{
	display: inline-block;
	margin-left: 10px;
	position: relative;
	background: #52b858;
	color: #fff;
	padding: 2px 8px;
	box-sizing: border-box;
	font-size: 12px;
	border-radius: 2px;
	display: none;
}
.list_text:after{
	right: 100%;
	top: 50%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
	border-color: rgba(82,184,88,0);
	border-right-color: #52b858;
	border-width: 6px;
	margin-top: -6px;
}
.list_star .rating_active{
	color:#fd9727;
}
</style>
@endsection

@section('content')
<body>
	<!-- Breadcurb Area -->
	<div class="breadcurb-area">
		<div class="container">
			<ul class="breadcrumb">
				<li class="home"><a href="#">Home</a></li>
				{{-- <li class=""><a href="#">/Laptop</a></li> --}}
				<li>/{{$product->name}}</li>
			</ul>
		</div>
	</div><!-- End Breadcurb Area -->
	<div class="single-product-detaisl-area">
		<!-- Single Product View Area -->
		<div class="single-product-view-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<!-- Single Product View -->
						<div class="single-procuct-view">
							<!-- Simple Lence Gallery Container -->
							<div class="simpleLens-gallery-container" id="p-view">
								<div class="simpleLens-container tab-content">
									@foreach($images_limit as $img)
									<div class="tab-pane active" id="p-view-1">
										<div class="simpleLens-big-image-container">
											<a class="simpleLens-lens-image" data-lens-image="{{$img->path}}">
												<img src="{{$img->path}}" class="simpleLens-big-image" alt="productd">
											</a>
										</div>
									</div>
									@endforeach
									@foreach($images as $image)
									<div class="tab-pane" id="p-view-2">
										<div class="simpleLens-big-image-container">
											<a class="simpleLens-lens-image" data-lens-image="{{$image->path}}">
												<img src="{{$image->path}}" class="simpleLens-big-image" alt="productd">
											</a>
										</div>
									</div>
									@endforeach
									{{-- <div class="tab-pane" id="p-view-3">
										<div class="simpleLens-big-image-container">
											<a class="simpleLens-lens-image" data-lens-image="{{URL::asset('frontend1/img/products/single-product/large/3.jpg')}}">
												<img src="{{URL::asset('frontend1/img/products/single-product/medium/3.jpg')}}" class="simpleLens-big-image" alt="productd">
											</a>
										</div>
									</div>
									<div class="tab-pane" id="p-view-4">
										<div class="simpleLens-big-image-container">
											<a class="simpleLens-lens-image" data-lens-image="{{URL::asset('frontend1/img/products/single-product/large/4.jpg')}}">
												<img src="{{URL::asset('frontend1/img/products/single-product/medium/4.jpg')}}" class="simpleLens-big-image" alt="productd">
											</a>
										</div>
									</div>
									<div class="tab-pane" id="p-view-5">
										<div class="simpleLens-big-image-container">
											<a class="simpleLens-lens-image" data-lens-image="{{URL::asset('frontend1/img/products/single-product/large/1.jpg')}}">
												<img src="{{URL::asset('frontend1/img/products/single-product/medium/1.jpg')}}" class="simpleLens-big-image" alt="productd">
											</a>
										</div>
									</div>
									<div class="tab-pane" id="p-view-6">
										<div class="simpleLens-big-image-container">
											<a class="simpleLens-lens-image" data-lens-image="{{URL::asset('frontend1/img/products/single-product/large/2.jpg')}}">
												<img src="{{URL::asset('frontend1/img/products/single-product/medium/2.jpg')}}" class="simpleLens-big-image" alt="productd">
											</a>
										</div>
									</div>
									<div class="tab-pane" id="p-view-7">
										<div class="simpleLens-big-image-container">
											<a class="simpleLens-lens-image" data-lens-image="{{URL::asset('frontend1/img/products/single-product/large/3.jpg')}}">
												<img src="{{URL::asset('frontend1/img/products/single-product/medium/3.jpg')}}" class="simpleLens-big-image" alt="productd">
											</a>
										</div>
									</div>
									<div class="tab-pane" id="p-view-8">
										<div class="simpleLens-big-image-container">
											<a class="simpleLens-lens-image" data-lens-image="{{URL::asset('frontend1/img/products/single-product/large/4.jpg')}}">
												<img src="{{URL::asset('frontend1/img/products/single-product/medium/4.jpg')}}" class="simpleLens-big-image" alt="productd">
											</a>
										</div>
									</div> --}}
								</div>
								<!-- Simple Lence Thumbnail -->
								<div class="simpleLens-thumbnails-container">
									<div id="single-product" class="owl-carousel custom-carousel">
										<ul class="nav nav-tabs" role="tablist">
											<div class="row">
												@foreach($images as $image)
												<li class=""><a href="#p-view-2" role="tab" data-toggle="tab"><img style="width: 100px;" src="{{$image->path}}" alt="productd"></a></li>
												@endforeach
											</div>
											{{-- <li><a class="active" href="#p-view-1" role="tab" data-toggle="tab"><img src="{{URL::asset('frontend1/img/products/single-product/thumbnail/1.jpg')}}" alt="productd"></a></li> --}}
											
											{{-- <li class="last-li"><a href="#p-view-3" role="tab" data-toggle="tab"><img src="{{URL::asset('frontend1/img/products/single-product/thumbnail/3.jpg')}}" alt="productd"></a></li>
											<li class="d-none d-xl-block"><a href="#p-view-4" role="tab" data-toggle="tab"><img src="{{URL::asset('frontend1/img/products/single-product/thumbnail/4.jpg')}}" alt="productd"></a></li> --}}
										</ul>
										<ul class="nav nav-tabs" role="tablist">
											<div class="row">
												@foreach($images as $image)
												<li class=""><a href="#p-view-2" role="tab" data-toggle="tab"><img style="width: 100px;" src="{{$image->path}}" alt="productd"></a></li>
												@endforeach
											</div>
											{{-- <li class=""><a class="active" href="#p-view-5" role="tab" data-toggle="tab"><img src="{{URL::asset('frontend1/img/products/single-product/thumbnail/1.jpg')}}" alt="productd"></a></li>
											<li class=""><a href="#p-view-6" role="tab" data-toggle="tab"><img src="{{URL::asset('frontend1/img/products/single-product/thumbnail/2.jpg')}}" alt="productd"></a></li>
											<li class="last-li"><a href="#p-view-7" role="tab" data-toggle="tab"><img src="{{URL::asset('frontend1/img/products/single-product/thumbnail/3.jpg')}}" alt="productd"></a></li>
											<li class="d-none d-xl-block"><a href="#p-view-8" role="tab" data-toggle="tab"><img src="{{URL::asset('frontend1/img/products/single-product/thumbnail/4.jpg')}}" alt="productd"></a></li> --}}
										</ul>
									</div>
								</div><!-- End Simple Lence Thumbnail -->
							</div><!-- End Simple Lence Gallery Container -->
						</div><!-- End Single Product View -->
					</div>
					<div class="col-lg-7">
						<!-- Single Product Content View -->
						<div class="single-product-content-view">
							<div class="product-info">
								<h1>{{$product->name}}</h1>
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
								<p class="rating-links">
									<a href="#">1 Review(s)</a>
									<span class="separator">|</span>
									<a href="#" class="add-to-review">Add Your Review</a>
								</p>
								<p class="availability in-stock">Tình trạng: <span>Còn hàng</span></p>

								<div class="quick-desc">
									{{-- <div class="col-6"> --}}
										<div class="btn btn-danger"><i class="fa fa-gift" aria-hidden="true"></i>&nbsp;KHUYẾN MÃI</div>
										<div style="border: 1px solid red; border-radius: 4px; width: 65%;" >
											<p><b>&nbsp;Trả góp 0%:</b></p>
											<ul>
												<li style="list-style: block!important; padding-left: 15px;
											}">- Trả góp lãi suất 0% với Home Credit. Trả trước 30%, kỳ hạn 6 tháng (Áp dụng cùng các khuyến mại khác)</li>
											<li style="list-style: block!important;padding-left: 15px;
										}">- Trả góp 0% với FE Credit - trả trước từ 30% (áp dụng cùng các khuyến mãi khác)</li>
									</ul>
								</div>
							{{-- </div> --}}

							{{-- <div style="width: 50%;" class="col-6">
								<table class="table table-hover" style="border: 1px solid #ccc;">
									<thead class="thead-light">
										<tr>
											<th style="text-align: center;" colspan="2" scope="col">Thông số chi tiết của sản phẩm</th>
										</tr>
									</thead>
									<tbody  style="text-align: center;">
										@if($arr_config != null)
										@foreach($arr_config as $key => $value)
										<tr>
											<td style="border-right: 1px solid #dee2e6;"><b>{{$key}}</b></td>
											<td>{{$value}}</td>
										</tr>
										@endforeach
										@endif
									</tbody>
								</table>
							</div> --}}
						</div>
						<div class="price-box">
							<p class="price"><span class="special-price"><span class="amount">{{number_format($product->sale_price)}} đ</span></span></p>
						</div>
					</div><!-- End product-info -->
					<!-- Add to Box -->
					<div class="add-to-box add-to-box2">
						<div class="actions-inner" style="margin-bottom: 10px;">
							<ul class="add-to-links">
								<li><a class="link-wishlist" title="Add to Wishlist" href="#"><i class="fa fa-star"></i></a></li>
								<li><a class="link-compare" title="Add to Compare" href="#"><i class="fa fa-retweet"></i></a></li>
								<li class="email-friend" title="Email to a Friend"><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>
						</div>
						<div class="quick-add-to-cart">
							<form method="post" class="cart">
								{{-- <div class="qty-button"> 	
									<input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">

									<div class="box-icon button-plus"> 
										<input type="button" class="qty-increase " onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;" value="+">
									</div>	
									<div class="box-icon button-minus">
										<input type="button" class="qty-decrease" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) qty_el.value--;return false;" value="-">
									</div>
								</div> --}}
								<div class="product-actions">
									<a href="{{route('frontend.cart.addtocarttest',$product->id)}}"><button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart">&nbsp;</i><span>Mua ngay</span></button></a>

								</div>
							</form>
						</div>
					</div><!-- End Add to Box -->
					<!-- Social Shiring -->
					<div class="social-sharing">
						<a href="#"><img src="{{URL::asset('frontend1/img/icon/social.png')}}" alt="social"></a>
					</div><!-- End Social Shiring -->
				</div><!-- End Single Product Content View -->
			</div>
		</div>
	</div>
</div><!-- End Single Product View Area -->
<!-- Single Description Tab -->
<div class="single-product-description">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="product-description-tab custom-tab">
					<!-- tab bar -->
					<ul class="nav nav-tabs" role="tablist">
						<li><a class="active" href="#product-des" data-toggle="tab">Mô Tả Sản Phẩm</a></li>
						<li><a href="#product-rev" data-toggle="tab">Thông số kỹ thuật</a></li>
						<li><a href="#product-tag" data-toggle="tab">Bình luận</a></li>
					</ul>
					<!-- Tab Content -->
					<div class="tab-content">
						<div class="tab-pane active" id="product-des">
							<p>{!!$product->content!!}</p>
						</div>
						<div class="tab-pane" id="product-rev">
							<div class="row">
								{{-- <div class="col-lg-6">
									
								</div>
								<div class="col-lg-6">
				
								</div> --}}
								<table class="table table-hover">
									<thead class="thead-light">
										<tr>
											<th style="text-align: center;" colspan="2" scope="col">Thông số chi tiết của sản phẩm</th>
											{{-- <th scope="col">Last</th> --}}
										</tr>
									</thead>
									<tbody  style="text-align: center;">
										@if($arr_config != null)
										@foreach($arr_config as $key => $value)
										<tr>
											<td style="border-right: 1px solid #dee2e6;"><b>{{$key}}</b></td>
											<td>{{$value}}</td>
										</tr>
										@endforeach
										@endif
									</tbody>
								</table>
							</div>
						</div>
						<div class="tab-pane" id="product-tag">
							{{-- <div class="component_rating_content" style="display: flex; align-items: center;">
								<div class="rating_item" style="width: 20%;">
									<span class="fa fa-star" style="font-size: 50px;color: #fd9727 "><b>2.5</b></span>
								</div>
								<div class="list_rating" style="width: 60%;padding: 20px;">
									@for($i = 1;$i <= 5;$i++)
									<div class="item_rating" style="display: flex;align-items: center;">
										<div style="width: 10%;">
											{{$i}} <span class="fa fa-star"></span>
										</div>
										<div style="width: 70%;margin-left: 0 20px;">
											<span style="width: 100%;height: 8px;display: block;border: 1px solid #dedede"><b style="width: 30%;background-color: #f44336;"></b></span>
										</div>
										<div style="width: 20%;">
											<a href="">290 đánh giá</a>
										</div>
									</div>
									@endfor
								</div>
								<div style="width: 20%;">
									<a href="" class="btn btn-info">Gửi đánh giá của bạn</a>
								</div>
							</div> --}}
							<div class="row">
								<div class="col-3">
									<div class="container" style="text-align: center;
									margin-top: 22px;">
									<span class="fa fa-star" style="font-size: 45px;
									color: #fd9727;"><b>2.5</b></span>
								</div>
							</div>
							<div class="col-6">
								@for($i = 1;$i <= 5;$i++)
								<div class="row">
									<div class="col-2">
										{{$i}} <span  class="fa fa-star" style="color: #fd9727;"></span>
									</div>
									<div class="col-7" style="margin-top: 7px;">
										<div class="progress" style="height: 8px;">
											<div  class="progress-bar" role="progressbar" style="width: 25%;background-color: #17a2b8; " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="col-3">
										<a href="">290 đánh giá</a>
									</div>
								</div>
								@endfor
							</div>
							<div class="col-3" style="text-align: center;
							margin-top: 22px;">
							<a href="" class="btn btn-info js-rating-action">Gửi đánh giá của bạn</a>
						</div>
						<?php
						
						?>
						<div class="container form_rating hidden ">
							<div style="text-align: center;margin-top: 20px;">
								<p>Vui lòng chọn đánh giá:</p>
								<span class="list_star">
									@for($i = 1 ;$i <=5;$i++)
									<i class="fa fa-star" style="font-size: 25px;" data-key="{{$i}}"></i>
									@endfor
								</span>
								<span class="list_text" >Tốt</span>
							</div>
							<div>
								<textarea name=""  cols="30" rows="3"></textarea>
							</div>
							<a href="" class="btn btn-info ">Gửi đánh giá</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div><!-- End Single Description Tab -->
<!-- Product Area -->
<div class="product-area ">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- Product View Area -->
				<div class="product-view-area fix">
					<!-- Single Product Category Related Products -->
					<div class="single-product-category related-products">
						<!-- Product Category Title-->
						<div class="head-title">
							<p>Sản phẩm tương ứng</p>
						</div>
						<!-- Product View -->
						<div class="product-view">
							<!-- Product View Carousel -->
							<div id="related-products-carousel" class="owl-carousel custom-carousel">
								<!-- Single Product -->
								@foreach($products_same as $same)
								<div class="singel-product single-product-col">
									@if($same->discount_percent != 0)
									<div class="label-pro-sale" style="border-radius: 8px;
									height: auto;">Giảm {{$same->discount_percent}} %</div>
									@else
									<div class="label-pro-new">Mới</div>
									@endif
									<!-- Single Product Image -->
									<div class="single-product-img">
										@foreach($thumbnails as $thumbnail )
										@if($thumbnail->product_id == $same->id)
										<a href="#"><img src="{{$thumbnail->path}}" alt="product"></a>
										@endif
										@endforeach
									</div>
									<!-- Single Product Content -->
									<div class="single-product-content">
										<h2 class="product-name"><a title="Proin lectus ipsum" href="product-details.html">{{$same->name}}</a></h2>
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
											<p><span>{{number_format($same->origin_price)}} đ</span>{{number_format($same->sale_price)}} đ</p>
										</div>
									</div><!-- End Single Product Content -->
								</div>
								@endforeach<!-- End Single Product -->
								
							</div><!-- End Product View Carousel -->
						</div><!-- End Product View-->
					</div><!-- End Single Product Category -->
					<!-- Single Product Category UpSell Product -->
					<div class="single-product-category upsell-products">
						<!-- Product Category Title-->
						<div class="head-title">
							<p>Gợi ý sản phẩm</p>
						</div>
						<!-- Product View -->
						<div class="product-view">
							<!-- Product View Carousel -->
							<div id="upsell-products-carousel" class="owl-carousel custom-carousel">
								<!-- Single Product -->
								@foreach($products_suggest as $product_sg)
								<div class="singel-product single-product-col">
									@if($product_sg->discount_percent != 0)
									<div class="label-pro-sale" style="border-radius: 8px;
									height: auto;">Giảm {{$product_sg->discount_percent}} %</div>
									@else
									<div class="label-pro-new">Mới</div>
									@endif
									<!-- Single Product Image -->
									<div class="single-product-img">
										@foreach($thumbnails as $thumbnail )
										@if($thumbnail->product_id == $product_sg->id)
										<a href="#"><img src="{{$thumbnail->path}}" alt="product"></a>
										@endif
										@endforeach
									</div>
									<!-- Single Product Content -->
									<div class="single-product-content">
										<h2 class="product-name"><a title="Proin lectus ipsum" href="{{route('frontend.home.productdetail',$product_sg->id)}}"> {{$product_sg->name}} </a></h2>
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
											<p><span>{{number_format($product_sg->origin_price)}} đ</span>{{number_format($product_sg->sale_price)}} đ</p>
										</div>
									</div><!-- End Single Product Content -->
								</div>
								@endforeach<!-- End Single Product -->
							</div><!-- End Product View Carousel -->
						</div><!-- End Product View-->
					</div><!-- End Single Product Category -->
				</div><!-- End Product View Area -->
			</div>
		</div>
	</div>
</div><!-- End Product Area -->
</div><!-- End Single Product details Area -->
<!-- Brand Area -->

</body>
@endsection
@section('script')
<script type="text/javascript">
	$(function(){
		let listStar = $(".list_star .fa");
		ListRatingText = {
			'1':'Không thích',
			'2':'Tạm được',
			'3':'Bình thường',
			'4':'Rất tốt',
			'5':'Tuyệt vời quá',
		}
		listStar.mouseover(function(){
			let $this = $(this);
			let number =$this.attr('data-key');
			listStar.removeClass('rating_active');
			$.each(listStar,function(key,value){
				if ( key +1 <= number) {
					$(this).addClass('rating_active')
				}
			});
			$(".list_text").text('').text(ListRatingText[number]).show();
		});

		$(".js-rating-action").click(function(event) {
			event.preventDefault();
			if ($(".form_rating").hasClass('hidden')) {
				$(".form_rating").addClass('active').removeClass('hidden');
			}else{
				$(".form_rating").addClass('hidden').removeClass('active');

			}
		});
	});
</script>
@endsection