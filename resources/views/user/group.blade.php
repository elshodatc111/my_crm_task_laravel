@extends('layouts.meneger_src')
@section('title', 'Kirish')
@extends('layouts.user_header')
@section('content')

    <div class="main-content">
        <div class="container">
            <h2 class="text-center">Guruhlar</h2>
            @forelse($Guruhlar as $item)
            <div class="card mb-2">
                @if($item['status']=='aktiv')
                <img src="images/activ.png" class="card-img-top" alt="Balansni to'ldirish">
                @elseif($item['status']=='new')
                <img src="images/new.png" class="card-img-top" alt="Balansni to'ldirish">
                @else 
                <img src="images/end.png" class="card-img-top" alt="Balansni to'ldirish">
                @endif
                <div class="card-body text-center">
                    <h5>{{ $item['guruh_name'] }}</h5>
                    <a href="{{ route('user.groups_show',$item['id'] ) }}" class="btn btn-primary w-100">
                        <i class="bi bi-eye"></i> Kurs haqida
                    </a>
                </div>
            </div>
            @empty
            <div class="mt-5 text-center">
                <img src="https://cdni.iconscout.com/illustration/premium/thumb/searching-file-illustration-download-in-svg-png-gif-formats--data-finding-something-business-pack-people-illustrations-3414904.png?f=webp" class="card-img-top" alt="Balansni to'ldirish">
                <br><br>
                <p>Sizda kurslar mavjud emas. Menegerlarimiz bilan bog'laning</p>
            </div>
            @endforelse
        </div>
    </div>


    <div class="bottom-nav" style="z-index:7">
        <a href="{{ route('user.index') }}" class="nav-link">
            <i class="bi bi-house-door"></i>
            <span>Bosh sahifa</span>
        </a>
        <a href="{{ route('user.groups') }}" class="nav-link" style="color:#FFA500">
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