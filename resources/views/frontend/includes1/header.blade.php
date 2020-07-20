<div class="header-area">
	<!-- Header Top -->
	<div class="header-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Header Top Bar-->
					<div class="header-top-bar">
						<div class="row">
							<div class="col-lg-5 col-md-6">
								<!-- Header Top Left-->
								<div class="header-top-left">
									<div class="call-header">
										<p><i class="fa fa-phone"></i>Liên hệ:<span> (+88) 01737803547</span></p>
									</div>
									<div class="header-login">
										{{-- <a href="my-account.html">Log in</a> --}}
										<ul>
											
										</ul>
									</div>
								</div><!-- End Header Top Left-->
							</div>
							<div class="col-lg-7 col-md-6">
								<!-- Header Top Right-->
								<div class="header-top-right">
									<!-- Header Link Area -->
									<div class="header-link-area">
										{{-- <div class="header-link">
											<ul>
												<li><a class="english" href="#">English<i class="fa fa-angle-down"></i></a>
													<ul>
														<li><a href="#">English 1</a></li>
														<li><a href="#">English 2</a></li>
														<li><a href="#">English 3</a></li>
														<li><a href="#">English 4</a></li>
													</ul>
												</li>
											</ul>
										</div> --}}
										<div class="header-link">
											<ul>
												<!-- Authentication Links -->
												@guest
												<li class="nav-item">

													<a class="nav-link text-white" href="{{ route('login') }}"><i class="fa fa-sign-in"></i>&nbsp;{{ __('Login') }}</a>
												</li>
												&nbsp;
											{{-- @if (Route::has('register'))
											<li class="nav-item">
												<i class="fa fa-pencil-square-o"></i><a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
											</li>
											@endif --}}
											@else
											<li class="nav-item dropdown">
												<a style="width: 245px;" id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Xin chào 
													{{ Auth::user()->name }} <span class="caret"></span>
												</a>

												<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
													<a class="dropdown-item" href="{{ route('logout') }}"
													onclick="event.preventDefault();
													document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>&nbsp;
													{{ __('Logout') }}
												</a>

												<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
													@csrf
												</form>
											</div>
										</li>
										@endguest
										<li><a class="account" href="#">Tài khoản<i class="fa fa-angle-down"></i></a>
											<ul>
												<li><a href="{{route('frontend.home.myaccount')}}">Tài khoản của tôi</a></li>
												@if(Auth::check())
												@if($auth_user->role == 1 || $auth_user->role == 2 || $auth_user->role == 3)
												<li><a href="{{route('backend.dashboard')}}">Trang quản trị viên</a></li>
												@endif
												@endif
												<li><a href="{{route('frontend.home.wishlist')}}">Sản phẩm yêu thích</a></li>
												<li><a href="{{route('frontend.cart.index')}}">Giỏ hàng</a></li>
												<li><a href="{{route('frontend.home.checkout')}}">Checkout</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div><!-- End Header Link Area -->
						</div><!-- End Header Top Right-->
					</div>
				</div>
			</div><!-- End Header Top Bar-->
		</div>
	</div>
