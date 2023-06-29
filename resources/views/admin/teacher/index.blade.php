@extends('layout.app')
@section('Content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">rank</th>
      <th scope="col">edit</th>
    </tr>
  </thead>
  @php $i=1 @endphp
    @foreach($teacher as $teacher)
  <tbody class="table-group-divider">
    
    <tr>
      <th>{{$teacher->id}}</td>
      <th>{{$teacher->name}}</th>
      <th>{{$teacher->email}}</th>
      <th>{{$teacher->rank}}</th>
      <th>        
        <a class="btn btn-primary" href="{{route('show.teacher',['id'=>$teacher->id])}}" role="button">show</a>
        <a class="btn btn-warning" href="{{route('edit.teacher',['id'=>$teacher->id])}}" role="button">edit</a>
        <a class="btn btn-danger" href="{{route('delete.teacher',['id'=>$teacher->id])}}" role="button">delete</a>
        

      </th>
    </tr>
  </tbody>
  @endforeach
</table>
   
    @endsection