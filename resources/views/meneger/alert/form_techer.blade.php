@extends('layouts.meneger_src')
@section('title', 'Balans')
@section('content')
@extends('layouts.meneger_header')
@extends('layouts.meneger_menu')
<main id="main" class="main">

<div class="pagetitle">
  <h1>Form</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('meneger.home') }}">Bosh sahifa</a></li>
      <li class="breadcrumb-item active">Form Statistika</li>
    </ol>
  </nav>
</div>

<section class="section dashboard">

    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-1"></i>
                {{Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif (Session::has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-1"></i>
                {{Session::get('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-3 col-6 pt-2">
            <a href="{{ route('form') }}" class="btn btn-secondary w-100">Form Murojat</a>
        </div>
        <div class="col-lg-3 col-6 pt-2">
            <a href="{{ route('form_techer') }}" class="btn btn-primary w-100">Form Statistika</a>
        </div>
        <div class="col-lg-3 col-6 pt-2">
            <a href="{{ route('form_arxiv') }}" class="btn btn-secondary w-100">Arxiv</a>
        </div>
        <div class="col-lg-3 col-6 pt-2">
            <a href="{{ route('form_url') }}" class="btn btn-secondary w-100">Form Manzil</a>
        </div>
    </div>


    <div class="mt-5">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Oxirgi 30 kunli statistik</h2>
                        <div id="Oylik"></div>
                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new ApexCharts(document.querySelector("#Oylik"), {
                                    series: [{data: [{{ $oylik['all'] }}, {{ $oylik['register'] }}, {{ $oylik['guruh'] }}, {{ $oylik['tulov'] }}]}],
                                    chart: {type: 'bar',height: 350},
                                    plotOptions: {
                                        bar: {borderRadius: 4,horizontal: true,distributed: true }
                                    },
                                    colors: ['#1E90FF', '#FF4500', '#FFD700','#32CD32'],
                                    dataLabels: {enabled: false},
                                    xaxis: {categories: ["Form orqali murojatlar","Ro`yhatga olindi","Guruhlarga biriktirildi","To`lov qildi"],}
                                }).render();
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Oxirgi 365 kunli statistik</h2>
                        <div id="Yillik"></div>
                    </div>
                </div>
                <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(document.querySelector("#Yillik"), {
                            series: [{data: [{{ $yillik['all'] }}, {{ $yillik['register'] }}, {{ $yillik['guruh'] }}, {{ $yillik['tulov'] }}]}],
                            chart: {type: 'bar',height: 350},
                            plotOptions: {
                                bar: {borderRadius: 4,horizontal: true,distributed: true }
                            },
                            colors: ['#1E90FF', '#FF4500', '#FFD700','#32CD32'],
                            dataLabels: {enabled: false},
                            xaxis: {categories: ["Form orqali murojatlar","Ro`yhatga olindi","Guruhlarga biriktirildi","To`lov qildi"],}
                        }).render();
                    });
                </script>
            </div>
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