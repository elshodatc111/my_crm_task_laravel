@extends('layouts.meneger_src')
@section('title', 'Balans')
@section('content')
@extends('layouts.meneger_header')
@extends('layouts.meneger_menu')

<main id="main" class="main">

<div class="pagetitle">
  <h1>Balans</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('meneger.home') }}">Bosh sahifa</a></li>
      <li class="breadcrumb-item active">Balans</li>
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
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-1"></i>
                {{Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title w-100 text-center">Kassada mavjud summa</h5>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Naqt
                            <span class="badge bg-danger rounded-pill">450 000</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Plastik
                            <span class="badge bg-danger rounded-pill">35 054 151</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title w-100 text-center">Tasdiqlanish kutilmoqda</h5>
                    <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Naqt
                        <span class="badge bg-secondary rounded-pill">450 000</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Plastik
                        <span class="badge bg-secondary rounded-pill">35 054 151</span>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title w-100 text-center">Kassada mavjud ish haqi</h5>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Naqt
                            <span class="badge bg-primary rounded-pill">450 000</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Plastik
                            <span class="badge bg-primary rounded-pill">35 054 151</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title w-100 text-center">Mavjud balans</h5>
                    <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Naqt
                        <span class="badge bg-success rounded-pill">450 000</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Plastik
                        <span class="badge bg-success rounded-pill">35 054 151</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Payme
                        <span class="badge bg-success rounded-pill">35 054 151</span>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title w-100 text-center text-white mb-0">...</h5>
                    <button class="btn btn-primary my-1 w-100">Ish haqi uchun kassaga chiqim</button>
                    <button class="btn btn-primary my-1 w-100">Kassadan ish haqini qaytarish</button>
                    <button class="btn btn-primary my-1 w-100">Balansdan kassaga qaytarish</button>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title w-100 text-center text-white mb-0">...</h5>
                    <button class="btn btn-primary my-1 w-100">Balansdan xarajatlar uchun</button>
                    <button class="btn btn-primary my-1 w-100">Balansdan exson uchun chiqim</button>
                    <button class="btn btn-primary my-1 w-100">Tasischiga chiqim</button>
                </div>
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