</div>
</div><!-- End Header Top -->
<!-- Header Bottom -->
<div class="header-bottom">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- Header Bottom Inner-->
				<div class="header-bottom-inner">
					<div class="row">
						<div class="col-lg-3 col-md-12">
							<!-- Header Logo -->
							<div class="header-logo">
								<a href="index.html"><img src="{{URL::asset('frontend1/img/logo/logo.png')}}" alt="logo"></a>
							</div>
						</div>
						<div class="col-lg-9 col-md-12">
							<!-- Header Bottom Right -->
							<div class="header-bottom-right">
								{{-- <!-- All Categorie -->
								<div class="all-categories">
									<div class="search-cat">
										<select id="product-categori">
											<option value="All Categories">--Danh mục--</option>
											@foreach($categories as $category)
											<option value="{{$category->id}}">{{$category->name}}</option>
											@endforeach
										</select>
									</div>
								</div><!-- End All Categorie --> --}}
								<div class="header-search">
									<form action="{{route('frontend.home.search')}}" method="get">
										<input type="text" class="input-text" name="key" id="search" placeholder="Nhập từ khóa...">
										<button type="submit"><i class="fa fa-search"></i></button>
									</form>
								</div>
								<!-- Header Cart Area-->
								<div id="change-item-cart" class="header-cart-area">
									<div class="header-cart">
										<ul id="viewss_cart">
											<li id="viewss">
												<a href="#" id="qty_s">
													<span id="tess">
														<i class="fa fa-shopping-cart"></i>
														{{-- @if(Session::has('Cart') != null) --}}
														<span class="my-cart">Giỏ hàng</span> - {{$totalQty}}  sản phẩm
														{{-- @else
															<span class="my-cart">Giỏ hàng</span> - 0 sản phẩm --}}
															{{-- @endif --}}
														</span>
													</a>
													<ul class="oppss">
														{{-- @if(Session::has('Cart') != null) --}}
														<li class="opps">
															@foreach($items as $item)
															<div class="cart-list" >
																<div id="{{$item->id}}" class="cart-list-item">
																	<div class="cart-list-img">
																		@foreach($thumbnails as $thumbnail)
																		@if($thumbnail->product_id == $item->id)
																		<a href="#"><img style="width: 60px;" src="{{$thumbnail->path}}" alt="cart" /></a>
																		@endif
																		@endforeach
																	</div>
																	<div class="cart-content">
																		<a href="#">{{$item->name}}</a>
																		<p>{{$item->qty}} x <span>{{number_format($item->price)}} đ</span></p>
																	</div>
																	<div class="cart-button">
																		
																		<a href="javascript:void(0)" type="button" class="delete_item_cart" value="{{$item->rowId}}"><i class="fa fa-times" ></i></a>
																	</div>
																</div>
															</div>
															@endforeach
															<div id="load_totals">
																<div class="cart-subtotal" id="load_total">
																	<p class="totalPrice">Subtotal: <span>{{$totalPrice}} đ</span></p>
																</div>
															</div>
															<div class="">
																<div class="cart-action">
																	<a href="{{route('frontend.cart.index')}}"><button type="button" class="btn">Xem giỏ hàng</button></a>
																</div>
															{{-- <div class="col-6 cart-action">
																<button type="button" class="btn">checkout</button>
															</div> --}}
														</div>
													</li>
													{{-- @endif --}}
												</ul>
											</li>
										</ul>
									</div>
								</div><!-- End Header Cart Area-->
							</div><!-- End Header Bottom Right -->
						</div>
					</div>
				</div><!-- End Header Bottom Inner-->
			</div>
		</div>
	</div>
