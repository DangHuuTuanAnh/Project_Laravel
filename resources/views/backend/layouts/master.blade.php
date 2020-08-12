<!-- resources/views/layouts/master.blade.php-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	{{-- <title>AdminLTE 3 | Dashboard</title> --}}
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{URL::asset('asset/plugins/fontawesome-free/css/all.min.css')}}">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bbootstrap 4 -->
	<link rel="stylesheet" href="{{URL::asset('asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
	<!-- iCheck -->
	<link rel="stylesheet" href="{{URL::asset('asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
	<!-- JQVMap -->
	<link rel="stylesheet" href="{{URL::asset('asset/plugins/jqvmap/jqvmap.min.css')}}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{URL::asset('asset/dist/css/adminlte.min.css')}}">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="{{URL::asset('asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="{{URL::asset('asset/plugins/daterangepicker/daterangepicker.css')}}">
	<!-- summernote -->
	<link rel="stylesheet" href="{{URL::asset('asset/plugins/summernote/summernote-bs4.css')}}">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
	<title>@yield('title')</title>
	@yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
	<div>
		@include('backend.includes.header')
	</div>
	<div>
		@yield('content')
	</div>
	<div>
		@include('backend.includes.footer')
	</div>
	@yield('script')
	<script src="{{URL::asset('asset/plugins/jquery/jquery.min.js')}}"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="{{URL::asset('asset/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
		$.widget.bridge('uibutton', $.ui.button)
	</script>
	<!-- Bootstrap 4 -->
	<script src="{{URL::asset('asset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<!-- ChartJS -->
	<script src="{{URL::asset('asset/plugins/chart.js/Chart.min.js')}}"></script>
	<!-- Sparkline -->
	<script src="{{URL::asset('asset/plugins/sparklines/sparkline.js')}}"></script>
	<!-- JQVMap -->
	<script src="{{URL::asset('asset/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
	<script src="{{URL::asset('asset/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
	<!-- jQuery Knob Chart -->
	<script src="{{URL::asset('asset/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
	<!-- daterangepicker -->
	<script src="{{URL::asset('asset/plugins/moment/moment.min.js')}}"></script>
	<script src="{{URL::asset('asset/plugins/daterangepicker/daterangepicker.js')}}"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="{{URL::asset('asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
	<!-- Summernote -->
	<script src="{{URL::asset('asset/plugins/summernote/summernote-bs4.min.js')}}"></script>
	<!-- overlayScrollbars -->
	<script src="{{URL::asset('asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
	<!-- AdminLTE App -->
	<script src="{{URL::asset('asset/dist/js/adminlte.js')}}"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="{{URL::asset('asset/dist/js/pages/dashboard.js')}}"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="{{URL::asset('asset/dist/js/demo.js')}}"></script>

	<script src="{{URL::asset('asset/dist/js/myscript.js')}}"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

	
	
	<script>
		// $('#summernote').summernote({
		// 	height:200;
		// });
		$('#summernote').summernote({
			height: 200
		});
		$(document).ready( function () {
			$('#table_id').DataTable();
		} );
	</script>
</body>
</html>
