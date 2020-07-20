@extends('frontend.layouts1.master')
@section('title')
SHOPPING CART
@endsection

@section('content')
<body>
	<!-- Cart Area -->
	<div class="chart-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="cart-title">
						<h2>Chi tiết giỏ hàng</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- Cart Item -->
					<div class="chart-item table-responsive fix">
						<table class="col-md-12">
							<thead>
								<tr>
									
									<th class="th-product">Hình ảnh sản phẩm</th>
									<th class="th-details">Tên sản phẩm</th>
									<th style="width: 20%;" class="th-price">Giá sản phẩm</th>
									<th class="th-qty">Số lượng</th>
									<th style="width: 20%;" class="th-total">Tổng giá sản phẩm</th>
									<th class="th-edit">Cập nhật</th>
									<th class="th-delate"></th>
								</tr>
							</thead>
							{{-- <tbody>
								@if(Session::has('Cart') != null)
								@foreach(Session::get('Cart')->products as $item)
								<tr>
									
									<td class="th-product">
										<a href="#"><img style="width: 100px;" src="{{URL::asset('frontend1/img/cart/c3.jpg')}}" alt="cart"></a>
									</td>
									<td class="th-details">
										<h2><a href="#">{{$item['product_info']->name}}</a></h2>
									</td>
									
									<td class="th-price">{{number_format($item['product_info']->sale_price)}} đ</td>
									<td class="th-qty">
										<input type="text" placeholder="{{$item['quanty']}}">
									</td>
									<td class="th-total">{{number_format($item['price'])}} đ</td>
									<td class="th-edit"><a href="#">Edit</a></td>
									<td class="th-delate"><a href="{{route('frontend.home.deleteitemlistcart',$item['product_info']->id)}}"><i class="fa fa-trash" onclick="DeleteItemListCart({{$item['product_info']->id}});"></i></a></td>
								</tr>
								
								@endforeach
								@endif
							</tbody> --}}

							{{-- Test cart --}}
							<tbody>
								@foreach($items as $item)
								<form action="{{route('frontend.cart.updateQtyItem',$item->rowId)}}" method="GET">
									<tr>

										<td class="th-product">
											@foreach($thumbnails as $thumbnail)
											@if($thumbnail->product_id == $item->id)
											<a href="#"><img style="width: 100px;" src="{{$thumbnail->path}}" alt="cart"></a>
											@endif
											@endforeach
										</td>
										<td class="th-details">
											<h2><a href="#">{{$item->name}}</a></h2>
										</td>

										<td class="th-price">{{number_format($item->price)}} đ</td>
										<td class="th-qty">
											<input type="number" value="{{$item->qty}}" id="{{$item->id}}" name="qty"  placeholder="{{$item->qty}}">
										</td>
										<td class="th-total">{{number_format($item->price * $item->qty)}}</td>
										<td class="th-edit">
											{{-- <a href="{{route('frontend.cart.updateQtyItem',$item->id)}}" data-id-product="{{$item->id}}" class="js-update-item-cart" data-id={{$item->id}}>Edit</a> --}}
											<button type="submit" class="btn"><i class="fa fa-pencil-square-o"></i></button>
										</td>
										{{-- <td class="th-delate"><a href="{{route('frontend.home.deleteitemlistcart',$item['product_info']->id)}}"><i class="fa fa-trash" onclick="DeleteItemListCart({{$item['product_info']->id}});"></i></a></td> --}}
										{{-- Test cart --}}
										<td class="th-delate"><a href="{{route('frontend.cart.removeitem',$item->rowId)}}"><i class="fa fa-trash" ></i></a></td>
										{{-- end test --}}

									</tr>
								</form>
								@endforeach
								{{-- @endif --}}
								
							</tbody>
							{{-- End test --}}

						</table>
					</div><!-- End Cart Item -->
					<div class="shoping-cart-button">
						<div class="cart-button-left">
							<a href="{{route('frontend.home.allproducts')}}"><button type="button" class="btn custom-button">Tiếp tục mua hàng</button></a>

						</div>
						<div class="cart-button-right">
							<button type="button" class="btn custom-button">Cập nhật giỏ hàng</button>
							<a href="{{route('frontend.cart.destroy')}}"><button type="button" class="btn custom-button">Xóa giỏ hàng</button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="cart-shopping-area fix">
				<!-- Cart Shoping Area -->
				<div class="row">
					<div class="col-lg-4 col-md-12">
						<div class="calculate-shipping chart-all fix">
							<h2>Estimate Shipping and Tax</h2>
							<div class="cart-all-inner">
								<p>Enter your destination to get a shipping estimate.</p>
								<h3>Country <sup>*</sup></h3>
								
								<h3>State/Province</h3>
								
								<h3>Zip/Postal Code</h3>
								<input type="text">
								<div class="shiping-cart-button">
									<button type="button" class="btn custom-button">Get A Quote</button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12">
						<div class="chart-all fix">
							<h2>Mã giảm giá</h2>
							<div class="cart-all-inner">
								<p>Enter your coupon code if you have one.</p>
								<input type="text">
								<div class="shiping-cart-button">
									<button class="btn custom-button" type="button">Áp Dụng</button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12">
						<div class="shopping-summary chart-all fix">
							<div class="shopping-cost-area">
								{{-- @if(Session::has('Cart') != null) --}}
								<div class="shopping-cost">
									<div class="shopping-cost-right">
										{{-- <p>{{Session::get('Cart')->totalQuanty}}</p>
										<p>{{number_format(Session::get('Cart')->totalPrice)}} đ</p> --}}
										<p>{{$totalQty}}</p>
										<p>{{$totalPrice}}đ</p>
									</div>
									<div class="shopping-cost-left">
										<p class="floatright">Tổng sản phẩm:</p>
										<p>Tổng giá trị:</p>
									</div>
								</div>
								{{-- @endif --}}
								<div class="shiping-cart-button">
									<a href="{{route('frontend.home.checkout')}}"><button type="button" class="btn custom-button">Đặt hàng</button></a>
									
								</div>
								<a href="#">Checkout with Multiple Addresses</a>
							</div>
						</div>
					</div>
				</div><!-- End Cart Shoping Area -->
			</div>
		</div>
	</div><!-- End Cart Area -->

</body>
@endsection
@section('script')
<script type="text/javascript">
	// $(function(){
		
	// 	$(".js-update-item-cart").click(function(event) {
	// 		event.preventDefault();
	// 		let $this = $(this);
	// 		let url = $this.attr('href');
	// 		// let qty = $this.prev().val();
	// 		let qty = $("#qty").val();
	// 		console.log(qty);

	// 		let idProduct = $this.attr('data-id-product');
	// 		if(url){
	// 			$.ajax({
	// 				url: url,
	// 				data: { 
	// 					qty: qty,
	// 					idProduct: idProduct,
	// 				 }
	// 			})
	// 			.done(function( results ) {	
	// 				alert(results.message);
	// 				window.location.reload();
	// 			});
	// 		}
	// 	});
	// })

	
	function showData()
	{
		$.post('',function(){
			
		});
	}

</script>
@endsection
