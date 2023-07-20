@extends('admin.layout.app')
@section('Content')
{{-- <form method="POST" action="{{ route('update.student',['id'=>$student->id])}}" enctype="multipart/form-data">
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

@endsection --}}
<div class="row g-4">
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Nhập vào các thông tin của giáo viên</h6>
            <form class="col-xl-6" method="POST" action="{{ route('update.student',['id'=>$student->id])}}">
                @csrf
    <input type="hidden" name="_method" value="PATCH">
                <div class="mb-3">
                    <label  class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required value="{{$student->name}}">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Rank</label>
                    <input type="text" class="form-control" id="rank" name="rank" required value="{{$student->rank}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required value="{{$student->email}}">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required value="{{$student->password}}">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection