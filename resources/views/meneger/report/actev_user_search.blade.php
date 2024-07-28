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
                <a href="{{ route('report_moliya') }}" class="btn btn-secondary w-100">Moliya</a>
            </div>
            <div class="col-lg-3 mt-lg-0 mt-2">
                <a href="{{ route('report_active_user') }}" class="btn btn-primary w-100">Aktiv talabalar</a>
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
                <h2 class="card-title w-100 text-center">Aktiv talabalar</h2>
                <form action="{{ route('report_active_user_search') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-6">
                            <select name="data" required class="form-select">
                                <option value="">Tanlang</option>
                                @foreach($Monch as $item)
                                <option value="{{ $item['Y-m'] }}">{{ $item['Y-M'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-6 col-6">
                            <button class="btn btn-primary w-100">Filter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h2 class="w-100 text-center card-title">Aktiv talabalar ({{ $data }})</h2>
                <div class="w-100" style="text-align:right">
                    <button id="downloadExcel" class="btn btn-secondary" title="print excel"><i class="bi bi-printer"></i></button>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="myTable" style="font-size:14px;border:1px solid #A5C8FD">
                        <head>
                            <tr>
                                <th>#</th>
                                <th>User ID</th>
                                <th>FIO</th>
                                <th>Telefon raqami</th>
                                <th>Qo'shimcha Telefon raqami</th>
                                <th>Yashash manzili</th>
                                <th>Tug'ilgan kuni</th>
                                <th>Balansi</th>
                                <th>Talaba haqida</th>
                                <th>Login</th>
                                <th>Guruh ID</th>
                                <th>Guruh</th>
                                <th>Ro'yhatdan otdi</th>
                            </tr>
                        </head>
                        <body>
                            @forelse($Search as $item)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $item['user']['id'] }}</td>
                                <td>{{ $item['user']['name'] }}</td>
                                <td>{{ $item['user']['phone1'] }}</td>
                                <td>{{ $item['user']['phone2'] }}</td>
                                <td>{{ $item['user']['addres'] }}</td>
                                <td>{{ $item['user']['tkun'] }}</td>
                                <td>{{ $item['user']['balans'] }}</td>
                                <td>{{ $item['user']['about'] }}</td>
                                <td>{{ $item['user']['email'] }}</td>
                                <td>{{ $item['guruh']['id'] }}</td>
                                <td>{{ $item['guruh']['guruh_name'] }}</td>
                                <td>{{ $item['user']['created_at'] }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center" colspan=11>Aktiv talabalar mavjud emas.</td>
                            </tr>
                            @endforelse
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