@extends('admin.layout.app')

@section('Content')
<div class="container">

    <h1>Tạo bài thi</h1>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <form method="POST" action="{{ route('store.doexam') }}" enctype="multipart/form-data">
        @csrf
 
      <div class="form-group">
            <label for="name">Tên của bài thi</label>
            <textarea class="form-control" name="name" id="name" cols="30" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <label for="time">Thời gian bài thi (phút)</label>
            <input type="number" class="form-control" name="time" id="time" min="1" max="150" required>
        </div>

        <div class="form-group">
            <label for="description">Mô tả cho bài thi</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="3" required></textarea>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Chọn</th>
                        <th>ID</th>
                        <th>Môn học</th>
                        <th>Câu hỏi</th>
                        <th>A</th>
                        <th>B</th>
                        <th>C</th>
                        <th>D</th>
                        <th>Đáp án</th>
                        <th>Giải thích đáp án</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($exams as $exam)
                    <input type="hidden" name="subject" value="{{$exam->subject}}"> 
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="idquestion[]" value="{{$exam->id}}">
                            </div>
                        </td>
                        <td>{{$exam->id}}</td>
                        <td>{{$exam->subject}}</td>
                        <td>{{$exam->problem}}</td>
                        @php
                        $choices = explode('--khảm--', $exam->question);
                        @endphp
                        @foreach($choices as $choice)
                        <td>{{$choice}}</td>
                        @endforeach
                        <td>{{$exam->right}}</td>
                        <td>{{$exam->answer}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
