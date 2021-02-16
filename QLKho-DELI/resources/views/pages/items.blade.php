@extends('welcome')
@section('content')
<a href="{{URL::to('/add-item')}}"><button type="button" class="btn btn-primary">Thêm vật phẩm</button></a>
<table class="table table-hover text-nowrap" style="margin-top:10px">
    <thead>
    <tr>
        <th>ID</th>
        <th>Tên vật phẩm</th>
        <th>Doanh mục</th>
        <th>Đơn vị tính</th>
        <th>Ngày nhập</th>
        <th>Số lượng nhập</th>
        <th>Hành động</th>
    </tr>
    </thead>
    <tbody>
        @foreach($show_items as $key => $item)
            <tr>
                <td>{{ $item->item_id}}</td>
                <td>{{ $item->item_name}}</td>
                <td>{{ $item->category_name}}</td>
                <td>
                    {{ $item->item_DVT}}
                </td>
                <td>{{ $item->item_date}}</td>
                <td>{{ $item->item_soluong}}</td>
                <td>
                    <a href="{{URL::to('/update-item/'.$item->item_id)}}"><button type="button" class="btn btn-warning">Sửa</button></a>
                    <a href="/delete-item"><button type="button" class="btn btn-primary">Xuất</button></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection