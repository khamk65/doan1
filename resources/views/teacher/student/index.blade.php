@extends('admin.layout.app')

@section('Content')
<div class="container">
    <h1>Danh sách sinh viên</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên</th>
                <th scope="col">Email</th>
                <th scope="col">Lớp</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($student as $std)
            <tr>
                <td>{{ $std->id }}</td>
                <td>{{ $std->name }}</td>
                <td>{{ $std->email }}</td>
                <td>{{ $std->class }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('show.student', ['id' => $std->id]) }}" role="button">Xem</a>
                    <a class="btn btn-warning" href="{{ route('edit.student', ['id' => $std->id]) }}" role="button">Sửa</a>
                    <a class="btn btn-danger" href="{{ route('delete.student', ['id' => $std->id]) }}" role="button">Xóa</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
