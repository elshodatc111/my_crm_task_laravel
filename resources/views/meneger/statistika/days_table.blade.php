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
                    <a href="{{ route('chart_days_table') }}" class="btn btn-primary w-100">Kunlik Jadval</a>
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
                    <div class="table-responsive">
                        <table class="table table-bordered text-center table-hover" style="font-size:14px;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    @foreach($first_table as $item)
                                        <th>{{ $item['data'] }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th style="text-align:left">Naqt To'lovlar</th>
                                    @foreach($first_table as $item)
                                        <td>{{ number_format($item['naqt'], 0, '.', ' ') }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <th style="text-align:left">Plastik To'lovlar</th>
                                    @foreach($first_table as $item)
                                        <td>{{ number_format($item['plastik'], 0, '.', ' ') }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <th style="text-align:left">Payme To'lovlar</th>
                                    @foreach($first_table as $item)
                                        <td>{{ number_format($item['payme'], 0, '.', ' ') }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <th style="text-align:left">Qaytarilgan To'lovlar</th>
                                    @foreach($first_table as $item)
                                        <td>{{ number_format($item['qaytar'], 0, '.', ' ') }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <th style="text-align:left">Chegirmalar</th>
                                    @foreach($first_table as $item)
                                        <td>{{ number_format($item['chegirma'], 0, '.', ' ') }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <th style="text-align:left">Kassadan chiqim</th>
                                    @foreach($secont_table as $item)
                                        <td>{{ number_format($item['kassaChiqim'], 0, '.', ' ') }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <th style="text-align:left">Balansdan chiqim</th>
                                    @foreach($secont_table as $item)
                                        <td>{{ number_format($item['balansChiqim'], 0, '.', ' ') }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <th style="text-align:left">Kassadan xarajat</th>
                                    @foreach($secont_table as $item)
                                        <td>{{ number_format($item['kassaXarajat'], 0, '.', ' ') }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <th style="text-align:left">Balansdan xarajat</th>
                                    @foreach($secont_table as $item)
                                        <td>{{ number_format($item['balansXarajat'], 0, '.', ' ') }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <th style="text-align:left">To'langan ish haqi</th>
                                    @foreach($secont_table as $item)
                                        <td>{{ number_format($item['ishHaqi'], 0, '.', ' ') }}</td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h2 class="card-title w-100 text-center">Kunlik tashriflar</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered text-center table-hover" style="font-size:14px;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    @foreach($first_table as $item)
                                        <th>{{ $item['data'] }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th style="text-align:left">Yangi tashriflar</th>
                                    @foreach($there_table as $item)
                                        <td>{{ number_format($item['users'], 0, '.', ' ') }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <th style="text-align:left">Guruhga biriktirildi</th>
                                    @foreach($there_table as $item)
                                        <td>{{ number_format($item['guruh'], 0, '.', ' ') }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <th style="text-align:left">To'lov qildi</th>
                                    @foreach($there_table as $item)
                                        <td>{{ number_format($item['tulov'], 0, '.', ' ') }}</td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
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