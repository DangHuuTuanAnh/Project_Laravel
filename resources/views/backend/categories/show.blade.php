@extends('backend.layouts.master')
@section('title')
Chi tiết danh mục
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header -->
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Chi tiết danh mục</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Danh Mục</a></li>
                    <li class="breadcrumb-item active">Chi tiết danh mục</li>
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
                        <h3 class="card-title"><b>{{$category->name}}</b></h3>

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
                                    <th>Tên Sản Phẩm</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>

                                    <td>
                                        <div class="row">
                                            @can('create')
                                            <form style="margin-right: 5px; " action="{{route('backend.product.show',$product->id)}}">
                                                <button type="submit" class="btn btn-success">
                                                    <i class="fa fa-btn fa-eye"></i>
                                                </button>
                                            </form>
                                            <form style="margin-right: 5px; " action="{{route('backend.product.edit',$product->id)}}" >
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-btn fa-edit"></i>
                                                </button>
                                            </form>
                                            <form style="margin-right: 5px; " action="{{route('backend.product.destroy',$product->id)}}" >
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash-alt"></i>
                                                </button>
                                            </form>
                                            @endcan
                                            @cannot('create')
                                            <form style="margin-right: 5px; " action="{{route('backend.product.show',$product->id)}}">
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
                    {{-- {!! $categories->links() !!} --}}
                    <!-- /.card-body -->
                </div>
                <div class="card-footer">
                    <a href="{{ route('backend.category.index') }}" class="btn btn-light">Quay Lại</a>
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</div>
</section>
@endsection

