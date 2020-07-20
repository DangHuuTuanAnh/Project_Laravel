<!-- Quickview Product -->
<div id="quickview-wrapper">
	<!-- Modal -->
	<div class="modal fade" id="productModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="modal-product">
						<div class="product-images">
							<div class="main-image images">
								<img alt="product" src="{{URL::asset('frontend/img/products/s1.jpg')}}">
							</div>
						</div><!-- End product-images -->
						<div class="product-info">
							<h1>Proin lectus ipsum</h1>
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
							<p class="availability in-stock">Availability: <span>In stock</span></p>
							<div class="quick-desc">
								Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti
							</div>
							<div class="price-box">
								<p class="price"><span class="special-price"><span class="amount">$155.00</span></span></p>
							</div>
							<div class="quick-add-to-cart">
								<form method="post" class="cart">
									<div class="qty-button"> 	
										<input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">

										<div class="box-icon button-plus"> 
											<input type="button" class="qty-increase " onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;" value="+">
										</div>	
										<div class="box-icon button-minus">
											<input type="button" class="qty-decrease" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) qty_el.value--;return false;" value="-">
										</div>
									</div>
									<div class="product-actions">
										<button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button>
									</div>
								</form>
							</div>
							<div class="social-sharing">
								<div class="widget widget_socialsharing_widget">
									<h3 class="widget-title-modal">Share this product</h3>
									<ul class="social-icons">
										<li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
										<li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
										<li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
										<li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
										<li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div><!-- End product-info -->
					</div><!-- End modal-product -->
				</div><!-- End modal-body -->
			</div><!-- End modal-content -->
		</div><!-- End modal-dialog -->
	</div><!-- End Modal -->
			</div><!-- End Quickview Product -->