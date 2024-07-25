@extends('layouts.meneger_src')
@section('title', 'Profel')
@section('content')
@extends('layouts.meneger_header')
@extends('layouts.meneger_menu')

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Profel</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('meneger.home') }}">Bosh sahifa</a></li>
                    <li class="breadcrumb-item active">Profel</li>
                </ol>
            </nav>
        </div>
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                    {{Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif (Session::has('error'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-inbox me-1"></i>
                    {{Session::get('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="w-100 card-title text-center">Statistika</h2>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Naqt to'lov:
                                <span class="badge bg-primary rounded-pill">{{ number_format($MarkazHodimStatistka['naqt'], 0, '.', ' ') }} so'm</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Plastik to'lov:
                                <span class="badge bg-primary rounded-pill">{{ number_format($MarkazHodimStatistka['plastik'], 0, '.', ' ') }} so'm</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Qaytarilgan to'lov:
                                <span class="badge bg-primary rounded-pill">{{ number_format($MarkazHodimStatistka['chegirma'], 0, '.', ' ') }} so'm</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Chegirmalar:
                                <span class="badge bg-primary rounded-pill">{{ number_format($MarkazHodimStatistka['qaytarildi'], 0, '.', ' ') }} so'm</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Tashriflar:
                                <span class="badge bg-primary rounded-pill">{{ $MarkazHodimStatistka['tashrif'] }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="w-100 card-title text-center">{{ auth()->user()->name }}</h2>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Telefon raqam:
                                <span class="badge bg-primary rounded-pill">{{ auth()->user()->phone1 }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Qo'shimcha telefon:
                                <span class="badge bg-primary rounded-pill">{{ auth()->user()->phone2 }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Yashash manzil:
                                <span class="badge bg-primary rounded-pill">{{ auth()->user()->addres }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Tug'ilgan kun:
                                <span class="badge bg-primary rounded-pill">{{ auth()->user()->tkun }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Login:
                                <span class="badge bg-primary rounded-pill">{{ auth()->user()->email }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="w-100 card-title text-center mb-0 pb-0">Parolni yangilash</h2>
                        <form action="{{ route('meneger_profel_update_password') }}" method="post" class="m-0 p-0">
                            @csrf 
                            <label for="password" class="">Joriy parol</label>
                            <input type="password" name="password" required class="form-control">
                            <label for="newpassword" class="">Yangi parol</label>
                            <input type="password" name="newpassword" required class="form-control">
                            <label for="confirmpassword" class="">Yangi parolni takrorlang</label>
                            <input type="password" name="confirmpassword" required class="form-control">
                            <button type="submit" class="btn btn-primary mt-1 w-100">Parolni yangilash</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        
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