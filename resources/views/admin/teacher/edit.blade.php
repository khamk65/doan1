@extends('layout.app')
@section('Content')
<form method="POST" action="{{ route('update.teacher',['id'=>$teacher->id])}}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required value="{{$teacher->name}}">
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required value="{{$teacher->email}}">
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required value="{{$teacher->password}}">
    </div>

    <div>
        <label for="rank">rank</label>
        <input type="rank" id="rank" name="rank" required value="{{$teacher->rank}}">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>

@endsection