@extends('layouts.meneger_src')
@section('title', 'Kirish')
@extends('layouts.techer_header')
@section('content')



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