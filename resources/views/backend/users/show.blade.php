    @extends('backend.layouts.master')
    @section('title')
    Trang Thông tin cá nhân
    @endsection

    @section('content')
    <div class="wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
       <!-- Content Header -->
       <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Thông tin các nhân</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Người dùng</a></li>
              <li class="breadcrumb-item active">Thông tin</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <!-- Content -->
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                  src="{{$user->avatar}}"
                  alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$user->name}}</h3>

                <p class="text-muted text-center">{{$user->email}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Vai trò:</b> <a class="float-right">
                      @if($user->role == 0)
                      Khách hàng
                      @elseif($user->role == 1)
                      Quản lý
                      @elseif($user->role == 2)
                      Admin
                      @else
                      Cộng tác viên
                      @endif
                    </a>
                  </li>
                  <li class="list-group-item">
                    <b>Số điện thoại:</b> <a class="float-right">0{{$user->phone}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Địa chỉ</b>
                    <a class="float-right">{{$user->address}}</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Bài viết gần đây</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Đơn hàng đã mua</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Chỉnh sửa</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    {{-- @if($posts != null) --}}
                    @foreach($posts as $post)
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="{{$post->thumbnail}}" alt="user image">
                        <span class="username">
                          <a href="#">{{$post->name}}</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Shared publicly - 7:30 PM today</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        {{$post->description}}
                      </p>

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    @endforeach

                    {{-- @endif --}}

                    <!-- /.post -->


                  </div>
                  <!-- /.tab-pane -->
                  @foreach($orders as $order) 

                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-danger">
                          Đặt hàng: {{$order->updated_at}}
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-envelope bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 12:05</span>

                          <h3 class="timeline-header">Mã đơn hàng:<a href="#"> DH{{$order->id}}</a></h3>

                          <div class="timeline-body">
                           <p>Tổng giá trị đơn hàng :{{$order->total_price}} đ</p>
                           <p>Tổng sản phẩm: {{$order->total_qty}}</p>
                         </div>
                         <div class="timeline-footer">
                          <a href="{{route('backend.order.show',$order->id)}}" class="btn btn-primary btn-sm">Xem chi tiết</a>
                        </div>
                      </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                     {{--  <div>
                        <i class="fas fa-user bg-info"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                          <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                          </h3>
                        </div>
                      </div> --}}
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      {{-- <div>
                        <i class="fas fa-comments bg-warning"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                          <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                          <div class="timeline-body">
                            Take me to your leader!
                            Switzerland is small and neutral!
                            We are more like Germany, ambitious and misunderstood!
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                          </div>
                        </div>
                      </div> --}}
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-success">
                          @if($order->status == 0)
                          <i class="fa fa-shopping-cart"></i> Đã đặt hàng
                          @elseif($order->status == 1)
                          <i class="fa fa-truck"></i> Đang xử lý
                          @elseif($order->status == 2)
                          <i class="fa fa-cube"></i> Đã nhận
                          @else
                          <i class="fa fa-refresh"></i> Hoàn trả
                          @endif
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                     {{--  <div>
                        <i class="fas fa-camera bg-purple"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                          <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                          <div class="timeline-body">
                            <img src="http://placehold.it/150x100" alt="...">
                            <img src="http://placehold.it/150x100" alt="...">
                            <img src="http://placehold.it/150x100" alt="...">
                            <img src="http://placehold.it/150x100" alt="...">
                          </div>
                        </div>
                      </div> --}}
                      <!-- END timeline item -->
                      <div>
                        <i class="fa fa-check bg-success"></i>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Họ và tên:</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Nhập họ và tên...">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Nhập email..">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Số điện thoại</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Nhập số điện thoại..">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Địa chỉ</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Nhập địa chỉ..."></textarea>
                        </div>
                      </div>
{{-- <div class="form-group row">
    <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
  </div>
</div> --}}
<div class="form-group row">
  <div class="offset-sm-2 col-sm-10">
    <div class="checkbox">
      <label>
        <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
      </label>
    </div>
  </div>
</div>
<div class="form-group row">
  <div class="offset-sm-2 col-sm-10">
    <button type="submit" class="btn btn-danger">Cập nhật</button>
  </div>
</div>
</form>
</div>
<!-- /.tab-pane -->
</div>
<!-- /.tab-content -->
</div><!-- /.card-body -->
</div>
<!-- /.nav-tabs-custom -->
</div>
<!-- /.col -->
</div><!-- /.container-fluid -->

</div>
<div>
  <a href="{{ route('backend.user.index') }}" class="btn btn-light">Quay Lại</a>
</div>
</section>
@endsection

