@extends('layout.app')
@section('Content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">question</th>
        <th scope="col">A</th>
        <th scope="col">B</th>
        <th scope="col">C</th>
        <th scope="col">D</th>
        <th scope="col">answer</th>
        <th scope="col">created</th>
        <th scope="col">updated</th>
      </tr>
    </thead>
   
  
    <tbody class="table-group-divider">
      
      <tr>
       
        <th>{{$exam->subject}}</th>
        <th>{{$exam->id}}</td>
@php
$string=explode('--khảm--',$exam->question)
@endphp
@foreach($string as $strings)
        <th>
 {!!$strings!!}
        </th>
@endforeach
        <th>{{$exam->answer}}</th>
        <th>{{$exam->created_at}}</th>
        <th>{{$exam->updated_at}}</th>
      </tr>
    </tbody>

  </table>
@endsection