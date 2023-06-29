@extends('layout.app')
@section('Content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Môn học</th>
        <th scope="col">Câu Hỏi</th>
        <th scope="col">A.</th>
        <th scope="col">B.</th>
        <th scope="col">C.</th>
        <th scope="col">D.</th>
        <th scope="col">Đáp án</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
    @php $i=1 @endphp
    @foreach($exams as $exams)
    <tbody>
      <tr>
        <th>{{$exams->id}}</th>
        <th>{{$exams->subject}}</th>

        @php
       
        $questionString = $exams->question;
$questions = explode('--khảm--', $questionString);
@endphp
@foreach($questions as $question)
        <th>{{$question}}</th>
        @endforeach      
        <th>{{$exams->answer}}</th>
        <td>
            <a class="btn btn-primary" href="{{route('show.exam',['id'=>$exams->id])}}" role="button">show</a>
            <a class="btn btn-warning" href="{{route('edit.exam',['id'=>$exams->id])}}" role="button">edit</a>
            <a class="btn btn-danger" href="{{route('delete.exam',['id'=>$exams->id])}}" role="button">delete</a>
        </td>

      </tr>
    
    </tbody>
    @endforeach
  </table>
@endsection