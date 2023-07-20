@extends('admin.layout.app')
@section('Content')
<h1>Đẩy tài liệu lên</h1>
<form action="{{route('store.document')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label>Bạn muốn thêm tài liệu cho môn học nào</label>
        <select name="subject" id="subject">
            <option value="toan">Toán</option>
            <option value="ly"> Lý</option>
            <option value="hoa">Hóa</option>
            <option value="van">Văn</option>
            <option value="anh">Anh</option>
            <option value="sinh">Sinh</option>
            <option value="su">Sử</option>
            <option value="dia">Địa</option>
            <option value="gdcd">GDCD</option>
        </select>
    </div>
    <div>
        <label>Tên của tài liệu này</label>
        <textarea name="name" id="name" cols="15" rows="3" class="form-control"></textarea>
    </div>
    <div>
        <label>Mô tả cho tài liệu này</label>
        <textarea name="description" id="description" cols="15" rows="3" class="form-control"></textarea>
    </div>
    <div>
        <label>Loại tài liệu</label><br>
        <input type="radio" name="type" value="1" checked="checked" ><span>video</span><br>
        <input type="radio" name="type" value="0"> <span>ảnh</span><br>
        <input type="radio" name="type" value="2"> <span>tài liệu khác</span>
    </div>
    <div class="mb-3">
        <label>Tải file lên</label>
        <input class="form-control" type="file" id="formFile" name="path" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection