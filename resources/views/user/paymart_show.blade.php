@extends('layouts.meneger_src')
@section('title', 'Kirish')
@extends('layouts.user_header')
@section('content')

    <div class="main-content">
        <div class="container">
            <h2 class="text-center mb-4">To'lovni amalga oshirish</h2>

            <form action="{{ route('user.paymart_show_post') }}" method="POST">
                @csrf 
                <div class="form-group">
                    <label for="paymentAmount">To'lov summasi</label>
                    <input type="number" class="form-control" name="price" min="1000" max="10000000" required  placeholder="To'lov summasini kiriting">
                </div>
                <div class="form-group">
                    <label for="selectGroup">Guruhni tanlang</label>
                    <select name="cours_id" class="form-control" required id="selectGroup">
                        <option value="" selected disabled>Guruhni tanlang</option>
                        @foreach($Guruhlar as $item)
                            <option value="{{ $item['id'] }}">{{ $item['guruh_name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary w-100">To'lovni amalga oshirish</button>
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