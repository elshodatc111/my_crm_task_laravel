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

            <div class="card">
                <div class="card-body">
                    <h2 class="card-title w-100 text-center">sdfsdf</h2>
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