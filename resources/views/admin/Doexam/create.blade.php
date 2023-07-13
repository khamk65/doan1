@extends('layout.app')

@section('Content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Làm đề dành cho học sinh</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('check.doexam') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="subject">Chọn môn học:</label>
                            <select class="form-control" name="subject" id="subject">
                                <option value="toan">Toán</option>
                                <option value="ly">Lý</option>
                                <option value="hoa">Hóa</option>
                                <option value="van">Văn</option>
                                <option value="anh">Anh</option>
                                <option value="sinh">Sinh</option>
                                <option value="su">Sử</option>
                                <option value="dia">Địa</option>
                                <option value="gdcd">GDCD</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Bắt đầu làm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
