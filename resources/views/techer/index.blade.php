@extends('layouts.meneger_src')
@section('title', 'Kirish')
@extends('layouts.techer_header')
@section('content')
    <div class="main-content">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <img src="{{ env('MARKAZLOGOLINK') }}/{{ $Markaz['image'] }}" class="w-100">
                    <h5 class="card-title w-100 text-center mt-2">{{ $Markaz['name'] }} o'quv markaz</h5>
                </div>
            </div>
        </div>
 
        <!-- CHARTS JOYI -->
        <div class="container chart-container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title w-100 text-center">Guruhlar statistikasi</h5>
                    <canvas id="doughnutChart" width="100" height="100"></canvas>
                </div>
            </div>
        </div>
        <div class="container chart-container">
            <div class="card">
                <div class="card-body">
                    <canvas id="lineChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        const ctxLine = document.getElementById('lineChart').getContext('2d');
        const lineChart = new Chart(ctxLine, {
            type: 'line',
            data: {
                labels: ['Yan', 'Fev', 'Mar', 'Apr', 'May', 'Iyun'],
                datasets: [{
                    label: "Ish haqi to'lovlari",
                    data: [65, 59, 80, 81, 56, 55],
                    fill: false,
                    borderColor: 'orange',
                    tension: 0.1
                }]
            }
        });
        const ctxDoughnut = document.getElementById('doughnutChart').getContext('2d');
        const doughnutChart = new Chart(ctxDoughnut, {
            type: 'doughnut',
            data: {
                labels: ['Yangi guruhlar', 'Aktiv guruhlar', 'Yakunlangan guruhlar'],
                datasets: [{
                    label: 'Guruhlar soni',
                    data: [{{ $stat['nev'] }}, {{ $stat['activ'] }}, {{ $stat['end'] }}],
                    backgroundColor: ['blue', 'green','red'],
                    hoverOffset: 4
                }]
            }
        });
    </script>


    <div class="bottom-nav" style="z-index:7">
        <a href="{{ route('techer.index') }}" class="nav-link" style="color:#FFA500">
            <i class="bi bi-house-door"></i>
            <span>Bosh sahifa</span>
        </a>
        <a href="{{ route('techer.guruhs') }}" class="nav-link">
            <i class="bi bi-book"></i>
            <span>Guruhlar</span>
        </a>
        <a href="{{ route('techer.paymart') }}" class="nav-link">
            <i class="bi bi-currency-dollar"></i>
            <span>To'lovlar</span>
        </a>
        <a href="{{ route('techer.profel') }}" class="nav-link">
            <i class="bi bi-person"></i>
            <span>Profil</span>
        </a>
    </div>


@extends('layouts.techer_footer')
@endsection