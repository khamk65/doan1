<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('build/assets/admin.css')}}">

</head>
<body>
    <header>
      <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand">Navbar</a>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </nav>
      </header>
      
          </nav>
          <div class="container-fluid">
            
            <div class="row">
             
              <div class="col-md-2">
                
                <div class="card mt-4">
                  <div class="card-body">
                    <h5 class="card-title">Quản lý chung</h5>
  
                    <div class="info-actions">
                      <a href="{{route('admin.thongke')}}" class="btn btn-primary">Home</a><br>
                     
                    </div>
                  </div>
                </div>
                <div class="card mt-4">
                  <div class="card-body">
                    <h5 class="card-title">Giáo Viên</h5>
                    
                    <div class="info-actions">
                      <a href="{{route('create.teacher')}}" class="btn btn-primary">Thêm</a><br>
                      <a href="{{route('index.teacher')}}" class="btn btn-primary">Quản lý</a><br>
                      
                    </div>
                  </div>
                </div>
                <div class="card mt-4">
                  <div class="card-body">
                    <h5 class="card-title">Học sinh</h5>
                   
                    <div class="info-actions">
                      <a href="{{route('create.student')}}" class="btn btn-primary">Thêm</a><br>
                      <a href="{{route('index.student')}}" class="btn btn-primary">Quản lý</a><br>
                    
                    </div>
                  </div>
                </div>
                <div class="card mt-4">
                  <div class="card-body">
                    <h5 class="card-title">Đề thi</h5>

                    <div class="info-actions">
                      <a href="{{route('create.exam')}}" class="btn btn-primary">Thêm</a><br>
                      <a href="{{route('index.exam')}}" class="btn btn-primary">Quản lý</a><br>
                    
                    </div>
                  </div>
                </div>
                <div class="card mt-4">
                  <div class="card-body">
                    <h5 class="card-title">Kỳ thi</h5>
                  
                    <div class="info-actions">
                      <a href="{{route('create.doexam')}}" class="btn btn-primary">Thêm</a><br>
                      <a href="#" class="btn btn-primary">Quản lý</a><br>
                    
                    </div>
                  </div>
                </div>
              </div>
          <main role="main" class="col-md-10 ml-sm-auto px-4">
            @yield('Content');
          </main>
        </div>
      </div>
</body>
</html>