@extends('layout.app')
@section('Content')
<h1>Quản lý kỳ thi</h1><br>
@php $i=1 @endphp
    @foreach($doExam as $doExams)
    <div class="card w-75 mb-3">
    <div class="card-body">
      <h5 class="card-title">{{$doExams->name}}</h5>
      <p class="card-text">{{$doExams->description}}</p>
      <a href="{{route('do.doexam',['id'=>$doExams->id])}}" class="btn btn-primary">Thi</a>
    </div>
  </div>
  @endforeach
  @endsection