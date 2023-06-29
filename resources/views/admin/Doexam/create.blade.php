@extends('layout.app')
@section('Content')
<h1>Làm đề dành cho học sinh</h1>
<form method="post" action="{{ route('check.doexam') }}" enctype="multipart/form-data">
    @csrf
<div>
    <label>Bạn muốn làm đề cho môn học nào</label>
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
<button type="submit" class="btn btn-primary">Làm</button>
</form>
@endsection