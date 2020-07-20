@extends('backend.layouts.master')
@section('title')
Trang Quản Lý Đơn Hàng
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<!-- Content Header -->
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Danh sách đơn hàng</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Đơn hàng</a></li>
					<li class="breadcrumb-item active">Danh sách</li>
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
						<h3 class="card-title">Tổng số đơn hàng: {{count($orders)}} </h3>

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
						<table class="table table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Tên khách hàng</th>
									<th>Số lượng sản phẩm đã mua</th>
									<th>Giá trị đơn hàng</th>
									<th>Trạng thái</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								@foreach($orders as $order)
								<tr>
									<td>{{$order->id}}</td>
									<td>{{$order->user_name}}</td>
									<td>{{$order->total_qty}} sản phẩm </td>
									<td>{{$order->total_price}} đ</td>
									<td>
										@if($order->status == 0)
										<form style="margin-bottom: 5px; " action="{{route('backend.order.processing',$order->id)}}" >
											<button type="submit" class="btn btn-primary">
												Đã đặt
											</button>
										</form>
										@elseif($order->status ==1)
										<form style="margin-bottom: 5px; " action="{{route('backend.order.delivered',$order->id)}}" >
											<button type="submit" class="btn btn-warning">
												Đang Xử lý
											</button>
										</form>
										@elseif($order->status ==2)
										<form style="margin-bottom: 5px; " action="{{route('backend.order.toreturn',$order->id)}}" >
											<button type="submit" class="btn btn-success">
												Đã giao hàng
											</button>
										</form>
										@else
										<form style="margin-bottom: 5px; " action="" >
											<button type="submit" class="btn btn-secondary">
												Hoàn trả
											</button>
										</form>
										@endif
									</td>
									<td>
										<form style="margin-bottom: 5px; " action="{{route('backend.order.show',$order->id)}}">
											<button type="submit" class="btn btn-success">
												<i class="fa fa-btn fa-eye"></i>
											</button>
										</form>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					{!! $orders->links() !!}
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
		</div>
		<!-- /.row (main row) -->
	</div><!-- /.container-fluid -->
</div>
</section>
@endsection

