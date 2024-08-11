@extends('layouts.meneger_src')
@section('title', 'Kirish')
@extends('layouts.user_header')
@section('content')
<div class="main-content">
        <div class="container">
            <h2 class="text-center mb-4">To'lovlar</h2>
            @forelse($UserPaymart as $item)
            <div class="card mb-3">
                <img src="images/paymart.jpg" class="card-img-top" alt="To'lov Details">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 text-center">
                            <p><strong>To'lov:</strong><br> {{ $item['summa'] }} so'm</p>
                        </div>
                        <div class="col-6 text-center">
                            <p><strong>To'lov vaqti:</strong><br> {{ $item['created_at'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="mt-5 text-center">
                <img src="https://cdni.iconscout.com/illustration/premium/thumb/searching-file-illustration-download-in-svg-png-gif-formats--data-finding-something-business-pack-people-illustrations-3414904.png?f=webp" class="card-img-top" alt="Balansni to'ldirish">
                <br><br>
                <p>Sizda to'lovlar mavjud emas.</p>
            </div>
            @endforelse
        </div>
    </div>

    <div class="bottom-nav" style="z-index:7">
        <a href="{{ route('user.index') }}" class="nav-link">
            <i class="bi bi-house-door"></i>
            <span>Bosh sahifa</span>
        </a>
        <a href="{{ route('user.groups') }}" class="nav-link">
            <i class="bi bi-book"></i>
            <span>Guruhlar</span>
        </a>
        <a href="{{ route('user.paymart') }}" class="nav-link" style="color:#FFA500">
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