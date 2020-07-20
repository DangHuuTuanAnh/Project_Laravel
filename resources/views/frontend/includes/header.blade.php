 <!-- header-area-start -->
 <header>
 	<!-- header-top-start -->
 	<div class="header-top ptb-12">
 		<div class="container">
 			<div class="row">
 				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 					<div class="header-left-menu">
 						<ul>
 							<li><a href="#"><img src="{{URL::asset('frontend/img/flag/1.jpg')}}" alt="flag" />English<i class="fa fa-angle-down"></i></a>
 								<div class="submenu-top">
 									<ul>
 										<li><a href="#"><img src="{{URL::asset('frontend/img/flag/1.jpg')}}" alt="flag" />English</a></li>
 										<li><a href="#"><img src="{{URL::asset('frontend/img/flag/2.jpg')}}" alt="flag" />اللغة العربية</a></li>
 									</ul>
 								</div>
 							</li>
 							<li><a href="#">Currency : EUR<i class="fa fa-angle-down"></i></a>
 								<div class="submenu-top">
 									<ul>
 										<li><a href="#"> Dollar (USD)</a></li>
 										<li><a href="#"> Euro (EUR)</a></li>
 									</ul>
 								</div>
 							</li>
 							<li><a href="#">My account<i class="fa fa-angle-down"></i></a>
 								<div class="submenu-top">
 									<ul>
 										<li><a href="register.html">My account</a></li>
 										<li><a href="wishlist.html">My wishlist</a></li>
 										<li><a href="checkout.html">checkout</a></li>
 									</ul>
 								</div>
 							</li>
 						</ul>
 					</div>
 				</div>
 				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 					<div class="links-nav">
 						{{-- <ul>
 							<li><a href="#"><i class="fa fa-map-marker"></i>Store Location</a></li>
 							<li><a href="#"><i class="fa fa-cog"></i>Guarantee</a></li>
 						</ul> --}}
 						<ul style="float: right;">
 							<!-- Authentication Links -->
 							@guest
 							<li class="nav-item">
 								<i class="fa fa-sign-in"></i><a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
 							</li>
 							&nbsp;
 							@if (Route::has('register'))
 							<li class="nav-item">
 								<i class="fa fa-pencil-square-o"></i><a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
 							</li>
 							@endif
 							@else
 							<li class="nav-item dropdown">
 								<a style="width: 245px;" id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Xin chào 
 									{{ Auth::user()->name }} <span class="caret"></span>
 								</a>

 								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
 									<a class="dropdown-item" href="{{ route('logout') }}"
 									onclick="event.preventDefault();
 									document.getElementById('logout-form').submit();">
 									{{ __('Logout') }}
 								</a>

 								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
 									@csrf
 								</form>
 							</div>
 						</li>
 						@endguest
 					</ul>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
 <!-- header-top-end -->
 <!-- header-mid-area-start -->
 <div class="header-mid-area ptb-30">
 	<div class="container">
 		<div class="row">
 			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
 				<div class="logo-area">
 					<a href="index.html"><img src="{{URL::asset('frontend/img/logo/3.png')}}" alt="logo" /></a>
 				</div>
 			</div>
 			<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
 				<div class="search-area">
 					<form action="#">
 						<input style="padding-left: 215px!important;" type="text" placeholder="Search entire store here ..." />
 						<select id="sorter" class="header-option" data-role="sorter">
 							<option value="Categories " selected="selected"> All Categories </option>
 							@foreach($categories as $category)
 							<option value="{{$category->id}}">{{$category->name}}</option>
 							@endforeach
 						</select>
 						<a href="#"><i class="fa fa-search"></i></a>
 					</form>
 				</div>
 			</div>
 			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
 				<div class="header-user">
 					<a><i class="zmdi zmdi-local-shipping zmdi-hc-fw"></i>Free Shipping on Orders $50+</a>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
 <!-- header-mid-area-end -->
 <!-- header-menu-area-start -->
 <div class="header-menu-area" id="header-sticky">
 	<div class="container">
 		<div class="row">
 			<div class="col-lg-10 col-md-10  hidden-sm hidden-xs">
 				<div class="main-menu">
 					<nav>
 						<ul>
 							<li class="active"><a href="{{route('frontend.home.index')}}">Home</a></li>
 							<li><a href="shop.html">headphones<i class="fa fa-angle-down"></i></a>
 								<div class="mega-menu-area">
 									<div class="mega-menu">
 										<span>
 											<a href="#" class="title">Headphones Solo™2</a>
 											<a href="shop.html">Headphones with Mic</a>
 											<a href="shop.html">Bluetooth/Wireless</a>
 											<a href="shop.html">Extra Bass</a>
 											<a href="shop.html">Noise Cancelling</a>
 										</span>
 										<span>
 											<a href="#" class="title">Studio wireless</a>
 											<a href="shop.html">Wireless Headphones</a>
 											<a href="shop.html">On Ear Headphones</a>
 											<a href="shop.html">Planar Magnetic</a>
 											<a href="shop.html">Bone Conduction</a>
 										</span>
 										<span>
 											<a href="#" class="title">Headphones Pro</a>
 											<a href="shop.html">Wire Managers</a>
 											<a href="shop.html">Hi-Res Music Players</a>
 											<a href="shop.html">Headphone Amplifiers</a>
 											<a href="shop.html">Headphone DACs</a>
 										</span>
 										<span>
 											<a href="#" class="title">Accessories</a>
 											<a href="shop.html">Earbud Tips</a>
 											<a href="shop.html">Headphone Amps</a>
 											<a href="shop.html">Headphone Cases</a>
 											<a href="shop.html">Headphone Splitters</a>
 										</span>
 									</div>
 									<div class="menu-static">
 										<span>
 											<a href="#"><img src="{{URL::asset('frontend/img/banner/7.jpg')}}" alt="banner" /></a>
 										</span>
 										<span>
 											<a href="#"><img src="{{URL::asset('frontend/img/banner/8.jpg')}}" alt="banner" /></a>
 										</span>
 									</div>
 								</div>
 							</li>
 							<li>
 								@foreach($categories as $category)
 								@if($category->id == 1)
 								<a href="">{{$category->name}}<i class="fa fa-angle-down"></i></a>
 								@endif
 								<div class="mega-menu-area mega-menu-area-2">
 									<div class="mega-menu">
 										<span>
 											@foreach($categories as $category)
 											@if($category->parent_id == 1 && $category->depth==1 && $category->name == 'Apple')
 											<a href="" class="title">{{$category->name}}</a>
 											@endif
 											@if($category->parent_id == 2 && $category->depth==2)
 											<a href="">{{$category->name}}</a>
 											@endif
 											@endforeach
 										</span>
 										<span>
 											@foreach($categories as $category)
 											@if($category->parent_id == 1 && $category->depth==1)
 											<a href="" class="title">{{$category->name}}</a>
 											@endif
 											@endforeach
 										</span>
 									</div>
 								</div>
 								@endforeach
 							</li>
 								{{-- <li><a href="#">Mobiles & Tablets<i class="fa fa-angle-down"></i></a>
 									<div class="mega-menu-area mega-menu-area-2">
 										<div class="mega-menu">
 											<span>
 												<a href="#" class="title">Smartphones</a>
 												<a href="shop.html">Apple</a>
 												<a href="shop.html">Samsung</a>
 												<a href="shop.html">Motorola</a>
 												<a href="shop.html">Sony</a>
 											</span>
 											<span>
 												<a href="#" class="title">Tablets & E-Readers</a>
 												<a href="shop.html">Ipad</a>
 												<a href="shop.html">Tablets</a>
 												<a href="shop.html">Kids' Tablets</a>
 												<a href="shop.html">iPad & Tablet </a>
 											</span>
 											<span>
 												<a href="#" class="title">Accessories</a>
 												<a href="shop.html">Cables</a>
 												<a href="shop.html">Screen Protectors</a>
 												<a href="shop.html">Holders & Stands</a>
 												<a href="shop.html">Storage</a>
 											</span>
 										</div>
 									</div>
 								</li> --}}
 								<li><a href="#">Photo & Camera<i class="fa fa-angle-down"></i></a>
 									<div class="mega-menu-area mega-menu-area-3">
 										<div class="mega-menu">
 											<span>
 												<a href="#" class="title">Cameras</a>
 												<a href="shop.html">Digital SLR</a>
 												<a href="shop.html">Instant Film</a>
 												<a href="shop.html">Mirrorless</a>
 												<a href="shop.html">Waterproof</a>
 											</span>
 											<span>
 												<a href="#" class="title">Camcorders</a>
 												<a href="shop.html">GoPro Cameras</a>
 												<a href="shop.html">Sports & Action</a>
 												<a href="shop.html">Traditional</a>
 												<a href="shop.html">Photo Accessories</a>
 											</span>
 										</div>
 									</div>
 								</li>
 								<li><a href="{{route('frontend.home.allproducts')}}">ALL PRODUCTS</a></li>
 								<li><a href="{{route('frontend.home.blog')}}">BLOGS</a></li>
 								<li><a href="{{route('frontend.home.contactus')}}">CONTACT US</a></li>
 							</ul>
 						</nav>
 					</div>
 				</div>
 				<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
 					<div class="cart-area">
 						<ul>
 							<li><a href="{{route('frontend.home.wishlist')}}"><i class="fa fa-heart-o"></i></a></li>
 							<li><a href=""><i class="fa fa-shopping-cart"></i></a>
 								<span>2</span>
 								<div class="mini-cart-sub">
 									<div class="cart-product">
 										<div class="single-cart">
 											<div class="cart-img">
 												<a href="#"><img src="{{URL::asset('frontend/img/product/1.jpg')}}" alt="book" /></a>
 											</div>
 											<div class="cart-info">
 												<h5><a href="#">Joust Duffle Bag</a></h5>
 												<p>1 x £60.00</p>
 											</div>
 										</div>
 										<div class="single-cart">
 											<div class="cart-img">
 												<a href="#"><img src="{{URL::asset('frontend/img/product/2.jpg')}}" alt="book" /></a>
 											</div>
 											<div class="cart-info">
 												<h5><a href="#">Chaz Kangeroo Hoodie</a></h5>
 												<p>1 x £52.00</p>
 											</div>
 										</div>
 									</div>
 									<div class="cart-totals">
 										<h5>Total <span>£12.00</span></h5>
 									</div>
 									<div class="cart-bottom">
 										<a href="{{route('frontend.home.cart')}}">View cart</a>
 									</div>
 								</div>
 							</li>
 						</ul>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 	<!-- header-menu-area-end -->
 </header>
