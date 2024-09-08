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
                    <a href="{{ route('chart_days') }}" class="btn btn-primary w-100">Kunlik Statistika</a>
                </div>
                <div class="col-lg-3 mt-lg-0 mt-2">
                    <a href="{{ route('chart_days_table') }}" class="btn btn-secondary w-100">Kunlik Jadval</a>
                </div>
                <div class="col-lg-3 mt-lg-0 mt-2">
                    <a href="{{ route('chart_monch') }}" class="btn btn-secondary w-100">Oylik Statistika</a>
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
                    <h2 class="card-title w-100 text-center">Kunlik to'lovlar</h2>
                    <div id="daysPaymart"></div>
                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(document.querySelector("#daysPaymart"), {
                            series: [{
                                name: "Naqt to'lovlar",
                                data: [
                                    @foreach($first_table as $item)
                                        {{ $item['naqt'] }},
                                    @endforeach
                                ]
                            }, {
                                name: "Plastik to'lovlar",
                                data: [
                                    @foreach($first_table as $item)
                                        {{ $item['plastik'] }},
                                    @endforeach
                                ]
                            }, {
                                name: "Payme to'lovlar",
                                data: [
                                    @foreach($first_table as $item)
                                        {{ $item['payme'] }},
                                    @endforeach
                                ]
                            }, {
                                name: "Qaytarilgan to'lovlar",
                                data: [
                                    @foreach($first_table as $item)
                                        {{ $item['qaytar'] }},
                                    @endforeach
                                ]
                            }, {
                                name: "Chegirmalar",
                                data: [
                                    @foreach($first_table as $item)
                                        {{ $item['chegirma'] }},
                                    @endforeach
                                ]
                            }],
                            chart: {type: 'bar',height: 400},
                            plotOptions: {bar: {horizontal: false,columnWidth: '55%',endingShape: 'rounded'},},
                            dataLabels: {enabled: false},
                            stroke: {show: true,width: 2,colors: ['transparent']},
                            xaxis: {categories: [
                                @foreach($first_table as $item)
                                    "{{ $item['data'] }}",
                                @endforeach
                            ],},
                            yaxis: {title: {text: "Kunlik to'lovlar"}},
                            fill: {opacity: 1},
                            tooltip: {y: {formatter: function(val) {return val + " so'm"}}}
                        }).render();
                        });
                    </script>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h2 class="card-title w-100 text-center">Kunlik moliya</h2>
                    <div id="kunlikMoliya"></div>
                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(document.querySelector("#kunlikMoliya"), {
                            series: [{
                                name: "Kassadan Chiqim",
                                data: [
                                    @foreach($secont_table as $item)
                                        {{ $item['kassaChiqim'] }},
                                    @endforeach
                                ]
                            }, {
                                name: "Balansdan chiqim",
                                data: [
                                    @foreach($secont_table as $item)
                                        {{ $item['balansChiqim'] }},
                                    @endforeach
                                ]
                            }, {
                                name: "Kassadan Xarajat",
                                data: [
                                    @foreach($secont_table as $item)
                                        {{ $item['kassaXarajat'] }},
                                    @endforeach
                                ]
                            }, {
                                name: "Balansdan Xarajat",
                                data: [
                                    @foreach($secont_table as $item)
                                        {{ $item['balansXarajat'] }},
                                    @endforeach
                                ]
                            }, {
                                name: "To'langan ish haqi",
                                data: [
                                    @foreach($secont_table as $item)
                                        {{ $item['ishHaqi'] }},
                                    @endforeach
                                ]
                            }],
                            chart: {type: 'bar',height: 400},
                            plotOptions: {bar: {horizontal: false,columnWidth: '55%',endingShape: 'rounded'},},
                            dataLabels: {enabled: false},
                            stroke: {show: true,width: 2,colors: ['transparent']},
                            xaxis: {categories: [
                                    @foreach($secont_table as $item)
                                        "{{ $item['data'] }}",
                                    @endforeach
                                ],
                            },
                            yaxis: {title: {text: "Kunlik Moliya"}},
                            fill: {opacity: 1},
                            tooltip: {y: {formatter: function(val) {return val + " so'm"}}}
                        }).render();
                        });
                    </script>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h2 class="card-title w-100 text-center">Kunlik tashriflar</h2>
                    <div id="daysVised"></div>
                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(document.querySelector("#daysVised"), {
                            series: [{
                                name: "Yangi tashrif",
                                data: [
                                    @foreach($there_table as $item)
                                        {{ $item['users'] }},
                                    @endforeach
                                ]
                            }, {
                                name: "Guruhga biriktirildi",
                                data: [
                                    @foreach($there_table as $item)
                                        {{ $item['guruh'] }},
                                    @endforeach
                                ]
                            }, {
                                name: "To'lov qildi",
                                data: [
                                    @foreach($there_table as $item)
                                        {{ $item['tulov'] }},
                                    @endforeach
                                ]
                            }],
                            chart: {type: 'bar',height: 400},
                            plotOptions: {bar: {horizontal: false,columnWidth: '55%',endingShape: 'rounded'},},
                            dataLabels: {enabled: false},
                            stroke: {show: true, width: 2 ,colors: ['transparent']},
                            xaxis: {categories: [
                                    @foreach($there_table as $item)
                                        "{{ $item['data'] }}",
                                    @endforeach
                                ],},
                            yaxis: {title: {text: "Kunlik tashriflar"}},
                            fill: {opacity: 1},
                            tooltip: {y: {formatter: function(val) {return val + " ta"}}}
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