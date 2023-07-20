@extends('admin.layout.app')
@section('Content')
<h1>Quản lý kỳ thi</h1><br>
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
  <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>  
        <th scope="col">Subject</th>
        <th scope="col">name</th>
        <th scope="col">time</th>
        <th scope="col">description</th>
        <th scope="col">Status</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
   @php $i=1 @endphp
    @foreach($doExam as $doExams)
     @php
        $isCompleted = false;
        @endphp
        @foreach($result as $results)
            @if ($doExams->id == $results->idexam)
                @php
                $isCompleted = true;
                break;
                @endphp
            @endif
        @endforeach
    <tbody class="table-group-divider">
      
      <tr>
        <th>{{$doExams->id}}</td>
        <th>{{$doExams->subject}}</th>
        <th>{{$doExams->name}}</th>
        <th>{{$doExams->time}}</th>
       
      

        <th>{{$doExams->description}}</th>  
        @if ($isCompleted)
       <th>{{$results->quantity}}</th>
    @else
        <th>Chưa thi</th>
    @endif
        <th>        
         
          
          @if ($isCompleted)
       <p>Không có quyền xóa bài thi đã hoàn thành</p>
       @else
       <a class="btn btn-primary" href="{{ route('do.doexam', ['id' => $doExams->id]) }}" role="button">Thi ngay</a>
       <a class="btn btn-danger" href="{{ route('delete.doexam', ['id' => $doExams->id]) }}" role="button">Xóa bài thi</a>
       @endif
  
        </th>
      </tr>
    </tbody>  @endforeach
  </table>

@endsection