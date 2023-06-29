@extends('layout.app')
@section('Content')
<h1>Tạo câu hỏi</h1>
<form method="post" action="{{ route('store.exam') }}" enctype="multipart/form-data">
    @csrf
    <div>
        <label>Loại câu hỏi</label><br>
        <input type="radio" name="type" value="1" checked="checked" ><span>trắc nghiệm</span><br>
        <input type="radio" name="type" value="0"> <span>Tự luận</span>

    </div>
    <div>
        <label>Môn học</label>
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
        <label>Câu hỏi</label>
        <textarea name="question[]" id="question" cols="15" rows="3" class="form-control"></textarea>
    </div>
    <div>
        <label>A</label>
        <textarea name="question[]" id="A" cols="10" rows="2" class="form-control"></textarea>
    </div>
    <div>
        <label>B</label>
        <textarea name="question[]" id="B" cols="10" rows="2" class="form-control"></textarea>
    </div>
    <div>
        <label>C</label>
        <textarea name="question[]" id="C" cols="10" rows="2" class="form-control"></textarea>
    </div>
    <div>
        <label>D</label>
        <textarea name="question[]" id="D" cols="10" rows="2" class="form-control"></textarea>
    </div>
    <div>
        <label>Đáp án</label>
        <textarea name="answer" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection