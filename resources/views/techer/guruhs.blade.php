@extends('layouts.meneger_src')
@section('title', 'Kirish')
@extends('layouts.techer_header')
@section('content')

    <div class="main-content">
        <div class="container">
            <h2 class="text-center">Guruhlar</h2>
            @forelse($Grops as $item)
            <div class="card mb-2">
                <img src="https://new.kdb.uz/storage/news/April2023/yPZ5CZQQllRp6xp5kKPp.jpg" class="card-img-top" alt="Balansni to'ldirish">
                <div class="card-body text-center"><br><br>
                    <h5>{{ $item['guruh_name'] }}</h5>
                    <div class="row text-center">
                        <div class="col-lg-4">
                            <b>Boshlanish</b>
                            <p>{{ $item['guruh_start'] }}</p>
                        </div>
                        <div class="col-lg-4">
                            <b>Tugashi</b>
                            <p>{{ $item['guruh_end'] }}</p>
                        </div>
                        <div class="col-lg-4">
                            <b>Dars vaqti</b>
                            <p>{{ $item['dars_time'] }}</p>
                        </div>
                    </div>
                    <a href="{{ route('techer.guruh',$item['id']) }}" class="btn btn-primary w-100">
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
        <a href="{{ route('techer.index') }}" class="nav-link">
            <i class="bi bi-house-door"></i>
            <span>Bosh sahifa</span>
        </a>
        <a href="{{ route('techer.guruhs') }}" class="nav-link" style="color:#FFA500">
            <i class="bi bi-book"></i>
            <span>Guruhlar</span>
        </a>
        <a href="{{ route('techer.paymart') }}" class="nav-link">
            <i class="bi bi-currency-dollar"></i>
            <span>To'lovlar</span>
        </a>
        <a href="{{ route('techer.profel') }}" class="nav-link">
            <i class="bi bi-person"></i>
            <span>Profil</span>
        </a>
    </div>

@extends('layouts.techer_footer')
@endsection