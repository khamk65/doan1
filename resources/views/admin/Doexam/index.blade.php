@extends('layout.app')
@section('Content')
<h1>Quản lý kỳ thi</h1><br>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>  
        <th scope="col">Subject</th>
        <th scope="col">name</th>
        <th scope="col">time</th>
        <th scope="col">description</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
   @php $i=1 @endphp
    @foreach($doExam as $doExams)
    <tbody class="table-group-divider">
      
      <tr>
        <th>{{$doExams->id}}</td>
        <th>{{$doExams->subject}}</th>
        <th>{{$doExams->name}}</th>
        <th>{{$doExams->time}}</th>
        <th>{{$doExams->description}}</th>
        <th>        
          <a class="btn btn-primary" href="#" role="button">show</a>
          <a class="btn btn-warning" href="#" role="button">edit</a>
          <a class="btn btn-danger" href="#" role="button">delete</a>
          
  
        </th>
      </tr>
    </tbody>  @endforeach
  </table>

@endsection