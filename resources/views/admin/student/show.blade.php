@extends('layout.app')
@section('Content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">class</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>
      </tr>
    </thead>
   
  
    <tbody class="table-group-divider">
      
      <tr>
        <th>{{$student->id}}</td>
        <th>{{$student->name}}</th>
        <th>{{$student->email}}</th>
        <th>{{$student->class}}</th>
        <th>{{$student->created_at}}</th>
        <th>{{$student->updated_at}}</th>
      </tr>
    </tbody>

  </table>
@endsection