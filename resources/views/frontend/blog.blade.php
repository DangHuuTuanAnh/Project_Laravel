@extends('frontend.layouts1.master')
@section('title')
BLOG PAGE
@endsection

@section('content')
<body>
	<!-- Breadcurb Area -->
		<div class="breadcurb-area">
			<div class="container">
				<ul class="breadcrumb">
					<li class="home"><a href="#">Home</a></li>
					<li>/Tin Công Nghệ</li>
				</ul>
			</div>
		</div><!-- End Breadcurb Area -->
		<!-- Main Blog Post Area Area -->
		<div class="main-blog-page blog-post-area">
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
									<h2>Danh mục bài viết</h2>
								</div>
								<div class="layout-list">
									<ul>
										<li><a href="#">Review sản phẩm mới</a></li>
										<li><a href="#">Tin công nghệ</a></li>
										<li><a href="#">Đánh giá & so sánh sản phẩm</a></li>
										<li><a href="#">Thủ thuật hữu ích</a></li>
									</ul>
								</div>
							</div><!-- End Shop Layout Area -->
							<!-- Shop Layout Area -->
							<div class="shop-layout">
								<div class="layout-title">
									<h2>Bài viết gần đây</h2>
								</div>
								<!-- Recent Posts -->
								<div class="recent-posts">
									<ul>
										<li>
											<div class="post-wrapper">
												<div class="post-thumb">
													<a href="#"><img alt="" src="{{URL::asset('frontend1/img/blog/b11.jpg')}}"></a>
												</div>
												<div class="post-info">
													<h3 class="post-title recent-post-s"><a href="#">Investigationes demonstraverun</a></h3>
													<div class="post-date recent-post-s">December 10, 2015</div>
												</div>
											</div>
										</li>
										<li>
											<div class="post-wrapper">
												<div class="post-thumb">
													<a href="#"><img alt="" src="{{URL::asset('frontend1/img/blog/b6.png')}}"></a>
												</div>
												<div class="post-info">
													<h3 class="post-title recent-post-s"><a href="#">Ectus fermentum eleifend faucibus sem</a></h3>
													<div class="post-date recent-post-s">December 12, 2015</div>
												</div>
											</div>
										</li>
										<li>
											<div class="post-wrapper">
												<div class="post-thumb">
													<a href="#"><img alt="" src="{{URL::asset('frontend1/img/blog/b10.jpg')}}"></a>
												</div>
												<div class="post-info">
													<h3 class="post-title recent-post-s"><a href="#">Audio format suspendisse turpis ipsum</a></h3>
													<div class="post-date recent-post-s">January 10, 2016</div>
												</div>
											</div>
										</li>
										<li>
											<div class="post-wrapper">
												<div class="post-thumb">
													<a href="#"><img alt="" src="{{URL::asset('frontend1/img/blog/b8.png')}}"></a>
												</div>
												<div class="post-info">
													<h3 class="post-title recent-post-s"><a href="#">Vitae lacus eget lectus imperdiet</a></h3>
													<div class="post-date recent-post-s">January 21, 2016</div>
												</div>
											</div>
										</li>
									</ul>
								</div><!-- Recent Posts -->
							</div><!-- End Shop Layout -->
							<!-- Shop Layout -->
							<div class="shop-layout">
								<div class="layout-title">
									<h2>Bình luận gần đây</h2>
								</div>
								<!-- Recent Comments -->
								<div class="recent-comments">
									<ul>
										<li>
											<div class="post-wrapper">
												<div class="post-thumb">
													<a href="#"><img alt="" src="{{URL::asset('frontend1/img/blog/b5.png')}}"></a>
												</div>
												<div class="post-info">
													<h3 class="post-title recent-post-s">Jaki Bars</h3>
													<p>
														<a href="#">- Quisque semper nunc vitae erat pellentesque...</a>
													</p>
												</div>
											</div>
										</li>
										<li>
											<div class="post-wrapper">
												<div class="post-thumb">
													<a href="#"><img alt="" src="{{URL::asset('frontend1/img/blog/b6.png')}}"></a>
												</div>
												<div class="post-info">
													<h3 class="post-title recent-post-s">Robert Kun</h3>
													<p>
														<a href="#">- Quisque semper nunc vitae erat pellentesque...</a>
													</p>
												</div>
											</div>
										</li>
										<li>
											<div class="post-wrapper">
												<div class="post-thumb">
													<a href="#"><img alt="" src="{{URL::asset('frontend1/img/blog/b5.png')}}"></a>
												</div>
												<div class="post-info">
													<h3 class="post-title recent-post-s">lara Dau</h3>
													<p>
														<a href="#">- Quisque semper nunc vitae erat pellentesque...</a>
													</p>
												</div>
											</div>
										</li>
										<li>
											<div class="post-wrapper">
												<div class="post-thumb">
													<a href="#"><img alt="" src="{{URL::asset('frontend1/img/blog/b10.jpg')}}"></a>
												</div>
												<div class="post-info">
													<h3 class="post-title recent-post-s">Racly Dam</h3>
													<p>
														<a href="#">- Quisque semper nunc vitae erat pellentesque...</a>
													</p>
												</div>
											</div>
										</li>
									</ul>
								</div><!-- End Recent Comments -->
							</div><!-- End Shop Layout -->
							<!-- Popular Tag Area -->
							<div class="popular-tag-area">
								<div class="tag-title">
									<h2>Tags</h2>
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
						<!-- Blog Post Item Area -->
						<div class="blog-post-item-ara">
							<div class="blog-post-inner-item">
								<!-- Blog Post Single Item -->
								@foreach($posts as $post)
								<div class="blog-post-single-item">
									<div class="single-item-img">
										<a href="#">
											<img alt="product" src="{{$post->thumbnail}}">
										</a>
									</div>
									<div class="single-item-content">
										<h2><a href="{{route('frontend.home.blogdetail',$post->id)}}">{{$post->name}}</a></h2>
										<h3>Friday, November 6, 2015 12:46:04 AM America/Los_Angeles</h3>
										<p>{{$post->description}}</p>
										<div class="blog-action">
											<a href="{{route('frontend.home.blogdetail',$post->id)}}">Read More</a>
										</div>
									</div>
								</div>
								@endforeach<!-- End Blog Post Single Item -->
							</div>
							<div class="blog-pagination">
								<ul class="pagination">
									{{-- <li><a href="#">&lt;</a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">&gt;</a></li> --}}
									{{$posts->links()}}
								</ul>
								{{-- {{$posts->links()}} --}}
							</div>
						</div><!-- End Blog Post Item Area -->
					</div>
				</div>
			</div>
		</div><!-- Main Blog Post Area Area -->
</body>
@endsection