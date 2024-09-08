@extends('layouts.meneger_src')
@section('title', 'Kirish')
@extends('layouts.user_header')
@section('content')
    <div class="main-content">
        <div class="container text-center">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-4 card-title">To'lov</h2>
                    <p><strong>Tulov summasi:</strong> {{ $Order['price'] }} so'm</p>
                    <p><strong>Guruh:</strong> {{ $Grops['guruh_name'] }}</p>
                    <form method="POST" action="https://checkout.paycom.uz">
                        <input type="hidden" name="merchant" value="{{ $Markaz['payme_id'] }}"/>
                        <input type="hidden" name="amount" value="{{ $Order['price']."00" }}"/>
                        <input type="hidden" name="account[order_id]" value="{{ $Order['order_id'] }}"/>
                        <input type="hidden" name="lang" value="uz"/>
                        <input type="hidden" name="callback" value="https://atko.uz/mycours"/>
                        <input type="hidden" name="callback_timeout" value="{20}"/>
                        <input type="hidden" name="description" value="ATKO o'quv markaz online kurslari uchun to'lov"/>
                        <button type="submit" style="border: 1px solid green; border-radius: 5px" class="p-1"><img src="./img/payme.png" /></button>
                    </form> 
                </div>
            </div>
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