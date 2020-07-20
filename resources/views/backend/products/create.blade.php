@extends('backend.layouts.master')
@section('title')
Trang Thêm Mới Sản Phẩm
@endsection

@section('css')
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}

@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Tạo sản phẩm</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
					<li class="breadcrumb-item active">Tạo sản phẩm</li>
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
						<h3 class="card-title">Tạo sản phẩm</h3>
					</div>
					<!-- /.card-header -->
					<!-- form start -->
					<form role="form" method="post" action="{{ route('backend.product.store') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="card-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Tên sản phẩm</label>
								<input type="text" name="name" class="form-control" id="" placeholder="Điền tên sản phẩm" value="{{old('name')}}">
								@error('name')
								<p style="color: red;">{{$message}}</p>
								@enderror
							</div>
							<div class="form-group">
								<label for="exampleInputFile">Ảnh mô tả</label>
								<div class="input-group">
									<div class="custom-file">
										<input name="thumbnail" type="file" class="custom-file-input" id="exampleInputFile">
										<label class="custom-file-label" for="exampleInputFile">Choose file</label>
									</div>
									<div class="input-group-append">
										<span class="input-group-text" id="">Upload</span>
									</div>
								</div>
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
							<div class="row">
								<div class="col-4">
									<div class="form-group">
										<label>Giá gốc(VNĐ)</label>
										<input type="text" name="origin_price" class="form-control" placeholder="Điền giá gốc" value="{{old('origin_price')}}">
									</div>
									@error('origin_price')
									<p style="color: red;">{{$message}}</p>
									@enderror
								</div>
								<div class="col-4">
									<div class="form-group">
										<label>Giảm giá(%)</label>
										<input type="text" name="discount_percent" class="form-control" placeholder="Điền phần trăm giảm giá" value="{{old('sale_price')}}">
									</div>
									{{-- @error('sale_price')
									<p style="color: red;">{{$message}}</p>
									@enderror --}}
								</div>
								<div class="col-4">
									<div class="form-group">
										<label>Thời gian khuyến mại</label>
										<input type="date" name="date_discount" class="form-control" placeholder="Điền giá bán" value="">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Mô tả sản phẩm</label>
								<textarea class="textarea" name="content" placeholder="Place some text here"
								style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" value="{{old('content')}}}"></textarea>
								@error('content')
								<p style="color: red;">{{$message}}</p>
								@enderror
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Thông số kỹ thuật</label>
								<div id="config">
									<div id="config_0" class="row">
										<div class="col-5">
											<input class="form-control" type="text" name="key[]" placeholder="Tên thông số">
										</div>
										<div class="col-5">
											<input class="form-control" type="text" name="value[]" placeholder="Thông số">
										</div>
										<div class="col-2">
											<button class="add btn"><i class="fa fa-plus-square"></i></button>
											<button class="minus btn"><i class="fa fa-times"></i></button>
										</div>
									</div>
									<br>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputFile">Hình ảnh sản phẩm</label>
								<div class="input-group">
									<div class="custom-file">
										<input name="images[]" multiple type="file" class="custom-file-input" id="exampleInputFile">
										<label class="custom-file-label" for="exampleInputFile">Choose file</label>
									</div>
									<div class="input-group-append">
										<span class="input-group-text" id="">Upload</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Trạng thái sản phẩm</label>
								<select name="status" class="form-control select2" style="width: 100%;">
									<option>--Chọn trạng thái---</option>
									<option value="0">Đang nhập</option>
									<option value="1">Mở bán</option>
									<option value="-1">Hết hàng</option>
								</select>
							</div>
						</div>
						<!-- /.card-body -->

						<div class="card-footer">
							<a href="{{ route('backend.product.index') }}" class="btn btn-default">Huỷ bỏ</a>
							<button id="submit-form" type="submit" class="btn btn-success">Tạo mới</button>
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

@section('script')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script type="text/javascript">
	$(document).ready(function () {
		var index = 1;
		$(document).on("click",".add",function (e) {
			e.preventDefault();
            // $("#config").append(" <div id='div"+ index +"'>\n" +
            //     "        <input type=\"text\" name=\"key[]\" placeholder=\"key\">\n" +
            //     "        <input type=\"text\" name=\"value[]\" placeholder=\"value\">\n" +
            //     "        <button class=\"add\">+</button>\n" +
            //     "        <button class=\"minus\" data-id=\"div"+ index++ +"\">-</button>\n" +
            //     "    </div>");
            $("#config").append(`<div id="div`+ index +`" class="row">
            	<div class="col-5">
            	<input class="form-control" type="text" name="key[]" placeholder="Tên thông số">
            	</div>
            	<div class="col-5">
            	<input class="form-control" type="text" name="value[]" placeholder="Thông số">
            	</div>
            	<div class="col-2">
            	<button class="add btn"><i class="fa fa-plus-square"></i></button>
            	<button class="minus btn" data-id="div`+ index++ +`"><i class="fa fa-times"></i></button>
            	</div>
            	</div><br>`);
            console.log(index);
        });
		$(document).on("click",".minus",function () {
			let id = $(this).data("id");
			$("#"+id).remove();
		});
		$(document).on("click","#submit-form",function () {
			$("#config").submit();
		})
	})
</script>

@endsection

