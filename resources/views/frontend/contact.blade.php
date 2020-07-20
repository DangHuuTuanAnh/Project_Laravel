@extends('frontend.layouts1.master')
@section('title')
CONTACT US PAGE
@endsection

@section('content')
<body>
		<!-- Contact area -->
		<div class="contact-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<!-- Left Sidebar-->
						<div class="left-sidebar">
							<div class="left-sidebar-title">
								<h2>Shop By</h2>
							</div>
							<!-- Shop Layout -->
							<div class="shop-layout">
								<div class="layout-title">
									<h2>Category</h2>
								</div>
								<div class="layout-list">
									<ul>
										<li><a href="#">Dreeses</a></li>
										<li><a href="#">Shoes</a></li>
										<li><a href="#">Handbages</a></li>
										<li><a href="#">Clothing</a></li>
									</ul>
								</div>
							</div><!-- End Shop Layout Area -->
							<!-- Popular Tag Area -->
							<div class="popular-tag-area">
								<div class="tag-title">
									<h2>Popular Tags</h2>
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
					<div class="col-lg-9">
						<div class="row">
							<div class="col-lg-12">
								<!-- Map area -->
								<div class="map-area">
									<div id="googleMap"><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14900.770191597583!2d105.86686842069835!3d20.98491741095089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zTmfDtSAyOTYgTMSpbmggTmFtLCBMxKluaCBOYW0sIEhhaSBCw6AgVHLGsG5nLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1593879823867!5m2!1svi!2s" width="100%" height="410" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
								</div><!-- End Map area -->
							</div>
						</div>
						<div class="row">
							<!-- contact info -->
							<div class="col-lg-6 col-md-12 col-12">
								<div class="contact-info">
									<h3>Contact info</h3>
									<ul>
										<li>
											<i class="fa fa-map-marker"></i> <strong>Address</strong>
											1234 Pall Mall Street, London England
										</li>
										<li>
											<i class="fa fa-envelope"></i> <strong>Phone</strong>
											(800) 0123 4567 890
										</li>
										<li>
											<i class="fa fa-mobile"></i> <strong>Email</strong>
											<a href="#">admin@bootexperts.com</a>
										</li>
									</ul>
								</div>
							</div><!-- End contact info -->
							<div class="col-lg-6 col-md-12 col-12">
								<div class="contact-form">
									<h3><i class="fa fa-envelope-o"></i> Leave a Message</h3>
                                    <form action="https://demo.hasthemes.com/selphy-preview/selphy/mail.php" method="post">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <input name="name" type="text" placeholder="Name (required)" />
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <input name="email" type="email" placeholder="Email (required)" />
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <input name="subject" type="text" placeholder="Subject" />
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                                <input type="submit" value="Submit Form" />
                                            </div>
                                        </div>
                                    </form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- End Eontact area -->
</body>
@endsection