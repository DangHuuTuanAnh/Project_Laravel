<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	{{-- <title>Home-Three || Selphy</title> --}}
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon
			============================================ -->		
			<link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('frontend1/img/logo/favicon.ico')}}">


		<!-- Google Fonts
			============================================ -->		
			<link href='http://fonts.googleapis.com/css?family=Open+Sans:200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css' />

		<!-- Bootstrap CSS
			============================================ -->		
			<link rel="stylesheet" href="{{URL::asset('frontend1/css/bootstrap.min.css')}}">
		<!-- Font Awesome CSS
			============================================ -->
			<link rel="stylesheet" href="{{URL::asset('frontend1/css/font-awesome.min.css')}}">
		<!-- Mean Menu CSS
			============================================ -->      
			<link rel="stylesheet" href="{{URL::asset('frontend1/css/meanmenu.min.css')}}">
		<!-- owl.carousel CSS
			============================================ -->
			<link rel="stylesheet" href="{{URL::asset('frontend1/css/owl.carousel.css')}}">
			<link rel="stylesheet" href="{{URL::asset('frontend1/css/owl.theme.css')}}">
			<link rel="stylesheet" href="{{URL::asset('frontend1/css/owl.transitions.css')}}">
		<!-- nivo-slider css
			============================================ --> 
			<link rel="stylesheet" href="{{URL::asset('frontend1/css/nivo-slider.css')}}">
		<!-- Price slider css
			============================================ --> 
			<link rel="stylesheet" href="{{URL::asset('frontend1/css/jquery-ui-slider.css')}}">
		<!-- Simple Lence css
			============================================ --> 
			<link rel="stylesheet" type="text/css" href="{{URL::asset('frontend1/css/jquery.simpleLens.css')}}">
			<link rel="stylesheet" type="text/css" href="{{URL::asset('frontend1/css/jquery.simpleGallery.css')}}">
		<!-- normalize CSS
			============================================ -->
			<link rel="stylesheet" href="{{URL::asset('frontend1/css/normalize.css')}}">
		<!-- main CSS
			============================================ -->
			<link rel="stylesheet" href="{{URL::asset('frontend1/css/main.css')}}">
		<!-- style CSS
			============================================ -->
			<link rel="stylesheet" href="{{URL::asset('frontend1/style.css')}}">
		<!-- responsive CSS
			============================================ -->
			<link rel="stylesheet" href="{{URL::asset('frontend1/css/responsive.css')}}">
		<!-- modernizr JS
			============================================ -->		
			<script src="{{URL::asset('frontend1/js/vendor/modernizr-2.8.3.min.js')}}"></script>
			<title>@yield('title')</title>
			@yield('css')
		</head>
		<body>
			<div>
				@include('frontend.includes1.header')
			</div>
			<div>
				@yield('content')
			</div>
			<div>
				@include('frontend.includes1.footer')
			</div>
			<div>
				@include('frontend.includes1.quickview')
			</div>
			
			
			
			<!-- jquery
				============================================ -->		
				<script src="{{URL::asset('frontend1/js/vendor/jquery-1.11.3.min.js')}}"></script>
        <!-- Popper JS
        	============================================ -->		
        	<script src="{{URL::asset('frontend1/js/popper.js')}}"></script>
		<!-- bootstrap JS
			============================================ -->		
			<script src="{{URL::asset('frontend1/js/bootstrap.min.js')}}"></script>
		<!-- nivo slider js
			============================================ --> 
			<script src="{{URL::asset('frontend1/js/jquery.nivo.slider.pack.js')}}"></script>
		<!-- Mean Menu js
			============================================ -->         
			<script src="{{URL::asset('frontend1/js/jquery.meanmenu.min.js')}}"></script>
		<!-- price-slider JS
			============================================ -->		
			<script src="{{URL::asset('frontend1/js/jquery-price-slider.js')}}"></script>
		<!-- Simple Lence JS
			============================================ -->
			<script type="text/javascript" src="{{URL::asset('frontend1/js/jquery.simpleGallery.min.js')}}"></script>
			<script type="text/javascript" src="{{URL::asset('frontend1/js/jquery.simpleLens.min.js')}}"></script>	
		<!-- owl.carousel JS
			============================================ -->		
			<script src="{{URL::asset('frontend1/js/owl.carousel.min.js')}}"></script>
		<!-- scrollUp JS
			============================================ -->		
			<script src="{{URL::asset('frontend1/js/jquery.scrollUp.min.js')}}"></script>
		<!-- DB Click JS
			============================================ -->
			<script src="{{URL::asset('frontend1/js/dbclick.min.js')}}"></script>
		<!-- Countdown JS
			============================================ -->
			<script src="{{URL::asset('frontend1/js/jquery.countdown.min.js')}}"></script>
		<!-- plugins JS	
			============================================ -->		
			<script src="{{URL::asset('frontend1/js/plugins.js')}}"></script>
		<!-- main JS
			============================================ -->		
			<script src="{{URL::asset('frontend1/js/main.js')}}"></script>
			<script src="{{URL::asset('frontend1/js/jquery-3.5.1.min.js')}}"></script>
			<script src="{{URL::asset('asset/dist/js/myscript.js')}}"></script>
			@yield('script')
			<script>
				$(function(){
					$('.orderby').change(function(e) {
						$("#form_order").submit();
						
					})
				})
			</script>
		</body>
		</html>