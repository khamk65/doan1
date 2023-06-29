@extends('layout.app')
@section('Content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">class</th>
      <th scope="col">edit</th>
    </tr>
  </thead>
  @php $i=1 @endphp
    @foreach($student as $student)
  <tbody class="table-group-divider">
    
    <tr>
      <th>{{$student->id}}</td>
      <th>{{$student->name}}</th>
      <th>{{$student->email}}</th>
      <th>{{$student->class}}</th>
      <th>        
        <a class="btn btn-primary" href="{{route('show.student',['id'=>$student->id])}}" role="button">show</a>
        <a class="btn btn-warning" href="{{route('edit.student',['id'=>$student->id])}}" role="button">edit</a>
        <a class="btn btn-danger" href="{{route('delete.student',['id'=>$student->id])}}" role="button">delete</a>
        

      </th>
    </tr>
  </tbody>
  @endforeach
</table>
   
    @endsection