@extends('layout.app')
@section('Content')
<form method="POST" action="{{ route('store.teacher')}}">
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
        <label for="rank">rank</label>
        <input type="rank" id="rank" name="rank" required>
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>

@endsection