@extends('layout.app')
@section('Content')
@if(session('success'))
     <div class="alert alert-success">
         {{ session('success') }}
     </div>
 @endif

<div class="row g-4">
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Nhập vào các thông tin của Học Sinh</h6>
            <form class="col-xl-6"  method="POST" action="{{ route('store.student')}}">
                @csrf
                <div class="mb-3">
                    <label  class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label  class="form-label">Class</label>
                    <input type="text" class="form-control" id="class" name="class" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection