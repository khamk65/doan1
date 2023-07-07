@extends('layout.app')
@section('Content')
<form method="POST" action="#" enctype="multipart/form-data">
    @csrf
    <div>
        <label>Tên của bài thi</label>
        <div>{{$doExam->name}}</div>
    </div>
    <div>
        <label>Thời gian bài thi này</label>
        <div>{{$doExam->time}}</div>
    </div>
    <div>
        <label>Mô tả cho bài thi này</label>
        <div>{{$doExam->description}}</div>
    </div>

    <div id="questionContainer">
        <div class="question">
            <h3>Câu hỏi: </h3>
            <div class="options"></div>
        </div>
    </div>

    <button type="button" id="nextQuestionButton" class="btn btn-primary">Chuyển câu</button>
    <button type="submit" id="submitButton" class="btn btn-primary" style="display: none;">Submit</button>
</form>

<script>
    const questions = {!! json_encode($exams) !!};
    const questionContainer = document.getElementById('questionContainer');
    const questionElement = questionContainer.querySelector('.question');
    const questionTitleElement = questionElement.querySelector('h3');
    const questionOptionsElement = questionElement.querySelector('.options');
    const nextQuestionButton = document.getElementById('nextQuestionButton');
    const submitButton = document.getElementById('submitButton');
    let currentQuestionIndex = 0;

    function renderQuestion(index) {
        const question = questions[index];
        questionTitleElement.textContent = 'Câu hỏi: ' + question.question;

        const options = question.question.split('--khảm--');
        let optionsHtml = '';
        options.forEach((option, optionIndex) => {
            optionsHtml += '<label><input type="radio" name="question' + index + '" value="' + optionIndex + '"> ' + optionIndex + '. ' + option + '</label><br>';
        });
        questionOptionsElement.innerHTML = optionsHtml;

        if (index === questions.length - 1) {
            nextQuestionButton.style.display = 'none';
            submitButton.style.display = 'block';
        } else {
            nextQuestionButton.style.display = 'block';
            submitButton.style.display = 'none';
        }
    }

    nextQuestionButton.addEventListener('click', function() {
        currentQuestionIndex++;
        renderQuestion(currentQuestionIndex);
    });

    renderQuestion(currentQuestionIndex);
</script>
@endsection
