<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Nguyễn Gia Khảm</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{route('thongke.admin')}}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link nav-item nav-link" data-bs-toggle="dropdown">Giáo viên</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('create.teacher')}}" class="dropdown-item">Thêm mới giáo viên</a>
                    <a href="{{route('index.teacher')}}" class="dropdown-item">Quản lý</a>
                   
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Học sinh</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('create.student')}}" class="dropdown-item">Thêm mới học sinh</a>
                    <a href="{{route('index.student')}}" class="dropdown-item">Quản lý học sinh</a>
                   
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Ngân hàng đề thi</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('create.exam')}}" class="dropdown-item">Tạo câu hỏi</a>
                    <a href="{{route('index.exam')}}" class="dropdown-item">Quản lý câu hỏi</a>
                   
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kỳ thi</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('create.doexam')}}" class="dropdown-item">Tạo mới bài thi</a>
                    <a href="{{route('index.doexam')}}" class="dropdown-item">Quản lý bài thi</a>
                    <a href="{{route('list.doexam')}}" class="dropdown-item">Bài thi đăng ký</a>
                
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tài liệu tham khảo</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('create.document')}}" class="dropdown-item">Thêm tài liệu</a>
                    <a href="{{route('index.document')}}" class="dropdown-item">Quản lý tài liệu</a>
                   
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Cài đặt</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="#" class="dropdown-item">Thông tin admin</a>

                   
                </div>
            </div>

            
        </div>
    </nav>
</div>