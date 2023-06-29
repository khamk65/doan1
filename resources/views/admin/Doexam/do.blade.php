@extends('layout.app')
@section('Content')
<form id="examForm" method="POST" action="{{ route('store.doexam') }}" enctype="multipart/form-data">
    @csrf
    <div>
        <label>Tên của bài thi</label>
        <textarea name="name" id="name" cols="15" rows="3" class="form-control"></textarea>
    </div>
    <div>
        <label>Thời gian bài thi này</label>
        <input type="number" name="time" id="" min="15" max="150">
    </div>
    <div>
        <label>Mô tả cho bài thi này</label>
        <textarea name="description" id="description" cols="15" rows="3" class="form-control"></textarea>
    </div>

    <div id="questionContainer">
        @foreach($exams as $exam)
        <div class="question">
            <h3>Câu hỏi: {{ $exam->id }}</h3>
            <p>{{ $exam->question }}</p>
            <div class="options">
                <label><input type="radio" name="answer[{{ $exam->id }}]" value="A"> A. {{ $exam->optionA }}</label><br>
                <label><input type="radio" name="answer[{{ $exam->id }}]" value="B"> B. {{ $exam->optionB }}</label><br>
                <label><input type="radio" name="answer[{{ $exam->id }}]" value="C"> C. {{ $exam->optionC }}</label><br>
                <label><input type="radio" name="answer[{{ $exam->id }}]" value="D"> D. {{ $exam->optionD }}</label>
            </div>
        </div>
        @endforeach
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script>
    var questions = document.querySelectorAll('.question');
    var currentIndex = 0;

    function showQuestion(index) {
        if (index >= 0 && index < questions.length) {
            questions[index].style.display = 'block';
        }
    }

    function hideQuestion(index) {
        if (index >= 0 && index < questions.length) {
            questions[index].style.display = 'none';
        }
    }

    function nextQuestion() {
        hideQuestion(currentIndex);
        currentIndex++;
        showQuestion(currentIndex);
    }

    showQuestion(currentIndex);

    document.getElementById('examForm').addEventListener('submit', function (event) {
        if (currentIndex < questions.length - 1) {
            event.preventDefault();
            nextQuestion();
        }
    });
</script>
@endsection