</div><!-- End Header Bottom -->
</div><!-- End Header Area -->
<!-- Main Menu Area -->
<div class="main-menu-area another-home">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- Manin Menu -->
				<div class="main-menu d-none d-lg-block">
					<nav>
						<ul>
							<li><a href="{{route('frontend.home.index')}}" class="active">Home</a></li>
							@foreach($parent_categories as $parent_category)
							<li>
								<a href="{{route('frontend.home.categoryprodutsshow',$parent_category->id)}}"><span>{{$parent_category->name}}</span></a>
								<ul class="mega-menu-ul">
									<li>
										<div class="mega-menu">
											@foreach($child_categories as $child_category)
											<div class="single-mega-menu">
												@if($child_category->parent_id == $parent_category->id)
												<h2><a href="{{route('frontend.home.categoryprodutsshow',$child_category->id)}}">{{$child_category->name}}</a></h2>
												@endif
												
												@if($child_category->parent_id == $parent_category->id)
												@foreach($grand_categories as $grand_category)
												@if($grand_category->parent_id === $child_category->id)
												<a href="{{route('frontend.home.categoryprodutsshow',$grand_category->id)}}">{{$grand_category->name}}</a>
												@endif
												@endforeach
												@endif

											</div>
											@endforeach
										</div>
									</li>
								</ul>
							</li>
							@endforeach
							<li><a href="{{route('frontend.home.allproducts')}}">Sản phẩm</a></li>
							<li><a href="{{route('frontend.home.blog')}}">Tin công nghệ</a></li>
							<li class="li-pages"><a href="#">Liên hệ</a></li>
						</ul>
						{{-- @foreach($raw_categories as $raw_category)
						{!!$raw_category!!}
						@endforeach --}}
					</nav>
				</div><!-- End Manin Menu -->
				{{-- <!-- Start Mobile Menu -->
				<div class="mobile-menu d-block d-lg-none">
					<nav>
						<ul>
							<li class=""><a href="index.html">Home</a>
								<ul class="sub-menu">
									<li><a href="index-2.html">Home Page 2</a></li>
									<li><a href="index-3.html">Home Page 3</a></li>
									<li><a href="index-4.html">Home Page 4</a></li>
								</ul>
							</li>
							<li><a href="shop.html">Laptop</a>
								<ul class="">
									<li><a href="#">Dreeses</a>
										<ul>
											<li><a href="#">Cocktail</a></li>														
											<li><a href="#">Day</a></li>
											<li><a href="#">Evening</a></li>
											<li><a href="#">Sports</a></li>
										</ul>
									</li>
									<li><a href="#">Shoes</a>
										<ul>											
											<li><a href="#">Sports</a></li>	
											<li><a href="#">Run</a></li>
											<li><a href="#">Sandals</a></li>
											<li><a href="#">Books</a></li>
										</ul>
									</li>
									<li><a href="#">Handbages</a>
										<ul>
											<li><a href="#">blazers</a></li>
											<li><a href="#">table</a></li>
											<li><a href="#">coats</a></li>
											<li><a href="#">Sports</a></li>
											<li><a href="#">kids</a></li>
										</ul>
									</li>
									<li><a href="#">Clothing</a>
										<ul>
											<li><a href="#">T-shits</a></li>
											<li><a href="#">Coats</a></li>
											<li><a href="#">Jacketes</a></li>
											<li><a href="#">Jeans</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class=""><a href="shop.html">Mobile</a>
								<ul class="">
									<li><a href="#">Bages</a>
										<ul>
											<li><a href="#">Bootes Bages</a></li>
											<li><a href="#">Blazers</a></li>
											<li><a href="#">Mermaid</a></li>
										</ul>
									</li>
									<li><a href="#">Clothing</a>
										<ul>
											<li><a href="#">coats</a></li>	
											<li><a href="#">T-shirt</a></li>
										</ul>
									</li>
									<li><a href="#">lingerie</a>
										<ul>
											<li><a href="#">brands</a></li>
											<li><a href="#">furniture</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="shop.html">Tablet</a>
								<ul class="">
									<li><a href="#">Footwear Man</a>
										<ul>
											<li><a href="#">Gold Rigng</a></li>
											<li><a href="#">paltinum Rings</a></li>
											<li><a href="#">Silver Ring</a></li>
											<li><a href="#">Tungsten Ring</a></li>
										</ul>	
									</li>
									<li><a href="#">Footwear Womens</a>
										<ul>
											<li><a href="#">Brand Gold</a></li>
											<li><a href="#">paltinum Rings</a></li>
											<li><a href="#">Silver Ring</a></li>
											<li><a href="#">Tungsten Ring</a></li>
										</ul>	
									</li>
									<li><a href="#">Band</a>
										<ul>
											<li><a href="#">Platinum Necklaces</a></li>
											<li><a href="#">Gold Ring</a></li>
											<li><a href="#">silver ring</a></li>
											<li><a href="#">sunglasses</a></li>
										</ul>	
									</li>	
								</ul>
							</li>														
							<li><a href="shop.html">Headphone</a>
								<ul class="">
									<li><a href="#">Rings</a>
										<ul>
											<li><a href="#">Coats & jackets</a></li>
											<li><a href="#">blazers</a></li>
											<li><a href="#">raincoats</a></li>
										</ul>	
									</li>
									<li><a href="#">Dresses</a>
										<ul>
											<li><a href="#">footwear</a></li>
											<li><a href="#">blazers</a></li>
											<li><a href="#">clog sandals</a></li>
											<li><a href="#">combat boots</a></li>
										</ul>	
									</li>
									<li><a href="#">Accessories</a>
										<ul>
											<li><a href="#">bootees Bags</a></li>
											<li><a href="#">blazers</a></li>
											<li><a href="#">jackets</a></li>
											<li><a href="#">kids</a></li>
											<li><a href="#">shoes</a></li>
										</ul>	
									</li>
									<li><a href="#">Top</a>
										<ul>
											<li><a href="#">briefs</a></li>	
											<li><a href="#">camis</a></li>
											<li><a href="#">nigthwear</a></li>
											<li><a href="#">shapewer</a></li>
										</ul>	
									</li>
								</ul>
							</li>
							<li><a href="shop.html">Camera & Photo</a></li>
							<li><a href="shop.html">Desktop</a></li>
							<li><a href="shop.html">Shop All</a></li>
							<li class=""><a href="#">Pages</a>
								<ul class="">
									<li><a href="blog.html">Blog</a></li>
									<li><a href="blog-details.html">Blog Details</a></li>
									<li><a href="cart.html">Cart</a></li>
									<li><a href="checkout.html">Checkout</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="shop.html">Shop</a></li>
									<li><a href="shop-list.html">Shop List</a></li>
									<li><a href="product-details.html">Product Details</a></li>
									<li><a href="my-account.html">My Account</a></li>
									<li><a href="testmonial.html">Testmonial</a></li>
									<li><a href="wishlist.html">Wishlist</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div><!-- End Mobile Menu --> --}}
			</div>
		</div>
	</div>
		</div><!-- End Main Menu Area