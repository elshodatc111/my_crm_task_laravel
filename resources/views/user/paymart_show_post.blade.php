@extends('layouts.meneger_src')
@section('title', 'Kirish')
@extends('layouts.user_header')
@section('content')
<div class="main-content">
        <div class="container text-center">
            <h2 class="text-center mb-4">To'lov</h2>
            <p><strong>Tulov summasi:</strong> 10000 so'm</p>
            <p><strong>Guruh:</strong> Hangil</p>
            <form method="POST" action="https://test.paycom.uz">
                <input type="hidden" name="merchant" value="{Merchant ID}"/>
                <input type="hidden" name="amount" value="{сумма чека в ТИИНАХ}"/>
                <input type="hidden" name="account[{field_name}]" value="{field_value}"/>
                <input type="hidden" name="lang" value="uz"/>
                <input type="hidden" name="callback" value="{url возврата после платежа}"/>
                <input type="hidden" name="callback_timeout" value="{miliseconds}"/>
                <input type="hidden" name="description" value="{Описание платежа}"/>
                <input type="hidden" name="detail" value="{JSON объект детализации в BASE64}"/>
                <button type="submit" class="btn btn-success"><b>Payme orqali to'lov</b></button>
            </form>
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