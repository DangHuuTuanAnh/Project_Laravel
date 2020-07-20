@extends('backend.layouts.master')
@section('title')
Trang Chi Tiết Đơn Hàng
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header -->
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Chi tiết đơn hàng</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Đơn hàng</a></li>
					<li class="breadcrumb-item active">Chi tiết</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
	<!-- Content -->
	<div class="container-fluid">
		<!-- Main row -->
		<div class="row">

			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title"><b></b></h3>

						<div class="card-tools">
							<div class="input-group input-group-sm" style="width: 150px;">
								<input type="text" name="table_search" class="form-control float-right" placeholder="Search">

								<div class="input-group-append">
									<button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- /.card-header -->
					<div class="card-body table-responsive p-0">
						<table class="table table-hover" border="1px solid">
							<thead>
								<tr>
									<th colspan="5" style="text-align: center;">Thông tin khách hàng</th>
								</tr>
							</thead>
							<thead>
								<tr>
									<th>ID Đơn hàng</th>
									<th>Tên khách hàng</th>
									<th>Số điện thoại</th>
									<th>Email</th>
									<th>Địa chỉ</th>
								</tr>
							</thead>
							<tbody>
								<td>{{$order->id}}</td>
								<td>{{$order->user_name}}</td>
								<td>0{{$order->phone}}</td>
								<td>{{$order->email}}</td>
								<td>{{$order->address}}</td>
							</tbody>
							<thead>
								<tr>
									<th colspan="5" style="text-align: center;">Thông tin đơn hàng</th>
								</tr>
							</thead>
							<thead>
								{{-- <tr>Thông tin khách hàng</tr> --}}
								<tr>
									<th>ID Sản phẩm</th>
									<th>Tên sản phẩm</th>
									<th>Giá sản phẩm</th>
									<th>Số lượng</th>
									<th>Tổng giá</th>
								</tr>
								<tbody>
									@foreach($products as $product)
									<tr>
										<td>{{$product->id}}</td>
										<td>{{$product->name}}</td>
										<td>{{number_format($product->sale_price)}} đ</td>
										<td></td>
										<td></td>
									</tr>
									
									@endforeach
								</tbody>
							</thead>
							<tr>
								<td style="text-align: right;" colspan="4">Tổng số sản phẩm:</td>
								<td>{{$order->total_qty}}</td>
							</tr>
							<tr>
								<td style="text-align: right;" colspan="4">Tổng giá trị đơn hàng:</td>
								<td>{{$order->total_price}} đ</td>
							</tr>
						</table>

					</div>
					{{-- {!! $categories->links() !!} --}}
					<!-- /.card-body -->
				</div>
				<div class="card-footer">
					<a href="{{ route('backend.order.index') }}" class="btn btn-light">Quay Lại</a>
				</div>
				<!-- /.card -->
			</div>
		</div>
		<!-- /.row (main row) -->
	</div><!-- /.container-fluid -->
</div>
</section>
@endsection

