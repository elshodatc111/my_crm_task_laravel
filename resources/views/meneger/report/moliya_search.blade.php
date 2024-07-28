@extends('layouts.meneger_src')
@section('title', 'Hisobot')
@section('content')
@extends('layouts.meneger_header')
@extends('layouts.meneger_menu')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Hisobot</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('meneger.home') }}">Bosh sahifa</a></li>
                <li class="breadcrumb-item active">Hisobot</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row mb-2">
            <div class="col-lg-3 mt-lg-0 mt-2">
                <a href="{{ route('report_student') }}" class="btn btn-secondary w-100">Talabalar</a>
            </div>
            <div class="col-lg-3 mt-lg-0 mt-2">
                <a href="{{ route('report_hodim') }}" class="btn btn-secondary w-100">Hodimlar</a>
            </div>
            <div class="col-lg-3 mt-lg-0 mt-2">
                <a href="{{ route('report_moliya') }}" class="btn btn-primary w-100">Moliya</a>
            </div>
            <div class="col-lg-3 mt-lg-0 mt-2">
                <a href="{{ route('report_active_user') }}" class="btn btn-secondary w-100">Aktiv talabalar</a>
            </div>
        </div>

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

        <div class="card">
            <div class="card-body">
                <h2 class="card-title w-100 text-center">Moliya</h2>
                <form action="{{ route('report_moliya_search') }}" method="post">
                    @csrf 
                    <div class="row">
                        <div class="col-6">
                            <select name="type" required class="form-select">
                                <option value="">Tanlang</option>
                                <option value="allPaymarty">Barcha to'lovlar</option>
                                <option value="kassadanChiqim">Kassadan tasdiqlangan chiqimlar</option>
                                <option value="KassadanXarajat">Kassadan tasdiqlangan xarajatlar</option>
                                <option value="KassagaQaytarIshHaqi">Kassaga qaytarilgan ish haqi</option>
                                <option value="KassadanBalansgaIshHaqi">Kassadan balansga qaytarilgan ish haqi</option>
                                <option value="KassagaQaytar">Balansdan kassaga qaytarilganlar</option>
                                <option value="BalansdanXarajat">Balansdan xarajatlar</option>
                                <option value="BalansdanChiqim">Balansdan chiqimlar</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary w-100">Filter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h2 class="w-100 text-center card-title">
                    @if($type=='allPaymarty')
                        Barcha to'lovlar
                    @elseif($type=='kassadanChiqim')
                        Kassadan tasdiqlangan chiqimlar
                    @elseif($type=='KassadanXarajat')
                        Kassadan tasdiqlangan xarajatlar
                    @elseif($type=='KassagaQaytarIshHaqi')
                        Kassaga qaytarilgan ish haqi
                    @elseif($type=='KassadanBalansgaIshHaqi')
                        Kassadan balansga qaytarilgan ish haqi
                    @elseif($type=='KassagaQaytar')
                        Balansdan kassaga qaytarilganlar
                    @elseif($type=='BalansdanXarajat')
                        Balansdan xarajarlar
                    @elseif($type=='BalansdanChiqim')
                        Balansdan chiqimlar
                    @endif
                </h2>
                <div class="w-100" style="text-align:right">
                    <button id="downloadExcel" class="btn btn-secondary" title="print excel"><i class="bi bi-printer"></i></button>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="myTable" style="font-size:14px;border:1px solid #A5C8FD">
                        <head>
                        @if($type=='allPaymarty')
                            <tr>
                                <td>#</td>
                                <td>Student_id</td>
                                <td>Student</td>
                                <td>To'lov summasi</td>
                                <td>To'lov turi</td>
                                <td>Guruh ID</td>
                                <td>To'lov haqida</td>
                                <td>Meneger</td>
                                <td>To'lov vaqti</td>
                            </tr>
                        @elseif($type=='kassadanChiqim')
                            <tr>
                                <td>#</td>
                                <td>Hodisa</td>
                                <td>Summa</td>
                                <td>Chiqim Turi</td>
                                <td>Chiqim haqida</td>
                                <td>Chiqim vaqti</td>
                                <td>Meneger</td>
                                <td>Administrator</td>
                                <td>Tasdiqlandi</td>
                            </tr>
                        @elseif($type=='KassadanXarajat')
                            <tr>
                                <td>#</td>
                                <td>Hodisa</td>
                                <td>Summa</td>
                                <td>Chiqim Turi</td>
                                <td>Chiqim haqida</td>
                                <td>Chiqim vaqti</td>
                                <td>Meneger</td>
                                <td>Administrator</td>
                                <td>Tasdiqlandi</td>
                            </tr>
                        @elseif($type=='KassagaQaytarIshHaqi')
                            <tr>
                                <td>#</td>
                                <td>Hodisa</td>
                                <td>Summa</td>
                                <td>Chiqim Turi</td>
                                <td>Chiqim haqida</td>
                                <td>Administrator</td>
                                <td>Tasdiqlandi</td>
                            </tr>
                        @elseif($type=='KassadanBalansgaIshHaqi')
                            <tr>
                                <td>#</td>
                                <td>Hodisa</td>
                                <td>Summa</td>
                                <td>Chiqim Turi</td>
                                <td>Chiqim haqida</td>
                                <td>Administrator</td>
                                <td>Tasdiqlandi</td>
                            </tr>
                        @elseif($type=='KassagaQaytar')
                            <tr>
                                <td>#</td>
                                <td>Hodisa</td>
                                <td>Summa</td>
                                <td>Chiqim Turi</td>
                                <td>Chiqim haqida</td>
                                <td>Administrator</td>
                                <td>Tasdiqlandi</td>
                            </tr>
                        @elseif($type=='BalansdanXarajat')
                            <tr>
                                <td>#</td>
                                <td>Hodisa</td>
                                <td>Summa</td>
                                <td>Chiqim Turi</td>
                                <td>Chiqim haqida</td>
                                <td>Administrator</td>
                                <td>Tasdiqlandi</td>
                            </tr>
                        @elseif($type=='BalansdanChiqim')
                            <tr>
                                <td>#</td>
                                <td>Hodisa</td>
                                <td>Summa</td>
                                <td>Chiqim Turi</td>
                                <td>Chiqim haqida</td>
                                <td>Administrator</td>
                                <td>Tasdiqlandi</td>
                            </tr>
                        @endif
                        </head>
                        <body>
                        @if($type=='allPaymarty')
                            @forelse($Search as $item)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $item['user_id'] }}</td>
                                    <td>{{ $item['name'] }}</td>
                                    <td>{{ $item['summa'] }}</td>
                                    <td>{{ $item['tulov_type'] }}</td>
                                    <td>{{ $item['guruh'] }}</td>
                                    <td>{{ $item['comment'] }}</td>
                                    <td>{{ $item['meneger'] }}</td>
                                    <td>{{ $item['created_at'] }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan=9>To'lovlar mavjus emas.</td>
                                </tr>
                            @endforelse
                        @elseif($type=='kassadanChiqim')
                            @forelse($Search as $item)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $item['hodisa'] }}</td>
                                    <td>{{ $item['summa'] }}</td>
                                    <td>{{ $item['type'] }}</td>
                                    <td>{{ $item['comment'] }}</td>
                                    <td>{{ $item['created_at'] }}</td>
                                    <td>{{ $item['meneger'] }}</td>
                                    <td>{{ $item['administrator'] }}</td>
                                    <td>{{ $item['updated_at'] }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan=9>Kassadan chiqimlar mavjus emas.</td>
                                </tr>
                            @endforelse
                        @elseif($type=='KassadanXarajat')
                            @forelse($Search as $item)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $item['hodisa'] }}</td>
                                    <td>{{ $item['summa'] }}</td>
                                    <td>{{ $item['type'] }}</td>
                                    <td>{{ $item['comment'] }}</td>
                                    <td>{{ $item['created_at'] }}</td>
                                    <td>{{ $item['meneger'] }}</td>
                                    <td>{{ $item['administrator'] }}</td>
                                    <td>{{ $item['updated_at'] }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan=9>Kassadan xarajatlar mavjus emas.</td>
                                </tr>
                            @endforelse
                        @elseif($type=='KassagaQaytarIshHaqi')
                            @forelse($Search as $item)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $item['hodisa'] }}</td>
                                    <td>{{ $item['summa'] }}</td>
                                    <td>{{ $item['type'] }}</td>
                                    <td>{{ $item['comment'] }}</td>
                                    <td>{{ $item['administrator'] }}</td>
                                    <td>{{ $item['updated_at'] }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan=9>Balansdan kassaga qaytarilgan ish haqi mavjus emas.</td>
                                </tr>
                            @endforelse
                        @elseif($type=='KassadanBalansgaIshHaqi')
                            @forelse($Search as $item)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $item['hodisa'] }}</td>
                                    <td>{{ $item['summa'] }}</td>
                                    <td>{{ $item['type'] }}</td>
                                    <td>{{ $item['comment'] }}</td>
                                    <td>{{ $item['administrator'] }}</td>
                                    <td>{{ $item['updated_at'] }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan=9>Kassadan balansga qaytarilhan ish haqi mavjus emas.</td>
                                </tr>
                            @endforelse
                        @elseif($type=='KassagaQaytar')
                            @forelse($Search as $item)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $item['hodisa'] }}</td>
                                    <td>{{ $item['summa'] }}</td>
                                    <td>{{ $item['type'] }}</td>
                                    <td>{{ $item['comment'] }}</td>
                                    <td>{{ $item['administrator'] }}</td>
                                    <td>{{ $item['updated_at'] }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan=9>Kassaga qaytarilganlar mavjus emas.</td>
                                </tr>
                            @endforelse
                        @elseif($type=='BalansdanXarajat')
                            @forelse($Search as $item)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $item['hodisa'] }}</td>
                                    <td>{{ $item['summa'] }}</td>
                                    <td>{{ $item['type'] }}</td>
                                    <td>{{ $item['comment'] }}</td>
                                    <td>{{ $item['administrator'] }}</td>
                                    <td>{{ $item['updated_at'] }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan=7>Balansdan xarjatlar mavjus emas.</td>
                                </tr>
                            @endforelse
                        @elseif($type=='BalansdanChiqim')
                            @forelse($Search as $item)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $item['hodisa'] }}</td>
                                    <td>{{ $item['summa'] }}</td>
                                    <td>{{ $item['type'] }}</td>
                                    <td>{{ $item['comment'] }}</td>
                                    <td>{{ $item['administrator'] }}</td>
                                    <td>{{ $item['updated_at'] }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan=7>Balansdan chiqimlar mavjud emas.</td>
                                </tr>
                            @endforelse
                        @endif
                        </body>
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