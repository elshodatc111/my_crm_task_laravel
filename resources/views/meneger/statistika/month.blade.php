@extends('layouts.meneger_src')
@section('title', 'Statistka')
@section('content')
@extends('layouts.meneger_header')
@extends('layouts.meneger_menu')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Statistka</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('meneger.home') }}">Bosh sahifa</a></li>
                <li class="breadcrumb-item active">Statistka</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row mb-2">
                <div class="col-lg-3 mt-lg-0 mt-2">
                <a href="{{ route('chart_days') }}" class="btn btn-secondary w-100">Kunlik Statistika</a>
                </div>
                <div class="col-lg-3 mt-lg-0 mt-2">
                <a href="{{ route('chart_days_table') }}" class="btn btn-secondary w-100">Kunlik Jadval</a>
                </div>
                <div class="col-lg-3 mt-lg-0 mt-2">
                <a href="{{ route('chart_monch') }}" class="btn btn-primary w-100">Oylik Statistika</a>
                </div>
                <div class="col-lg-3 mt-lg-0 mt-2">
                <a href="{{ route('chart_monch_table') }}" class="btn btn-secondary w-100">Oylik Jadval</a>
                </div>
            </div>

            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-1"></i>
                    {{Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @elseif (Session::has('error'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-1"></i>
                    {{Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif




            <div class="card">
                <div class="card-body">
                    <h2 class="card-title w-100 text-center">Oylik to'lovlar</h2>
                    <div id="tulovlar"></div>
                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            new ApexCharts(document.querySelector("#tulovlar"), {
                                series: [{
                                    name: "Naqt to'lovlar",
                                    data: [
                                        @foreach($first_table as $item)
                                            {{ $item['naqt'] }},
                                        @endforeach
                                    ]
                                },{
                                    name: "Plastik to'lovlar",
                                    data: [
                                        @foreach($first_table as $item)
                                            {{ $item['plastik'] }},
                                        @endforeach
                                    ]
                                },{
                                    name: "Payme to'lovlar",
                                    data: [
                                        @foreach($first_table as $item)
                                            {{ $item['payme'] }},
                                        @endforeach
                                    ]
                                },{
                                    name: "Qaytarilgan to'lovlar",
                                    data: [
                                        @foreach($first_table as $item)
                                            {{ $item['qaytar'] }},
                                        @endforeach
                                    ]
                                },{
                                    name: "Chegirmalar",
                                    data: [
                                        @foreach($first_table as $item)
                                            {{ $item['chegirma'] }},
                                        @endforeach
                                    ]
                                }],
                                chart: {height: 400,type: 'line',zoom: {enabled: false}},
                                dataLabels: {enabled: false},
                                stroke: {curve: 'straight'},
                                grid: {row: {colors: ['#FFA500', 'transparent'],opacity: 0.5},},
                                xaxis: {categories: [
                                    @foreach($first_table as $item)
                                        "{{ $item['data'] }}",
                                    @endforeach
                                ],}
                            }).render();
                        });
                    </script>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h2 class="card-title w-100 text-center">Oylik Moliya</h2>
                    <div id="moliya"></div>
                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            new ApexCharts(document.querySelector("#moliya"), {
                                series: [{
                                    name: "To'lovlar",
                                    data: [
                                        @foreach($secont_table as $item)
                                            {{ $item['tulovlar'] }},
                                        @endforeach
                                    ]
                                },{
                                    name: "Xarajatlar",
                                    data: [
                                        @foreach($secont_table as $item)
                                            {{ $item['xarajatlar'] }},
                                        @endforeach
                                    ]
                                },{
                                    name: "Ish haqi",
                                    data: [
                                        @foreach($secont_table as $item)
                                            {{ $item['ishHaqi'] }},
                                        @endforeach
                                    ]
                                },{
                                    name: "Daromad",
                                    data: [
                                        @foreach($secont_table as $item)
                                            {{ $item['daromad'] }},
                                        @endforeach
                                    ]
                                }],
                                chart: {height: 400,type: 'line',zoom: {enabled: false}},
                                dataLabels: {enabled: false},
                                stroke: {curve: 'straight'},
                                grid: {row: {colors: ['#00ff00 ', 'transparent'],opacity: 0.5},},
                                xaxis: {categories: [
                                    @foreach($first_table as $item)
                                        "{{ $item['data'] }}",
                                    @endforeach
                                ],}
                            }).render();
                        });
                    </script>
                </div>
            </div>
 
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title w-100 text-center">Oylik Tashriflar</h2>
                    <div id="tashrif"></div>
                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            new ApexCharts(document.querySelector("#tashrif"), {
                                series: [{
                                    name: "Tashriflar",
                                    data: [
                                        @foreach($there_table as $item)
                                            {{ $item['users'] }},
                                        @endforeach
                                    ]
                                },{
                                    name: "Guruhga biriktirildi",
                                    data: [
                                        @foreach($there_table as $item)
                                            {{ $item['guruh'] }},
                                        @endforeach
                                    ]
                                },{
                                    name: "To'lov qildi",
                                    data: [
                                        @foreach($there_table as $item)
                                            {{ $item['tulov'] }},
                                        @endforeach
                                    ]
                                }],
                                chart: {height: 400,type: 'line',zoom: {enabled: false}},
                                dataLabels: {enabled: false},
                                stroke: {curve: 'straight'},
                                grid: {row: {colors: ['#ff0000 ', 'transparent'],opacity: 0.5},},
                                xaxis: {categories: [
                                    @foreach($first_table as $item)
                                        "{{ $item['data'] }}",
                                    @endforeach
                                ],}
                            }).render();
                        });
                    </script>
                </div>
            </div>

        </section>

    </main>

    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; <strong><span>CodeStart</span></strong>. development center
        </div>
        <div class="credits">
            Qarshi 2024
        </div>
    </footer>


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection