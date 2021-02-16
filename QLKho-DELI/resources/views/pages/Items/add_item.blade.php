@extends('welcome')
@section('content')
<div class="add-item-form">
    <form role="form" id="quickForm" action="{{URL::to('/save-item')}}" method="POST">
        @csrf
        <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Tên vật phẩm</label>
            <input type="text" name="item_name" class="form-control" id="exampleInputEmail1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Đơn vị tính</label>
            <input type="texr" name="item_DVT" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>
        <div class="row">
            <div class="col-sm-6">
              <!-- select -->
              <div class="form-group">
                <label>Doanh mục</label>
                <select class="form-control" name="item_category">
                    @foreach($category as $key => $cate)
                        <option value="{{ $cate->category_id }}">{{ $cate->category_name}}</option>
                    @endforeach
                </select>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Số lượng</label>
                <input type="number" name="item_soluong" max="20" min="1" class="form-control" id="exampleInputPassword1" placeholder="">
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        <button type="submit" class="btn btn-primary">Thêm</button>
        </div>
    </form>
</div>
@endsection