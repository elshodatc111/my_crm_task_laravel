@extends('layouts.meneger_src')
@section('title', 'Kirish')
@extends('layouts.user_header')
@section('content')

    <div class="main-content">
        <div class="container">
            <h2 class="text-center mb-4">Kursga oid test savollari</h2>
            
            <form action="{{ route('user.groups_test_story') }}" method="POST">
                @csrf 
                <input type="hidden" name="id" value="{{ $id }}">
                @forelse($Quez as $item)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item['savol'] }}</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q{{ $item['id'] }}" required id="q{{ $item['id'] }}a" value="{{ $item['numbers']==1?1:0 }}">
                            <label class="form-check-label" for="q{{ $item['id'] }}a">{{ $item['javob1'] }}</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q{{ $item['id'] }}" required id="q{{ $item['id'] }}b" value="{{ $item['numbers']==2?1:0 }}">
                            <label class="form-check-label" for="q{{ $item['id'] }}b">{{ $item['javob2'] }}</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q{{ $item['id'] }}" required id="q{{ $item['id'] }}c" value="{{ $item['numbers']==3?1:0 }}">
                            <label class="form-check-label" for="q{{ $item['id'] }}c">{{ $item['javob3'] }}</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q{{ $item['id'] }}" required id="q{{ $item['id'] }}d" value="{{ $item['numbers']==4?1:0 }}">
                            <label class="form-check-label" for="q{{ $item['id'] }}d">{{ $item['javob4'] }}</label>
                        </div>
                    </div>
                </div>

                @empty 

                @endforelse
                @if($Quez)
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary">Javoblarni tekshirish</button>
                </div>
                @endif
            </form>
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