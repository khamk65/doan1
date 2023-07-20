@extends('admin.layout.app')
@section('Content')
    <h1>Danh sách tài liệu</h1><br>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
      <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>  
            <th scope="col">Subject</th>
            <th scope="col">name</th>
            <th scope="col">type</th>
            <th scope="col">description</th>
            <th scope="col">path</th>
          </tr>
        </thead>
       @php $i=1 @endphp
        @foreach($documents as $doExams)
        <tbody class="table-group-divider">
          
          <tr>
            <th>{{$doExams->id}}</td>
            <th>{{$doExams->subject}}</th>
            <th>{{$doExams->name}}</th>
            <th>{{$doExams->type}}</th>
            <th>{{$doExams->description}}</th>
            <th>{{$doExams->path}}</th>
            <th>        
              <a class="btn btn-primary" href="{{route('show.document',['id'=>$doExams->id])}}" role="button">show</a>
              <a class="btn btn-warning" href="#" role="button">edit</a>
              <a class="btn btn-danger" href="#" role="button">delete</a>
              
      
            </th>
          </tr>
        </tbody>  @endforeach
      </table>
@endsection
