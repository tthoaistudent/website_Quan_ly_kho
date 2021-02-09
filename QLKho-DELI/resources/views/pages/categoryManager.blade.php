@extends('welcome')
@section('content')
    <a href="/add-category"><button type="button" class="btn btn-primary">Thêm doanh mục</button></a>
    <table class="table table-hover text-nowrap" style="margin-top:10px">
        <thead>
        <tr>
            <th>ID</th>
            <th>Tên doanh mục</th>
            <th>Số lượng</th>
            <th>Hành động</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>183</td>
            <td>John Doe</td>
            <td><span class="tag tag-success">22</span></td>
            <td>
                <a href="/update-category"><button type="button" class="btn btn-warning">Sửa</button></a>
                <a href="/delete-category"><button type="button" class="btn btn-danger">Xóa</button></a>
            </td>
        </tr>
        </tbody>
    </table>
@endsection