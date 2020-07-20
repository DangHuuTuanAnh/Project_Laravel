@extends('backend.layouts.master')
@section('title')
Chi Tiết Sản Phẩm
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<!-- Content Header -->
	<section class="content">

    <!-- Default box -->
    <div class="card card-solid">
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-sm-6">
           {{--  <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3> --}}
           @foreach($image as $img)
           <div class="col-12">
            <img src="{{$img->path}}" class="product-image" alt="Product Image">
          </div>
          @endforeach
          <div class="col-12 product-image-thumbs">
           @foreach($images as $image)
           <div class="product-image-thumb active"><img src="{{$image->path}}" alt="Product Image"></div>
           @endforeach

         </div>
       </div>
       <div class="col-12 col-sm-6">
        <h3 class="my-3">{{$product->name}}</p>
          <hr>
          <div class="bg-gray py-2 px-3 mt-4">
            <h2 class="mb-0">
              Giá bán: {{number_format($product->sale_price)}} VNĐ
            </h2>
            <h4 class="mt-0">
              <small>Giá gốc: {{number_format($product->origin_price)}} VNĐ</small>
            </h4>
          </div>
          <br>
          <div style="text-align: center;font-size: 20px;">
           <table class="table table-bordered">
            <thead>
              <tr>
                <th colspan="2">Thông số kỹ thuật</th>
              </tr>
            </thead>
            <tbody>
              @if($arr_config != null)
              @foreach($arr_config as $key => $value)
              <tr>
                <td><b>{{$key}}</b></td>
                <td>{{$value}}</td>
              </tr>
              @endforeach
              @endif
            </tbody>
          </table>
        </div>

      </div>
    </div>
    <div class="row mt-4">
      <nav class="w-100">
        <div class="nav nav-tabs" id="product-tab" role="tablist">
          <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Mô tả</a>
          <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Đánh giá sản phẩm</a>
               {{--   <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a>
             </div> --}}
           </nav>
           <div class="tab-content p-3" id="nav-tabContent">
            <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">{!!$product->content !!}</div>
            <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <a href="{{ route('backend.product.index') }}" class="btn btn-light">Quay Lại</a>
      </div>
    </div>
    <!-- /.card -->

  </section>
</div>
</section>
@endsection

