@extends('frontend.layouts1.master')
@section('title')
BLOG DETAILS
@endsection

@section('content')
<body class="blog_details">
	<!-- Breadcurb Area -->
	<div class="breadcurb-area">
		<div class="container">
			<ul class="breadcrumb">
				<li class="home"><a href="#">Home</a></li>
				<li>/Tin Công Nghệ</li>
			</ul>
		</div>
	</div><!-- End Breadcurb Area -->
	<!-- Shop Product Area -->
	<div class="main-blog-page single-blog blog-post-area">
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
								<h2>Nình luận gần đây</h2>
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
					<!-- single-blog start -->
					<article class="blog-post-wrapper">
						{{-- <div class="post-thumbnail">
							<img style="width: 100%; height: 400px;" src="{{$post->thumbnail}}" alt="" />
						</div> --}}
						<div class="post-information">
							<h2>{{$post->name}}</h2>
							<div class="entry-meta">
								<span class="author-meta"><i class="fa fa-user"></i> <a href="#">admin</a></span>
								<span><i class="fa fa-clock-o"></i> November 28, 2014</span>
								<span class="tag-meta">
									<i class="fa fa-folder-o"></i>
									<a href="#">Fashion</a>,
									<a href="#">WordPress</a>
								</span>
								<span>
									<i class="fa fa-tags"></i>
									<a href="#">fashion</a>,
									<a href="#">t-shirt</a>,
									<a href="#">white</a>
								</span>
								<span><i class="fa fa-comments-o"></i> <a href="#">6 comments</a></span>
							</div>
							<div class="entry-content">
								<p>{!!$post->content!!}</p>
								
							</div>
							<div class="social-sharing">
								<h3>Share this post</h3>
								<div class="sharing-icon">
									<a href="#" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a>
									<a href="#" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a>
									<a href="#" data-toggle="tooltip" title="Pinterest"><i class="fa fa-pinterest"></i></a>
									<a href="#" data-toggle="tooltip" title="Google-plus"><i class="fa fa-google-plus"></i></a>
									<a href="#" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
							<div class="author-info">
								<div class="author-avatar"><img src="{{URL::asset('frontend1/img/blog/b18.jpg')}}" alt="admin"></div>
								<div class="author-description">
									<h2>About the Author: <a href="#">admin</a></h2>
								</div>
							</div>
						</div>
					</article>
					<div class="clear"></div>
					<div class="single-post-comments">
						<div class="comments-area">
							<div class="comments-heading">
								<h3>6 comments</h3>
							</div>
							<div class="comments-list">
								<ul>
									<li>
										<div class="comments-details">
											<div class="comments-list-img">
												<img src="{{URL::asset('frontend1/img/blog/b18.jpg')}}" alt="post-author">
											</div>
											<div class="comments-content-wrap">
												<span>
													<b><a href="#">admin</a></b>
													Post author
													<span class="post-time">October 6, 2014 at 1:38 am</span>
													<a href="#">Reply</a>
												</span>
												<p>just a nice post</p>
											</div>
										</div>
									</li>
									<li class="threaded-comments">
										<div class="comments-details">
											<div class="comments-list-img">
												<img src="{{URL::asset('frontend1/img/blog/b18.jpg')}}" alt="post-author">
											</div>
											<div class="comments-content-wrap">
												<span>
													<b><a href="#">demo</a></b>
													Post author
													<span class="post-time">October 6, 2014 at 2:25 pm</span>
													<a href="#">Reply</a>
												</span>
												<p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
											</div>
										</div>
									</li>
									<li>
										<div class="comments-details">
											<div class="comments-list-img">
												<img src="{{URL::asset('frontend1/img/blog/b18.jpg')}}" alt="post-author">
											</div>
											<div class="comments-content-wrap">
												<span>
													<b><a href="#">admin</a></b>
													Post author
													<span class="post-time">October 6, 2014 at 3:18 pm </span>
													<a href="#">Reply</a>
												</span>
												<p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at justo dolor. Fusce ac sapien bibendum, scelerisque libero nec</p>
											</div>
										</div>
									</li>
									<li class="threaded-comments">
										<div class="comments-details">
											<div class="comments-list-img">
												<img src="{{URL::asset('frontend1/img/blog/b18.jpg')}}" alt="post-author">
											</div>
											<div class="comments-content-wrap">
												<span>
													<b><a href="#">demo</a></b>
													Post author
													<span class="post-time">October 6, 2014 at 4:25 pm</span>
													<a href="#">Reply</a>
												</span>
												<p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
											</div>
										</div>
									</li>
									<li>
										<div class="comments-details">
											<div class="comments-list-img">
												<img src="{{URL::asset('frontend1/img/blog/b18.jpg')}}" alt="post-author">
											</div>
											<div class="comments-content-wrap">
												<span>
													<b><a href="#">admin</a></b>
													Post author
													<span class="post-time">October 6, 2014 at 6:18 pm </span>
													<a href="#">Reply</a>
												</span>
												<p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at justo dolor. Fusce ac sapien bibendum, scelerisque libero nec</p>
											</div>
										</div>
									</li>
									<li class="threaded-comments">
										<div class="comments-details">
											<div class="comments-list-img">
												<img src="{{URL::asset('frontend1/img/blog/b18.jpg')}}" alt="post-author">
											</div>
											<div class="comments-content-wrap">
												<span>
													<b><a href="#">demo</a></b>
													Post author
													<span class="post-time">October 6, 2014 at 7:25 pm</span>
													<a href="#">Reply</a>
												</span>
												<p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
											</div>
										</div>
									</li>									
								</ul>
							</div>
						</div>
						<div class="comment-respond">
							<h3 class="comment-reply-title">Leave a Reply </h3>
							<span class="email-notes">Your email address will not be published. Required fields are marked *</span>
							<form action="#">
								<div class="row">
									<div class="col-md-4">
										<p>Name *</p>
										<input type="text" />
									</div>
									<div class="col-md-4">
										<p>Email *</p>
										<input type="email" />
									</div>
									<div class="col-md-4">
										<p>Website</p>
										<input type="text" />
									</div>
									<div class="col-md-12 comment-form-comment">
										<p>Website</p>
										<textarea id="message" cols="30" rows="10"></textarea>
										<input type="submit" value="Post Comment" />
									</div>
								</div>
							</form>
						</div>						
					</div><!-- single-blog end -->
					<div class="blog-pagination">
						<ul class="pagination">
							<li><a href="#">&lt;</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">&gt;</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!-- End Shop Product Area -->
</body>
@endsection