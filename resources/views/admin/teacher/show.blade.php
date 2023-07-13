@extends('layout.app')
@section('Content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">rank</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>
      </tr>
    </thead>
   
  
    <tbody class="table-group-divider">
      
      <tr>
        <th>{{$teacher->id}}</td>
        <th>{{$teacher->name}}</th>
        <th>{{$teacher->email}}</th>
        <th>{{$teacher->rank}}</th>
        <th>{{$teacher->created_at}}</th>
        <th>{{$teacher->updated_at}}</th>
      </tr>
    </tbody>

  </table>
@endsection