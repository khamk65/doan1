@extends('admin.layout.app')
@section('Content')
@if(session('success'))
     <div class="alert alert-success">
         {{ session('success') }}
     </div>
 @endif

<div class="row g-4">
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Nhập vào các thông tin của Học Sinh</h6>
            <form class="col-xl-6"  method="POST" action="{{ route('store.student')}}">
                @csrf
                <div class="mb-3">
                    <label  class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>


                <div class="mb-3">
                    <label class="form-label">Class</label>
                    <select class="form-select" id="class" required>
                        <option value="">Chọn lựa chọn</option>
                        <option value="new">Tạo lớp mới</option>
                        <option value="existing">Thêm vào lớp đã có</option>
                    </select>
                </div>
                
                <!-- Thẻ div chứa danh sách các lớp đã tồn tại -->
                <div id="existing-class-list" style="display: none;">
                    <label class="form-label">Chọn lớp đã có</label>
                    <select class="form-select" name="existing_class">
                        <option value="">Chọn lớp</option>
                        <!-- Hiển thị danh sách các lớp đã tồn tại -->
                        @foreach($student as $students)
                            <option value="{{ $students->class }}">{{ $students->class }}</option>
                        @endforeach
                    </select>
                </div>
                
                <!-- Thẻ input để nhập tên lớp mới -->
                <div id="new-class-input" style="display: none;">
                    <label class="form-label">Tên lớp mới</label>
                    <input type="text" class="form-control" name="class">
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script>
        const classSelect = document.getElementById('class');
        const existingClassList = document.getElementById('existing-class-list');
        const newClassInput = document.getElementById('new-class-input');
    
        classSelect.addEventListener('change', function() {
            if (classSelect.value === 'existing') {
                existingClassList.style.display = 'block';
                newClassInput.style.display = 'none';
                // Gán giá trị cho trường name khi chọn "Thêm vào lớp đã có"
                document.querySelector('select[name="existing_class"]').setAttribute('name', 'class');
                document.querySelector('input[name="class"]').removeAttribute('name');
            } else if (classSelect.value === 'new') {
                existingClassList.style.display = 'none';
                newClassInput.style.display = 'block';
                // Gán giá trị cho trường name khi chọn "Tạo lớp mới"
                document.querySelector('input[name="class"]').setAttribute('name', 'class');
                document.querySelector('select[name="class"]').removeAttribute('name');
            } else {
                existingClassList.style.display = 'none';
                newClassInput.style.display = 'none';
                // Xóa giá trị của cả hai trường
                document.querySelector('select[name="class"]').removeAttribute('name');
                document.querySelector('input[name="class"]').removeAttribute('name');
            }
        });
    </script>
    
@endsection