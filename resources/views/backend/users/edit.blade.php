@extends('backend.layouts.master')
@section('title')
Trang Cập Nhật Thông Tin Người Dùng
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header -->
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Cập nhật thông tin</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Người dùng</a></li>
                    <li class="breadcrumb-item active">Cập nhật</li>
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
                        <h3 class="card-title">Cập nhật thông tin</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
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
                                <input type="password" class="form-control" id="" name="password" value="{{$user->password}}">
                                @error('password')
                                <p style="color: red;">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Xác nhận lại mật khẩu</label>
                                <input type="password" class="form-control" id="" name="password_confirmation" value="{{$user->password}}">
                                @error('password_confirmation')
                                <p style="color: red;">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
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
                                <br>
                            </div>
                            <div class="form-group">
                                <label>Phân quyền</label>
                                <select name="role" class="form-control select2" style="width: 100%;">
                                    <option>--Chọn quyền---</option>
                                    <option value="1">Quản lý</option>
                                    <option value="2">Admin</option>
                                    <option value="0">User</option>
                                    <option value="3">Cộng tác viên</option>
                                </select>
                                @error('role')
                                <p style="color: red;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <a href="{{ route('backend.user.index') }}" class="btn btn-primary">Huỷ bỏ</a>
                            <button type="submit" class="btn btn-success">Cập nhật</button>
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
