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
								<h2><i class="fa fa-file"></i>Thông tin của tôi</h2>
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
											<li class="list-group-item">
												<b>Đơn hàng đã mua:</b> <a class="float-right"></a>
											</li>
										</ul>
									</div>
									<!-- /.card-body -->
								{{-- </div> --}}
								<!-- /.card -->
							</div>
						</div>
						
					</div>
					<br>
					<div class="new-customers customer">
						<div class="customer-inner">
							<div class="user-title">
								<h2><i class="fa fa-shopping-cart"></i></i>Đơn hàng của tôi</h2>
							</div>
							<div class="user-content">
								<div class="accordion" id="accordionExample">
									<div class="card">
										<div class="card-header" id="headingOne">
											<h2 class="mb-0">
												<button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													Collapsible Group Item #1
												</button>
											</h2>
										</div>

										<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
											<div class="card-body">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="headingTwo">
											<h2 class="mb-0">
												<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
													Collapsible Group Item #2
												</button>
											</h2>
										</div>
										<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
											<div class="card-body">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="headingThree">
											<h2 class="mb-0">
												<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
													Collapsible Group Item #3
												</button>
											</h2>
										</div>
										<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
											<div class="card-body">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="resestered-customers customer">
						<div class="customer-inner">
							<div class="user-title">
								<h2><i class="fa fa-pencil-square"></i></i>Cập nhật thông tin</h2>
							</div>
							{{-- <div class="user-content">
								<p>If you have an account with us, please log in.</p>
							</div> --}}
							<div class="account-form">
								<form action="{{route('frontend.home.update_account',$user->id)}}" method="POST" role="form" enctype="multipart/form-data">
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
											<label>Ảnh đại diện</label>
											<div class="input-group">
												<div class="custom-file">
													<input class="form-control" type="file" name="avatar">
												</div>
											</div>
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