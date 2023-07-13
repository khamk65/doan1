@extends('layout.app')
@section('Content')
<h1>Thống kê</h1>
<div class="chart">
  <canvas id="dataChart"></canvas>
</div>

<script>
  var dataChart = new Chart(document.getElementById('dataChart'), {
    type: 'bar',
    data: {
      labels: ['Giáo viên', 'Học sinh', 'Câu hỏi', 'Đề thi', 'Tài liệu'],
      datasets: [{
        label: 'Số lượng',
        data: [{{$teacher}}, {{$student}},{{$exam}},{{$doexam}},{{$document}}],
        backgroundColor: [
          'rgba(54, 162, 235, 0.5)',
          'rgba(75, 192, 192, 0.5)',
          'rgba(255, 99, 132, 0.5)',
          'rgba(255, 205, 86, 0.5)',
          'rgba(153, 102, 255, 0.5)'
        ],
        borderColor: [
          'rgba(54, 162, 235, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(255, 99, 132, 1)',
          'rgba(255, 205, 86, 1)',
          'rgba(153, 102, 255, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

@endsection