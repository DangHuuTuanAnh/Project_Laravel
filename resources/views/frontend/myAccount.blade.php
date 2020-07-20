@extends('frontend.layouts1.master')
@section('title')
MY ACCOUNT
@endsection

@section('content')
<body>
	<!-- My Account Area -->
	<div class="my-account-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="page-title">
						<h2>Thông tin cá nhân</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="new-customers customer">
						<div class="customer-inner">
							<div class="user-title">
								<h2><i class="fa fa-file"></i>Quản lý thông tin</h2>
							</div>
							<div class="user-content">
								<!-- Profile Image -->
								{{-- <div class="card card-primary card-outline"> --}}
									<div class="card-body box-profile">
										<div class="text-center">
											<img style="border-radius: 30%;
											width: 150px;" class="profile-user-img img-fluid img-circle"
											src="{{$user->avatar}}"
											alt="User profile picture">
										</div>

										<h3 class="profile-username text-center">{{$user->name}}</h3>

										{{-- <p class="text-muted text-center">Software Engineer</p> --}}

										<ul class="list-group list-group-unbordered mb-3">
											<li class="list-group-item">
												<b>Email</b> <a class="float-right">{{$user->email}}</a>
											</li>
											<li class="list-group-item">
												<b>Số điện thoại:</b> <a class="float-right">0{{$user->phone}}</a>
											</li>
											<li class="list-group-item">
												<b>Địa chỉ:</b> <a class="float-right">{{$user->address}}</a>
											</li>
											
										</ul>
									</div>
									<!-- /.card-body -->
								{{-- </div> --}}
								<!-- /.card -->
							</div>
						</div>
						
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="resestered-customers customer">
						<div class="customer-inner">
							<div class="user-title">
								<h2><i class="fa fa-file-text"></i>Cập nhật thông tin</h2>
							</div>
							{{-- <div class="user-content">
								<p>If you have an account with us, please log in.</p>
							</div> --}}
							<div class="account-form">
								<form action="{{route('backend.user.update',$user->id)}}" method="POST" role="form" enctype="multipart/form-data">
									{{ csrf_field() }}
									<div class="card-body">
										<div class="form-group">
											<label for="exampleInputEmail1">Tên</label>
											<input type="text" class="form-control" id="" placeholder="Tên người dùng..." name ='name' value="{{$user->name}}">
											@error('name')
											<p style="color: red;">{{$message}}</p>
											@enderror
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Email</label>
											<input type="email" class="form-control" id="" placeholder="Email..." name="email" value="{{$user->email}}">
											@error('email')
											<p style="color: red;">{{$message}}</p>
											@enderror
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Số điện thoại</label>
											<input type="phone" class="form-control" id="" placeholder="Số điện thoại..." name="phone" value="0{{$user->phone}}">
											@error('phone')
											<p style="color: red;">{{$message}}</p>
											@enderror
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Địa chỉ</label>
											<input type="text" class="form-control" id="" placeholder="địa chỉ..." name="address" value="{{$user->address}}">
											@error('address')
											<p style="color: red;">{{$message}}</p>
											@enderror
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Mật khẩu</label>
											<input type="password" class="form-control" id="" name="password" value="">
											@error('password')
											<p style="color: red;">{{$message}}</p>
											@enderror
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Xác nhận lại mật khẩu</label>
											<input type="password" class="form-control" id="" name="password_confirmation" value="">
											@error('password_confirmation')
											<p style="color: red;">{{$message}}</p>
											@enderror
										</div>
										{{-- <div class="form-group">
											<label for="exampleInputFile">Ảnh đại diện</label>
											<div class="input-group">
												<div class="custom-file">
													<input name="avatar"  type="file" class="custom-file-input" id="exampleInputFile">
													<label class="custom-file-label" for="exampleInputFile">Choose file</label>
												</div>
												<div class="input-group-append">
													<span class="input-group-text" id="">Upload</span>
												</div>
											</div>
										</div> --}}
									</div>
									<!-- /.card-body -->

									<div class="card-footer">
										<button type="submit" class="btn btn-info">Lưu</button>
									</div>
								</form>
							</div>
							
						</div>
						{{-- <div class="user-bottom fix">
							<div class="user-bottom-inner">
								<a href="#">Forgot Your Password?</a>
								<button class="btn custom-button" type="button">login</button>
							</div>
						</div> --}}
					</div>
				</div>
			</div>
		</div>
	</div><!-- End My Account Area -->
</body>
@endsection