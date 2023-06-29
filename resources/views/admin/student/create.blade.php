@extends('layout.app')
@section('Content')
<form method="POST" action="{{ route('store.student')}}">
    @csrf

    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
    </div>

    <div>
        <label for="class">class</label>
        <input type="class" id="class" name="class" required>
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>

@endsection