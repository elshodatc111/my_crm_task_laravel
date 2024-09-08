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
                <a href="{{ route('chart_monch') }}" class="btn btn-secondary w-100">Oylik Statistika</a>
                </div>
                <div class="col-lg-3 mt-lg-0 mt-2">
                <a href="{{ route('chart_monch_table') }}" class="btn btn-primary w-100">Oylik Jadval</a>
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
            <style>.table td, .table th {text-align: center;vertical-align: middle;}</style>
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title w-100 text-center">Oylik statistika</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" id="myTable" style="font-size:14px;border:1px solid #A5C8FD">
                            <thead>
                                <tr>
                                    <th rowspan=2 colspan=1 class="bg-primary text-white" style="border:1px solid #4991FD;">Oylar</th>
                                    <th colspan=6 class="bg-info text-white" style="border:1px solid #4991FD;">To'lovlar</th>
                                    <th colspan=3 class="bg-danger text-white" style="border:1px solid #4991FD;">Xarajatlar</th>
                                    <th colspan=3 class="bg-warning" style="border:1px solid #4991FD;">Ish haqi</th>
                                    <th rowspan=2 class="bg-success text-white" style="border:1px solid #4991FD;">Daromad</th>
                                    <th colspan=3 style="background:#EB8F88" style="border:1px solid #4991FD;">Tashriflar</th>
                                    <th rowspan=2 class="bg-secondary text-white" style="border:1px solid #4991FD;">Aktiv talabalar</th>
                                </tr>
                                <tr>
                                    <td class="bg-info text-white" style="border:1px solid #4991FD;">Naqt</td>
                                    <td class="bg-info text-white" style="border:1px solid #4991FD;">Plastik</td>
                                    <td class="bg-info text-white" style="border:1px solid #4991FD;">Payme</td>
                                    <td class="bg-info text-white" style="border:1px solid #4991FD;">Qaytarildi</td>
                                    <td class="bg-info text-white" style="border:1px solid #4991FD;">Chegirma</td>
                                    <td class="bg-info text-white" style="border:1px solid #4991FD;">(Naqt + Plastik + Payme - Qaytarildi)</td>
                                    <td class="bg-danger text-white" style="border:1px solid #4991FD;">Kassadan</td>
                                    <td class="bg-danger text-white" style="border:1px solid #4991FD;">Balansdan</td>
                                    <td class="bg-danger text-white" style="border:1px solid #4991FD;">Kassa + Balans</td>
                                    <td class="bg-warning" style="border:1px solid #4991FD;">Hodimlar</td>
                                    <td class="bg-warning" style="border:1px solid #4991FD;">O'qituvchilar</td>
                                    <td class="bg-warning" style="border:1px solid #4991FD;">Hodim + O'qituvchi</td>
                                    <td style="background:#EB8F88;border:1px solid #4991FD;">Tashriflar</td>
                                    <td style="background:#EB8F88;border:1px solid #4991FD;">Guruhga qo'shildi</td>
                                    <td style="background:#EB8F88;border:1px solid #4991FD;">To'lov qildi</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($first_table as $key => $item)
                                    <tr>
                                        <th style="background:#A5C8FD;border:1px solid #4991FD">{{ $item['data'] }}</th>
                                        <td style="background:#C4E9F0;border:1px solid #4BD5F0">{{ number_format($item['naqt'], 0, '.', ' ') }}</td>
                                        <td style="background:#C4E9F0;border:1px solid #4BD5F0">{{ number_format($item['plastik'], 0, '.', ' ') }}</td>
                                        <td style="background:#C4E9F0;border:1px solid #4BD5F0">{{ number_format($item['payme'], 0, '.', ' ') }}</td>
                                        <td style="background:#C4E9F0;border:1px solid #4BD5F0">{{ number_format($item['qaytar'], 0, '.', ' ') }}</td>
                                        <td style="background:#C4E9F0;border:1px solid #4BD5F0">{{ number_format($item['chegirma'], 0, '.', ' ') }}</td>
                                        <td style="background:#C4E9F0;border:1px solid #4BD5F0">{{ number_format($item['naqt']+$item['plastik']+$item['payme']-$item['qaytar'], 0, '.', ' ') }}</td>
                                        <td style="background:#DCAEB3;border:1px solid #4BD5F0">{{ number_format($secont_table[$key]['KassadanXarajat'], 0, '.', ' ') }}</td>
                                        <td style="background:#DCAEB3;border:1px solid #4BD5F0">{{ number_format($secont_table[$key]['balansXarajat'], 0, '.', ' ') }}</td>
                                        <td style="background:#DCAEB3;border:1px solid #4BD5F0">{{ number_format($secont_table[$key]['xarajatlar'], 0, '.', ' ') }}</td>
                                        <td style="background:#FFECB2;border:1px solid #4BD5F0">{{ number_format($secont_table[$key]['hodimishHaqi'], 0, '.', ' ') }}</td>
                                        <td style="background:#FFECB2;border:1px solid #4BD5F0">{{ number_format($secont_table[$key]['techerishHaqi'], 0, '.', ' ') }}</td>
                                        <td style="background:#FFECB2;border:1px solid #4BD5F0">{{ number_format($secont_table[$key]['ishHaqi'], 0, '.', ' ') }}</td>
                                        <td style="background:#DBDBDB;border:1px solid #4BD5F0">{{ number_format($secont_table[$key]['daromad'], 0, '.', ' ') }}</td>
                                        <td style="background:#EBA19C;border:1px solid #4BD5F0">{{ number_format($there_table[$key]['users'], 0, '.', ' ') }}</td>
                                        <td style="background:#EBA19C;border:1px solid #4BD5F0">{{ number_format($there_table[$key]['guruh'], 0, '.', ' ') }}</td>
                                        <td style="background:#EBA19C;border:1px solid #4BD5F0">{{ number_format($there_table[$key]['tulov'], 0, '.', ' ') }}</td>
                                        <td style="background:#C8C8C8;border:1px solid #4BD5F0">{{ number_format($secont_table[$key]['active'], 0, '.', ' ') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="w-100 text-center">
                    <button id="downloadExcel" class="btn btn-secondary" title="print excel"><i class="bi bi-printer"></i></button>
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

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/xlsx@0.16.9/dist/xlsx.full.min.js"></script>
<script>
    $(document).ready(function() {
      $("#downloadExcel").click(function() {
        var wb = XLSX.utils.table_to_book(document.getElementById('myTable'), { sheet: "Jadval" });
        XLSX.writeFile(wb, 'jadval.xlsx');
      });
    });
</script>
@endsection