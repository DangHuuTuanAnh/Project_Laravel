    @extends('backend.layouts.master')
    @section('title')
    Trang Quản Lý Người Dùng
    @endsection

    @section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
         <!-- Content Header -->
         <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Danh sách người dùng</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Người dùng</a></li>
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
                            {{-- <h3 class="card-title">Danh sách người dùng</h3> --}}
                            <br>
                            @if(session()->has('success'))
                            <div class="alert alert-success">
                                <strong>Success!</strong> {{session()->get('success')}}
                            </div>
                            @endif

                            @if(session()->has('error'))
                            <span style="color: red;">{{session()->get('error')}}</span>
                            @endif
                            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Thêm mới</button>
                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title">Tạo mới</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="member_form" action="{{route('backend.user.store')}}" method="POST" role="form" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Tên người dùng</label>
                                                    <input type="text" class="form-control" id="" placeholder="Tên người dùng" name ='name' value="{{old('name')}}">
                                                    @error('name')
                                                    <p style="color: red;">{{$message}}</p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="email" class="form-control" id="" placeholder="Email" name="email" value="{{old('email')}}">
                                                    @error('email')
                                                    <p style="color: red;">{{$message}}</p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Mật khẩu</label>
                                                    <input type="password" class="form-control" id="" name="password">
                                                    @error('password')
                                                    <p style="color: red;">{{$message}}</p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Xác nhận mật khẩu</label>
                                                    <input type="password" class="form-control" id="" name="password_confirmation">
                                                    @error('password_confirmation')
                                                    <p style="color: red;">{{$message}}</p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Số điện thoại</label>
                                                    <input type="phone" class="form-control" id="" name="phone" value="{{old('phone')}}">
                                                    @error('phone')
                                                    <p style="color: red;">{{$message}}</p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Địa chỉ</label>
                                                    <input type="text" class="form-control" id="" name="address" value="{{old('address')}}">
                                                    @error('address')
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
                                                </div>
                                                <div class="form-group">
                                                    <label>Phân Quyền</label>
                                                    <select name="role" class="form-control select2" style="width: 100%;">
                                                        <option>--Chọn quyền---</option>
                                                        <option value="1">Admin</option>
                                                        <option value="0">User</option>
                                                        <option value="2">Cộng tác viên</option>
                                                    </select>
                                                    @error('role')
                                                    <p style="color: red;">{{$message}}</p>
                                                    @enderror

                                                    {{-- action --}}
                                                    <input type="hidden" name="action" id="action" class="form-control"></input>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->

                                            <div class="card-footer">
                                                <a href="{{ route('backend.user.index') }}" class="btn btn-primary">Huỷ bỏ</a>
                                                <button id="create" type="submit" class="btn btn-success">Tạo mới</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="btn_update" type="button" class="btn btn-default " data-dismiss="modal">Thêm mới</button>
                                    </div>
                                </div>
                            </div>
                        </div>

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
                                    <th>Tên</th>
                                    <th>Ảnh đại diện</th>
                                    <th>Email</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td><img style="width: 70px;" src="{{$user->avatar}}"></td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <div class="row">
                                            @can('create')
                                            <form style="margin-right: 5px; " action="{{route('backend.user.show',$user->id)}}">
                                                <button type="submit" class="btn btn-success">
                                                    <i class="fa fa-btn fa-eye"></i>
                                                </button>
                                            </form>
                                            <form style="margin-right: 5px; " action="{{route('backend.user.edit',$user->id)}}" >

                                                <button id="update" type="submit" class="btn btn-primary">
                                                    <i class="fa fa-btn fa-edit"></i>
                                                </button>
                                            </form>
                                            <form style="margin-right: 5px; " action="{{route('backend.user.destroy',$user->id)}}" >
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash-alt"></i>
                                                </button>
                                            </form>
                                            @endcan
                                            @cannot('create')
                                            <form style="margin-right: 5px; " action="{{route('backend.user.show',$user->id)}}">
                                                <button type="submit" class="btn btn-success">
                                                    <i class="fa fa-btn fa-eye"></i>
                                                </button>
                                            </form>
                                            @endcannot
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    {!! $users->links() !!}
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

