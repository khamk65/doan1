@extends('student.layout.app')
@section('Content')
    <h1>Chi tiết tài liệu</h1>
    <div>
        <h3>Môn học: {{ $document->subject }}</h3>
        <p>Tên tài liệu: {{ $document->name }}</p>
        <p>Mô tả: {{ $document->description }}</p>
      
        <div>
            @if ($document->type === '0' && $document->path !== null && $document->path !== '')
                <iframe src="{{ asset('uploads/'.$document->path) }}" width="800" height="600" frameborder="0"></iframe>
            @elseif ($document->type === '1' && $document->path !== null && $document->path !== '')
                <video src="{{ asset('uploads/'.$document->path) }}" width="800" height="600" controls></video>
            @else
            <iframe src="https://drive.google.com/viewerng/viewer?src={{ urlencode(asset('uploads/'.$document->path)) }}" width="800" height="600" frameborder="0"></iframe>
            @endif
        </div>
    </div>
   
@endsection
