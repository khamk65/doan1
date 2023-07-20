@extends('admin.layout.app')

@section('Content')
<div class="container">
    <h1 class="mb-4">Quản lý kỳ thi</h1>
    <div class="row">
        @foreach($doExam as $doExams)
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">{{ $doExams->name }}</h5>
                    <p class="card-text">{{ $doExams->description }}</p>
                </div>
                <div class="card-footer">
                    @php
                    $isCompleted = false;
                    @endphp
                    @foreach($result as $results)
                        @if ($doExams->id == $results->idexam)
                            @php
                            $isCompleted = true;
                            break;
                            @endphp
                        @endif
                    @endforeach
                    
                    @if ($isCompleted)
                        <button class="btn btn-secondary" disabled>Bài thi đã hoàn thành</button><br>
                        <h4>Điểm số đạt được :{{$results->quantity}}  điểm</h4>
                    @else
                        <a href="{{ route('do.doexam', ['id' => $doExams->id]) }}" class="btn btn-primary">Thi</a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
