@extends('admin.layout.app')

@section('Content')
<style>
    /* Custom CSS styles */
    body {
        background-color: #d8cfcf;
    }

    .container {
        background-color: #f5f0f0;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .form-group label {
        font-weight: bold;
    }

    .form-group textarea {
        resize: vertical;
    }

    .alert {
        margin-top: 10px;
    }
</style>

<div class="container">
    <h1>Tạo câu hỏi</h1>
    <form method="post" action="{{ route('store.exam') }}" enctype="multipart/form-data" onsubmit="return validateForm()">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        @csrf

        <div class="form-group">
            <label for="type">Loại câu hỏi:</label><br>
            <input type="radio" name="type" value="1" checked><span>Trắc nghiệm</span><br>
            <input type="radio" name="type" value="0"> <span>Tự luận</span>
        </div>

        <div class="form-group">
            <label for="subject">Môn học:</label>
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

        <div class="form-group">
            <label for="problem">Câu hỏi:</label>
            <textarea class="form-control" name="problem" id="problem" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="A">A:</label>
            <textarea class="form-control" name="question[]" id="A" rows="2"></textarea>
        </div>

        <div class="form-group">
            <label for="B">B:</label>
            <textarea class="form-control" name="question[]" id="B" rows="2"></textarea>
        </div>

        <div class="form-group">
            <label for="C">C:</label>
            <textarea class="form-control" name="question[]" id="C" rows="2"></textarea>
        </div>

        <div class="form-group">
            <label for="D">D:</label>
            <textarea class="form-control" name="question[]" id="D" rows="2"></textarea>
        </div>

        <div class="form-group">
            <label for="right">Đáp án:</label>
            <select class="form-control" name="right" id="right">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>
        </div>

        <div class="form-group">
            <label for="answer">Giải thích đáp án:</label>
            <textarea class="form-control" name="answer" id="answer" rows="5"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script>
    function validateForm() {
        // Perform form validation logic here
        // Return true if the form is valid, or false if there are errors
    }
</script>
@endsection
