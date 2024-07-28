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