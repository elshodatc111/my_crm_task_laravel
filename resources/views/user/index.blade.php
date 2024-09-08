@extends('layouts.meneger_src')
@section('title', 'Kirish')
@extends('layouts.user_header')
@section('content')

    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-0 pt-0 mb-2">
                    <div class="card">
                        <img style="width:100%" class="mt-0" src="{{ env('MARKAZLOGOLINK') }}/{{ $Markaz['image'] }}" class="card-img-top" />
                        <div class="card-body">
                            <h5 class="card-title w-100 text-center">{{ $Markaz['name'] }} o'quv markazi</h5>
                        </div>
                    </div>
                </div>
                @if($Markaz['payme_id']!='NULL')
                <div class="col-12">
                    <div class="card">
                        <img src="https://new.kdb.uz/storage/news/April2023/yPZ5CZQQllRp6xp5kKPp.jpg" class="card-img-top" alt="Balansni to'ldirish" />
                        <div class="card-body">
                            <p class="w-100 text-center">Kurslar uchun to'lovni oson va tez amalga oshiring</p>
                            <a href="{{ route('user.paymart_show') }}" class="btn btn-primary w-100">
                                <i class="bi bi-credit-card"></i> To'lovga o'tish
                            </a>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

    <div class="bottom-nav" style="z-index:7">
        <a href="{{ route('user.index') }}" class="nav-link" style="color:#FFA500">
            <i class="bi bi-house-door"></i>
            <span>Bosh sahifa</span>
        </a>
        <a href="{{ route('user.groups') }}" class="nav-link">
            <i class="bi bi-book"></i>
            <span>Guruhlar</span>
        </a>
        <a href="{{ route('user.paymart') }}" class="nav-link">
            <i class="bi bi-currency-dollar"></i>
            <span>To'lovlar</span>
        </a>
        <a href="{{ route('user.profel') }}" class="nav-link">
            <i class="bi bi-person"></i>
            <span>Profil</span>
        </a>
    </div>


@extends('layouts.user_footer')
@endsection