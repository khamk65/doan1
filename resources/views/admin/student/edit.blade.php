@extends('layout.app')
@section('Content')
<form method="POST" action="{{ route('update.student',['id'=>$student->id])}}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required value="{{$student->name}}">
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required value="{{$student->email}}">
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required value="{{$student->password}}">
    </div>

    <div>
        <label for="rank">rank</label>
        <input type="rank" id="rank" name="rank" required value="{{$student->class}}">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>

@endsection