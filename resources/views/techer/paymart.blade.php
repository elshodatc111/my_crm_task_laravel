@extends('layouts.meneger_src')
@section('title', 'Kirish')
@extends('layouts.techer_header')
@section('content')

    <div class="main-content">
        <div class="container">
            <h5 class="card-title w-100 text-center">Ish haqi to'lovlari</span></h5>
            <div class="table-responsive">
                <table class="table text-center" style="font-size: 12px;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Guruh</th>
                            <th>To'lov summasi</th>
                            <th>To'lov turi</th>
                            <th>To'lov haqida</th>
                            <th>To'lov vaqti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($MarkazIshHaqi as $item)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $item['guruh_name'] }}</td>
                            <td>{{ $item['summa'] }}</td>
                            <td>{{ $item['type'] }}</td>
                            <td>{{ $item['comment'] }}</td>
                            <td>{{ $item['created_at'] }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan=6 class="text-center">Ish haqi to'lovlari mavjud emas.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
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
        <a href="{{ route('techer.paymart') }}" class="nav-link" style="color:#FFA500">
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