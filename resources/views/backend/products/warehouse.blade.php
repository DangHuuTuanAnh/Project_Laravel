@extends('backend.layouts.master')
@section('title')
Trang Quản Lý Kho
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<!-- Content Header -->
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Danh sách sản phẩm</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
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
						<h3 class="card-title">Tổng số sản phẩm: {{count($all_products)}}</h3>

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
									<th>Tên sản phẩm</th>
									<th>Số lượng trong kho</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								@foreach($products as $product)
								<tr>
									<td>{{$product->id}}</td>
									<td>{{$product->name}}</td>
									{{-- <td>
										@foreach($thumbnails as $thumbnail)
										@if($thumbnail->product_id == $product->id)
										<img style="width: 100px; height: 90px;" src="{{$thumbnail->path}}">
										@endif
										@endforeach
									</td> --}}
									@if($product->amount > 10)
									<td><button type="button" class="btn btn-info">{{$product->amount}} sản phẩm</button></td>
									@elseif($product->amount > 0 && $product->amount < 10)
									<td><button type="button" class="btn btn-warning">Còn {{$product->amount}} sản phẩm!</button></td>
									@else
									<td ><button type="button" class="btn btn-danger">Hết hàng !</button></td>
									@endif
									
									<td>
										{{-- <div class="row"> --}}
											@can('update-product',$product)
											<form style="margin-bottom: 5px; " action="{{route('backend.product.edit',$product->id)}}" >

												
												<button type="submit" class="btn btn-primary">
													<i class="fa fa-btn fa-edit"></i>
												</button>
											</form>
											@endcan
											
										{{-- </div> --}}
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					{!! $products->links() !!}
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

