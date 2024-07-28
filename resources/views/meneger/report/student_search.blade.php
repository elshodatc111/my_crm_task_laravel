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
                <a href="{{ route('report_student') }}" class="btn btn-primary w-100">Talabalar</a>
            </div>
            <div class="col-lg-3 mt-lg-0 mt-2">
                <a href="{{ route('report_hodim') }}" class="btn btn-secondary w-100">Hodimlar</a>
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
                <h2 class="card-title w-100 text-center">Talabalar</h2>
                <form action="{{ route('report_student_search') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <select name="type" required class="form-select">
                                <option value="">Tanlang</option>
                                <option value="allUser">Barcha talabalar</option>
                                <option value="allUserDebet">Qarzdor talabalar</option>
                                <option value="allGroup">Barcha guruhlar</option>
                                <option value="allUserNoGrops">Guruhga biriktirilmagan talabalar</option>
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
                    @if($type=='allUser')
                        Barcha talabalar
                    @elseif($type == 'allUserDebet')
                        Barcha qarzdor talabalar
                    @elseif($type == 'allGroup')
                        Barcha guruhlar
                    @elseif($type == 'allUserNoGrops')
                        Guruhga biriktirilmagan talabalar
                    @endif
                </h2>
                <div class="w-100" style="text-align:right">
                    <button id="downloadExcel" class="btn btn-secondary" title="print excel"><i class="bi bi-printer"></i></button>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="myTable" style="font-size:14px;border:1px solid #A5C8FD">
                        <thead>
                            @if($type=='allUser')
                            <tr>
                                <th>#</th>
                                <th>UserID</th>
                                <th>FIO</th>
                                <th>Telefon raqam</th>
                                <th>Qo'shimcha telefon raqam</th>
                                <th>Yashash manzili</th>
                                <th>Tug'ilgan kuni</th>
                                <th>Talaba haqida</th>
                                <th>SMM</th>
                                <th>Balans</th>
                                <th>Login</th>
                                <th>Ro'yhatga olindi</th>
                            </tr>
                            @elseif($type=='allUserDebet')
                            <tr>
                                <th>#</th>
                                <th>UserID</th>
                                <th>FIO</th>
                                <th>Telefon raqam</th>
                                <th>Qo'shimcha telefon raqam</th>
                                <th>Yashash manzili</th>
                                <th>Tug'ilgan kuni</th>
                                <th>Talaba haqida</th>
                                <th>SMM</th>
                                <th>Qarzdorlik</th>
                                <th>Login</th>
                                <th>Ro'yhatga olindi</th>
                            </tr>
                            @elseif($type=='allGroup')
                            <tr>
                                <th>#</th>
                                <th>GuruhID</th>
                                <th>Guruh</th>
                                <th>Guruh uchun kurs</th>
                                <th>Boshlanish vaqti</th>
                                <th>Tugash vaqti</th>
                                <th>Hafta kunlari</th>
                                <th>Darslar soni</th>
                                <th>Darslar vaqti</th>
                                <th>Dars xonasi</th>
                                <th>Guruh narxi</th>
                                <th>Guruh uchun chegirma</th>
                                <th>Guruh uchun admin chegirma</th>
                                <th>Chegirma muddati</th>
                                <th>O'qituvchi</th>
                                <th>O'qituvchiga to'lov foiz</th>
                                <th>O'qituvchiga to'lov</th>
                                <th>O'qituvchiga bonus</th>
                                <th>Meneger</th>
                                <th>Davom ettirilgan guruh ID</th>
                                <th>Guruh yaratildi</th>
                                <th>Guruh yangilandi</th>
                            </tr>
                            @elseif($type=='allUserNoGrops')
                            <tr>
                                <th>#</th>
                                <th>UserID</th>
                                <th>FIO</th>
                                <th>Telefon raqam</th>
                                <th>Qo'shimcha telefon raqam</th>
                                <th>Yashash manzili</th>
                                <th>Tug'ilgan kuni</th>
                                <th>Talaba haqida</th>
                                <th>SMM</th>
                                <th>Balans</th>
                                <th>Login</th>
                                <th>Ro'yhatga olindi</th>
                            </tr>
                            @endif
                        </thead>
                        <tbody>
                            @if($type=='allUser')
                                @forelse($Search as $item)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $item['id'] }}</td>
                                        <td>{{ $item['name'] }}</td>
                                        <td>{{ $item['phone1'] }}</td>
                                        <td>{{ $item['phone2'] }}</td>
                                        <td>{{ $item['addres'] }}</td>
                                        <td>{{ $item['tkun'] }}</td>
                                        <td>{{ $item['about'] }}</td>
                                        <td>{{ $item['smm'] }}</td>
                                        <td>{{ $item['balans'] }}</td>
                                        <td>{{ $item['email'] }}</td>
                                        <td>{{ $item['created_at'] }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan=12 class="text-center">Talabalar mavjud emas.</td>
                                    </tr>
                                @endif
                            @elseif($type=='allUserDebet') 
                                @forelse($Search as $item)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $item['id'] }}</td>
                                        <td>{{ $item['name'] }}</td>
                                        <td>{{ $item['phone1'] }}</td>
                                        <td>{{ $item['phone2'] }}</td>
                                        <td>{{ $item['addres'] }}</td>
                                        <td>{{ $item['tkun'] }}</td>
                                        <td>{{ $item['about'] }}</td>
                                        <td>{{ $item['smm'] }}</td>
                                        <td>{{ $item['balans'] }}</td>
                                        <td>{{ $item['email'] }}</td>
                                        <td>{{ $item['created_at'] }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan=12 class="text-center">Talabalar mavjud emas.</td>
                                    </tr>
                                @endif
                            @elseif($type=='allUserNoGrops') 
                                @forelse($Search as $item)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $item['id'] }}</td>
                                        <td>{{ $item['name'] }}</td>
                                        <td>{{ $item['phone1'] }}</td>
                                        <td>{{ $item['phone2'] }}</td>
                                        <td>{{ $item['addres'] }}</td>
                                        <td>{{ $item['tkun'] }}</td>
                                        <td>{{ $item['about'] }}</td>
                                        <td>{{ $item['smm'] }}</td>
                                        <td>{{ $item['balans'] }}</td>
                                        <td>{{ $item['email'] }}</td>
                                        <td>{{ $item['created_at'] }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan=12 class="text-center">Talabalar mavjud emas.</td>
                                    </tr>
                                @endif
                            @elseif($type=='allGroup') 
                                @forelse($Search as $item)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $item[0]['guruh_id'] }}</td>
                                        <td>{{ $item[0]['guruh_name'] }}</td>
                                        <td>{{ $item[0]['cours_name'] }}</td>
                                        <td>{{ $item[0]['guruh_start'] }}</td>
                                        <td>{{ $item[0]['guruh_end'] }}</td>
                                        <td>{{ $item[0]['hafta_kun'] }}</td>
                                        <td>{{ $item[0]['dars_count'] }}</td>
                                        <td>{{ $item[0]['dars_time'] }}</td>
                                        <td>{{ $item[0]['room'] }}</td>
                                        <td>{{ $item[0]['summa'] }}</td>
                                        <td>{{ $item[0]['chegirma'] }}</td>
                                        <td>{{ $item[0]['admin_chegirma'] }}</td>
                                        <td>{{ $item[0]['chegirma_time'] }}</td>
                                        <td>{{ $item[0]['techer'] }}</td>
                                        <td>{{ $item[0]['techer_foiz'] }}</td>
                                        <td>{{ $item[0]['techer_paymart'] }}</td>
                                        <td>{{ $item[0]['techer_bonus'] }}</td>
                                        <td>{{ $item[0]['meneger'] }}</td>
                                        <td>{{ $item[0]['next_id'] }}</td>
                                        <td>{{ $item[0]['created_at'] }}</td>
                                        <td>{{ $item[0]['updated_at'] }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan=22 class="text-center">Guruhlar mavjud emas.</td>
                                    </tr>
                                @endif
                            @endif
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