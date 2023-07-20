@extends('admin.layout.app')
@section('Content')
<h1>Kết quả thi</h1>
<div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body text-center">
            <h1 class="card-title">Thông báo điểm</h1>
            <p class="card-text">Điểm của bạn:{{$quantity}} <span id="score"></span></p>
            <p class="card-text">Cảm ơn bạn đã tham gia bài kiểm tra!</p>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection