@extends('layout.app')
@section('Content')
<form method="POST" action="{{ route('store.doexam') }}" enctype="multipart/form-data">
    @csrf
    
    <div>
        <label>Tên của bài thi</label>
        <textarea name="name" id="name" cols="15" rows="3" class="form-control"></textarea>
    </div>
    <div>
        <label>Thời gian bài thi này</label>
    <input type="number" name="time" id="" min="15" max="150">
</div>
<div>
    <label>Mô tả cho bài thi này</label>
    <textarea name="description" id="description" cols="15" rows="3" class="form-control"></textarea>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Chọn vào bài thi</th>
        <th scope="col">id</th>
        <th scope="col">Môn học</th>
        <th scope="col">Câu Hỏi</th>
        <th scope="col">A.</th>
        <th scope="col">B.</th>
        <th scope="col">C.</th>
        <th scope="col">D.</th>
        <th scope="col">Đáp án</th>
      </tr>
    </thead>
    @php $i=1 @endphp
    @foreach($exams as $exam)
    <tbody>
      <tr>
        <th>
            <input type="checkbox" name="idquestion[]" id="idquestion" value="{{$exam->id}}">
        </form>
        </th>
        <th>{{$exam->id}}</th>
        <th>{{$exam->subject}}</th>

        @php
       
        $questionString = $exam->question;
$questions = explode('--khảm--', $questionString);
@endphp
@foreach($questions as $question)
        <th>{{$question}}</th>
        @endforeach      
        <th>{{$exam->answer}}</th>
        
      </tr>
    
    </tbody>
    @endforeach
  </table>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection