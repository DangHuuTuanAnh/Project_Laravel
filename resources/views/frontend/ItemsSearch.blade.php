@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1 class="text-primary" style="text-align: center;">Laravel 5 Search Using Elasticsearch</h1>
    </div>
</div>

<div class="container">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <div class="row">
          <div class="col-lg-6">
            {{-- {!! Form::open(array('method'=>'get','class'=>'')) !!} --}}
            <form method="get" action="{{route('form.search')}}">
             <input name="search" value="{{ old('search') }}" type="text" class="form-control" placeholder="Search for...">
             <span class="input-group-btn">
                <button class="btn btn-default" type="submit">Go!</button>
            </span>
        </form>
        {{-- <div class="input-group">

          <input name="search" value="{{ old('search') }}" type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit">Go!</button>
        </span> --}}

    </div><!-- /input-group -->
    {{-- {!! Form::close() !!} --}}
</div><!-- /.col-lg-6 -->
</div><!-- /.row -->
</div>
<div class="panel-body">


    <div class="row">
        <div class="col-lg-6">
            @if(!empty($items))
            @foreach($items as $key => $value)
            <h3 class="text-danger">{{ $value['title'] }}</h3>
            <p>{{ $value['description'] }}</p>
            @endforeach
            @endif
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create New Items
                </div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    {{-- {!! Form::open(array('url' => 'ItemSearchCreate','autocomplete'=>'off')) !!} --}}
                    <form action="{{route('form.create')}}" method="post">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Title:</strong>
                                   {{--  {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!} --}}
                                   <input class="form-control" style="text" name="title"></input>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Description:</strong>
                                    {{-- {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!} --}}
                                    <textarea class="form-control" style="text" name="description"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    

                    {{-- {!! Form::close() !!} --}}

                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>
@endsection
