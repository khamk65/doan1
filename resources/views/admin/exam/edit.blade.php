@extends('layout.app')
@section('Content')
<h1>Sửa câu hỏi</h1>
<form method="POST" action="{{route('update.exam',['id'=>$exams->id])}}" enctype="multipart/form-data">

    @csrf
    <input type="hidden" value="PATCH" name="_method">
    <div>
        <label>Loại câu hỏi</label><br>
        <input type="radio" name="type" value="1" checked="checked" ><span>trắc nghiệm</span><br>
        <input type="radio" name="type" value="0"> <span>Tự luận</span>
    </div>
    <div>
        <label>Môn học</label>
        <textarea name="subject" id="subject" cols="15" rows="3" class="form-control"></textarea>
    </div>
   
    <div>
        <label>Câu hỏi</label>
        <textarea name="question[]" id="question" cols="15" rows="3" class="form-control" ></textarea>
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