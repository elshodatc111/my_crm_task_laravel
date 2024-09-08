@extends('layouts.meneger_src')
@section('title', 'Kirish')
@extends('layouts.techer_header')
@section('content')
<div class="main-content">
        <div class="container">
            <h2 class="text-center mb-4">Profil</h2>
            
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Shaxsiy ma'lumotlar</h5>
                    <p><strong>FIO:</strong> {{ auth()->user()->name }}</p>
                    <p><strong>Login:</strong> {{ auth()->user()->email }}</p>
                    <p><strong>Telefon raqam:</strong> {{ auth()->user()->phone1 }}</p>
                    <p><strong>Telefon raqam:</strong> {{ auth()->user()->phone2 }}</p>
                    <p><strong>Yashash manzili:</strong> {{ auth()->user()->addres }}</p>
                </div>
            </div>
            
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Parolni yangilash</h5>
                    <form action="{{ route('user.updatePasword') }}" method="POST">
                        @csrf 
                        <div class="form-group">
                            <label for="currentPassword">Joriy parol</label>
                            <input type="password" class="form-control" name="password" placeholder="Joriy parol">
                        </div>
                        <div class="form-group">
                            <label for="newPassword">Yangi parol</label>
                            <input type="password" class="form-control" name="newPassword" placeholder="Yangi parol">
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Yangi parolni tasdiqlang</label>
                            <input type="password" class="form-control" name="confirmPassword" placeholder="Yangi parolni tasdiqlang">
                        </div>
                        <button type="submit" class="btn btn-primary">Yangilash</button>
                    </form>
                </div>
            </div>

            <div class="card text-center py-2">
                <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Chiqish</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
            </div>

        </div>
    </div>


    <div class="bottom-nav" style="z-index:7">
        <a href="{{ route('techer.index') }}" class="nav-link">
            <i class="bi bi-house-door"></i>
            <span>Bosh sahifa</span>
        </a>
        <a href="{{ route('techer.guruhs') }}" class="nav-link">
            <i class="bi bi-book"></i>
            <span>Guruhlar</span>
        </a>
        <a href="{{ route('techer.paymart') }}" class="nav-link">
            <i class="bi bi-currency-dollar"></i>
            <span>To'lovlar</span>
        </a>
        <a href="{{ route('techer.profel') }}" class="nav-link" style="color:#FFA500">
            <i class="bi bi-person"></i>
            <span>Profil</span>
        </a>
    </div>


@extends('layouts.techer_footer')
@endsection