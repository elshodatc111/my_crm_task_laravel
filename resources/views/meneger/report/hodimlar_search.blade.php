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
                <a href="{{ route('report_hodim') }}" class="btn btn-primary w-100">Hodimlar</a>
            </div>
            <div class="col-lg-3 mt-lg-0 mt-2">
                <a href="{{ route('report_moliya') }}" class="btn btn-secondary w-100">Moliya</a>
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
                <h2 class="card-title w-100 text-center">Hodimlar</h2>
                <form action="{{ route('report_hodim_search') }}" method="post">
                    @csrf 
                    <div class="row">
                        <div class="col-6">
                            <select name="type" required class="form-select">
                                <option value="">Tanlang</option>
                                <option value="allHodim">Barcha hodimlar</option>
                                <option value="allHodimTulov">Hodimlarga to'langan ish haqi</option>
                                <option value="allTecher">Barcha O'qituvchilar</option>
                                <option value="allTecherTulov">O'qituvchilarga  to'langan ish haqi</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-primary w-100">Filter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="card">
            <div class="card-body">
                <h2 class="w-100 text-center card-title">
                    @if($type=='allHodim')
                        Barcha hodimlar
                    @elseif($type=='allHodimTulov')
                        Barcha hodimlarga to'langan ish haqi
                    @elseif($type=='allTecher')
                        Barcha o'qituvchilar
                    @elseif($type=='allTecherTulov')
                        Barcha o'qituvchilarga to'langan ish haqi
                    @endif
                </h2>
                <div class="w-100" style="text-align:right">
                    <button id="downloadExcel" class="btn btn-secondary" title="print excel"><i class="bi bi-printer"></i></button>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="myTable" style="font-size:14px;border:1px solid #A5C8FD">
                        <head>
                        @if($type=='allHodim')
                            <tr>
                                <th>#</th>
                                <th>Hodim</th>
                                <th>Telefon raqami</th>
                                <th>Qo'shimcha telefon raqami</th>
                                <th>Yashash manzili</th>
                                <th>Tug'ilgan kuni</th>
                                <th>Ishga olini</th>
                                <th>Oxirgi yangilanish</th>
                                <th>Login</th>
                                <th>Hodim haqida</th>
                                <th>Lavozimi</th>
                                <th>Hodim holati</th>
                            </tr>
                        @elseif($type=='allHodimTulov')
                            <tr>
                                <th>#</th>
                                <th>Hodim</th>
                                <th>To'langan summa</th>
                                <th>To'lov turi</th>
                                <th>To'lov haqida</th>
                                <th>Meneger</th>
                                <th>To'lov qilindi</th>
                            </tr>
                        @elseif($type=='allTecher')
                            <tr>
                                <th>#</th>
                                <th>O'qituvchi</th>
                                <th>Telefon raqami</th>
                                <th>Qo'shimcha telefon raqami</th>
                                <th>Yashash manzili</th>
                                <th>Tug'ilgan kuni</th>
                                <th>Ishga olini</th>
                                <th>Oxirgi yangilanish</th>
                                <th>Login</th>
                                <th>O'qituvchi haqida</th>
                                <th>O'qituvchi holati</th>
                            </tr>
                        @elseif($type=='allTecherTulov')
                            <tr>
                                <th>#</th>
                                <th>O'qituvchi</th>
                                <th>To'langan summa</th>
                                <th>To'lov turi</th>
                                <th>To'longan guruh</th>
                                <th>To'lov haqida</th>
                                <th>Meneger</th>
                                <th>To'lov qilindi</th>
                            </tr>
                        @endif
                        </head>
                        <body>
                        @if($type=='allHodim')
                            @forelse($Search as $item)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $item['name'] }}</td>
                                    <td>{{ $item['phone1'] }}</td>
                                    <td>{{ $item['phone2'] }}</td>
                                    <td>{{ $item['addres'] }}</td>
                                    <td>{{ $item['tkun'] }}</td>
                                    <td>{{ $item['created_at'] }}</td>
                                    <td>{{ $item['updated_at'] }}</td>
                                    <td>{{ $item['email'] }}</td>
                                    <td>{{ $item['about'] }}</td>
                                    <td>
                                        @if($item['role_id']==2)
                                            Drektor
                                        @elseif($item['role_id']==3)
                                            Admin
                                        @elseif($item['role_id']==4)
                                            Meneger
                                        @endif
                                    </td>
                                    <td>
                                        @if($item['status']=='true')
                                            Aktiv
                                        @else 
                                            Bloklangan
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan=12 class="text-center">Hodimlar mavjud emas.</td>
                                </tr>
                            @endforelse
                        @elseif($type=='allHodimTulov')
                            @forelse($Search as $item)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $item['name'] }}</td>
                                    <td>{{ $item['summa'] }}</td>
                                    <td>{{ $item['type'] }}</td>
                                    <td>{{ $item['comment'] }}</td>
                                    <td>{{ $item['meneger'] }}</td>
                                    <td>{{ $item['created_at'] }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan=7 class="text-center">Hodimlarga to'langan ish haqi mavjud emas.</td>
                                </tr>
                            @endforelse
                        @elseif($type=='allTecher')
                            @forelse($Search as $item)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $item['name'] }}</td>
                                    <td>{{ $item['phone1'] }}</td>
                                    <td>{{ $item['phone2'] }}</td>
                                    <td>{{ $item['addres'] }}</td>
                                    <td>{{ $item['tkun'] }}</td>
                                    <td>{{ $item['created_at'] }}</td>
                                    <td>{{ $item['updated_at'] }}</td>
                                    <td>{{ $item['email'] }}</td>
                                    <td>{{ $item['about'] }}</td>
                                    <td>
                                        @if($item['status']=='true')
                                            Aktiv
                                        @else 
                                            Bloklangan
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan=11 class="text-center">O'qituvchilar mavjud emas.</td>
                                </tr>
                            @endforelse
                        @elseif($type=='allTecherTulov')
                            @forelse($Search as $item)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $item['name'] }}</td>
                                    <td>{{ $item['summa'] }}</td>
                                    <td>{{ $item['type'] }}</td>
                                    <td>{{ $item['guruh_name'] }}</td>
                                    <td>{{ $item['comment'] }}</td>
                                    <td>{{ $item['meneger'] }}</td>
                                    <td>{{ $item['created_at'] }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan=11 class="text-center">O'qituvchilarga to'langan ish haqi mavjud emas.</td>
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