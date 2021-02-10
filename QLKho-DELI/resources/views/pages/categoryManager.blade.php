@extends('welcome')
@section('content')
    <table class="table table-hover text-nowrap my-category" style="margin-top:10px">
        <thead>
        <tr>
            <th>ID</th>
            <th>Tên doanh mục</th>
            <th>Hành động</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($show_category as $key => $category)
            <tr>
                <td>{{$category->category_id}}</td>
                <td>{{$category->category_name}}</td>
                <td>
                    <a href="/update-category/{{$category->category_id}}"><button type="button" class="btn btn-warning">Sửa</button></a>
                </td>
            </tr>
        @endforeach

            <tr>
                <td></td>
                <form action="{{URL::to('/add-category')}}" method="POST">
                    {{csrf_field()}}
                    <td>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-label="Recipient's username" name="category_name" aria-describedby="button-addon2">
                        </div>

                    </td>
                    <td>
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </td>
                </form>
            </tr>
        </tbody>
    </table>
@endsection