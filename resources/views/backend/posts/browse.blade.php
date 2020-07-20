@extends('backend.layouts.master')
@section('title')
Trang Quản Lý Bài Viết
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<!-- Content Header -->
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Danh sách Bài Viết</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Bài viết</a></li>
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
						<h3 class="card-title">Danh sách bài viết</h3>

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
									<th>Ảnh mô tả</th>
									<th>Tiêu đề bài viết</th>
									<th>Mô tả bài viết</th>
									<th>Ngày tạo</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								@foreach($browse_posts as $post)
								<tr>
									<td>{{$post->id}}</td>
									<td><img style="width: 150px;height: 110px;" src="{{$post->thumbnail}}"></td>
									<td style="width: 30%;">{{$post->name}}</td>
									<td style="width: 30%;">{{$post->description}}</td>
									
									<td>
										{{-- <div class="row"> --}}
											@can('browse-post',$post)
											<form style="margin-bottom: 5px; " action="{{route('frontend.home.blogdetail',$post->id)}}">
												<button type="submit" class="btn btn-success">
													<i class="fa fa-btn fa-eye"></i>
												</button>
											</form>
											<form style="margin-bottom: 5px; " action="{{route('backend.post.browsepost',$post->id)}}" >
												<button type="submit" class="btn btn-primary">
													<i class="fa fa-btn fa-check"></i>
												</button>
											</form>
											<form style="margin-bottom: 5px; " action="{{route('backend.post.destroy',$post->id)}}" >
												{{ csrf_field() }}
												{{ method_field('DELETE') }}
												<button type="submit" class="btn btn-danger">
													<i class="fa fa-btn fa-trash-alt"></i>
												</button>
											</form>
											@endcan
											@cannot('browse',$post)
											<form style="margin-bottom: 5px; " action="{{route('frontend.home.blogdetail',$post->id)}}">
												<button type="submit" class="btn btn-success">
													<i class="fa fa-btn fa-eye"></i>
												</button>
											</form>
											@endcannot
										{{-- </div> --}}
										
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					{{-- {!! $products->links() !!} --}}
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

