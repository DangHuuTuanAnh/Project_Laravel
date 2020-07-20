@extends('backend.layouts.master')
@section('title')
Trang Thêm Mới Bài Viết
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Tạo mới bài viết</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Bài viết</a></li>
					<li class="breadcrumb-item active">Tạo mới</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
	<!-- Content -->
	<div class="container-fluid">
		<!-- Main row -->
		<div class="row">
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Tạo mới bài viết</h3>
					</div>
					<!-- /.card-header -->
					<!-- form start -->
					<form role="form" method="post" action="{{ route('backend.post.store') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="card-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Tiêu đề bài viết</label>
								<input type="text" name="name" class="form-control" id="" placeholder="Điền tiêu đề bài viết" value="{{old('name')}}">
								@error('name')
								<p style="color: red;">{{$message}}</p>
								@enderror
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Mô tả bài viết</label>
								<input type="text" name="description" class="form-control" id="" placeholder="Điền mô tả bài viết" value="{{old('name')}}">
								@error('name')
								<p style="color: red;">{{$message}}</p>
								@enderror
							</div>
							<div class="form-group">
								<label>Danh mục sản phẩm</label>
								<select name="category_id" class="form-control select2" style="width: 100%;">
									<option>--Chọn danh mục---</option>
									@foreach($categories as $category)
									<option value="{{ $category->id }}">{{ $category->name }}</option>
									@endforeach
								</select>
								
							</div>
							
							<div class="form-group">
								<label for="exampleInputEmail1">Nội dung bài viết</label>
								<textarea id="summernote" class="textarea" name="content" placeholder="Place some text here"
								style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" value="{{old('content')}}"></textarea>
								@error('content')
								<p style="color: red;">{{$message}}</p>
								@enderror
							</div>
							<div class="form-group">
								<label for="exampleInputFile">Ảnh mô tả</label>
								<div class="input-group">
									<div class="custom-file">
										<input name="thumbnail"  type="file" class="custom-file-input" id="exampleInputFile">
										<label class="custom-file-label" for="exampleInputFile">Choose file</label>
									</div>
									<div class="input-group-append">
										<span class="input-group-text" id="">Upload</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /.card-body -->

						<div class="card-footer">
							<a href="{{ route('backend.product.index') }}" class="btn btn-default">Huỷ bỏ</a>
							<button type="submit" class="btn btn-success">Tạo mới</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /.row (main row) -->
	</div><!-- /.container-fluid -->
</div>
</section>
@endsection

