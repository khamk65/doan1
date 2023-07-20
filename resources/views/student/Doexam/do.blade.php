@extends('student.layout.app')
@section('Content')
<form method="POST" action="{{route('student.result.doexam')}}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="idexam" value="{{$doExam->id}}">
    
    <div>
        <label>Tên của bài thi</label>
        <h2>{{$doExam->name}}</h2>
    </div>
    <div>
        <div id="timer">{{$doExam->time}}</div>
    </div>
    <div>
        <label>Mô tả cho bài thi này:</label>
        <p>{{$doExam->description}}</p>
    </div>

    @php
    $answers = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'K', 'L', 'M', 'N'];
    @endphp

    @foreach($exams as $index => $exam)
    <div id="question_{{$index}}" @if($index != 0) style="display: none;" @endif>
        <h3>Câu hỏi: {{$exam->problem}}</h3>
        @php
        $choices = explode('--khảm--', $exam->question);
        @endphp
        @foreach($choices as $choiceIndex => $choice)
        <label><input type="radio" value="{{$answers[$choiceIndex]}}" name="arraychoice[{{$exam->id}}][]">{{$answers[$choiceIndex]}} {{$choice}}</label><br>
        @endforeach
    </div>
    @endforeach

    <button type="button" id="previousButton" class="btn btn-primary" onclick="previousQuestion()">Quay lại</button>
    <button type="button" id="nextButton" class="btn btn-primary" onclick="nextQuestion()">Câu tiếp theo</button>
    <button type="submit" id="submitButton" class="btn btn-primary" style="display: none;">Submit</button>
</form>

<script>
    var currentQuestion = 0;
    var totalQuestions = {{$exams->count()}};
    var timeRemaining = {{$doExam->time}}*60; // Thời gian còn lại (giây)

    function previousQuestion() {
        if (currentQuestion > 0) {
            currentQuestion--;
            showHideQuestion();
        }
    }

    function nextQuestion() {
        if (currentQuestion < totalQuestions - 1) {
            currentQuestion++;
            showHideQuestion();
        } else {
            // Nếu đang ở câu cuối cùng, hiển thị nút Submit
            document.getElementById('submitButton').style.display = 'block';
        }
    }

    function showHideQuestion() {
        var questions = document.querySelectorAll('[id^="question_"]');
        questions.forEach(function(question) {
            question.style.display = 'none';
        });

        document.getElementById('question_' + currentQuestion).style.display = 'block';
    }

    function startTimer() {
        var timerInterval = setInterval(function() {
            timeRemaining--;
            document.getElementById('timer').innerHTML = formatTime(timeRemaining);

            if (timeRemaining <= 0) {
                clearInterval(timerInterval);
                document.getElementById('submitButton').click(); // Tự động submit form
            }
        }, 1000);
    }

    function formatTime(seconds) {
        var minutes = Math.floor(seconds / 60);
        var remainingSeconds = seconds % 60;

        return padTime(minutes) + ':' + padTime(remainingSeconds);
    }

    function padTime(time) {
        return String(time).padStart(2, '0');
    }

    // Bắt đầu đếm lùi khi trang được tải
    window.onload = function() {
        startTimer();
    };
</script>

@endsection
