@extends('layouts.meneger_src')
@section('title', 'Kirish')
@extends('layouts.user_header')
@section('content')

    <div class="main-content">
        <div class="container">
            @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                {{Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @elseif (Session::has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                {{Session::get('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $array['name'] }}</h5>
                    <p><strong>O'qituvchi:</strong> {{ $array['techer'] }}</p>
                    <p><strong>Guruh narxi:</strong> {{ $array['price'] }}</p>
                    <p><strong>Dars xonasi:</strong> {{ $array['room'] }}</p>
                    <p><strong>Dars vaqti:</strong> {{ $array['time'] }}</p>
                </div>
                <div class="p-2">
                    <table class="table text-center table-bordered" style="font-size:12px;">
                        <tr>
                            <th>#</th>
                            <th>Dars kuni</th>
                            <th>Dars xolati</th>
                        </tr>
                        @foreach($GropsTime as $item)
                        <tr>
                            <td>{{ $loop->index+1}}</td>
                            <td>{{ $item['data'] }}</td>
                            <td>
                                @if($item['data']>=date('Y-m-d'))
                                    Kutilmoqda
                                @elseif($item['data']<date('Y-m-d'))  
                                    Yakunlandi
                                @else
                                    Dars kuni
                                @endif 
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Test natijasi</h2>
                    @if($UserTest)
                        <p><strong>Testlar soni:</strong> 15</p>
                        <p><strong>To'gri javoblar :</strong> {{ $UserTest['count'] }}</p>
                        <p><strong>Ball:</strong> {{ $UserTest['ball'] }}</p>
                        <p><strong>Urinishlar soni:</strong> {{ $UserTest['urinish'] }}</p>
                        <p><strong>Oxirgi urinish:</strong> {{ $UserTest['updated_at'] }}</p>
                    @else
                        Siz testga qatnashmagansiz
                    @endif

                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-primary" href="{{ route('user.groups_test',$array['id']) }}">
                    <i class="bi bi-file-earmark-text"></i> Testlar sahifasiga o'tish
                </a>
            </div>
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