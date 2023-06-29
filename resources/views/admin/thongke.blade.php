@extends('layout.app')
@section('Content')
<h1>Thống kê của admin</h1>

  @foreach($users as $user)
  {{$user}}
  @endforeach
<div class="row">
    <div class="col">
      <h3>Thầy cô hoạt động</h3>
      <div class="progress-circle percent-70">
        <div class="progress-circle-percent">70%</div>
      </div>
    </div>
  </div>
</div>

@endsection