@extends('welcome')
@section('content')
    <div class="add-category">
        <div class="card card-primary">
            <!-- /.card-header -->
            <!-- form start -->
            @foreach($update_category as $key => $cate)
                <form role="form" id="quickForm" action="{{ URL::to('/update-category-value/'.$cate->category_id)}}" method="POST">
                    {{csrf_field()}}
                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Sửa thông tin doanh mục</label>
                    <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="" value="{{$cate->category_name}}">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-warning">Sửa</button>
                </div>
                </form>
            @endforeach
        </div>
    </div>
@endsection