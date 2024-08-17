@extends('layouts.meneger_src')
@section('title', 'Kirish')
@extends('layouts.techer_header')
@section('content')
    <div class="main-content">
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-1"></i>
            {{Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif (Session::has('error'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-1"></i>
            {{Session::get('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="container">
            <h2 class="text-center mb-4">Guruh haqida ma'lumot</h2>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $Grops['guruh_name'] }}</h5>
                    <p><strong>O'qituvchiga to'lov:</strong> {{ $Grops['techer_paymart'] }}</p>
                    <p><strong>O'qituvchiga to'lov(%):</strong> {{ $Grops['techer_foiz'] }}</p>
                    <p><strong>O'qituvchiga bonus:</strong> {{ $Grops['techer_bonus'] }}</p>
                    <p><strong>Boshlanish:</strong> {{ $Grops['guruh_start'] }}</p>
                    <p><strong>Tugash:</strong> {{ $Grops['guruh_end'] }}</p>
                    <p><strong>Dars vaqt:</strong> {{ $Grops['dars_time'] }}</p>
                </div>
            </div>
             @if($davomat == 1)
            <div class="text-center mb-3">
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">DAVOMAT</button>
            </div>
            @endif
            <div class="card mb-3">
                <div class="card-body text-center">
                    <h5 class="card-title">Dars kunlari</h5>
                    <table class="table table-bordered text-center" style="font-size:14px;">
                        <tr>
                            <th>#</th>
                            <th>Dars kuni</th>
                            <th>Status</th>
                            <th>Dars vaqti</th>
                        </tr>
                        @foreach($GropsTime as $item)
                        <tr style="font-size:10px">
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $item['data'] }}</td>
                            <td>
                                @if($item['data']<date('Y-m-d'))
                                    <b class="p-0 m-0 text-danger">Yakunlandi</b>
                                @elseif($item['data']==date('Y-m-d'))
                                    <b class="p-0 m-0 text-success">Dars kuni</b>
                                @else 
                                    <b class="p-0 m-0 text-warning">Kutilmoqda</b>
                                @endif
                            </td>
                            <td>{{ $item['time'] }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body text-center">
                    <h5 class="card-title">Guruh davomat</span></h5>
                    <div class="table-responsive">
                        <table class="table text-center" style="font-size:14px;">
                            <thead>
                                <tr>
                                    <th  class="bg-primary text-white">#</th>
                                    <th  class="bg-primary text-white">Talabalar</th>
                                    @foreach($GropsTime as $item)
                                    <td  class="bg-primary text-white" style="font-size:10px;width:50px">{{ $item['data'] }}</td>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $item)
                                <tr>
                                    <th class="text-center">{{ $loop->index+1 }}</th>
                                    <th style="text-align:left;">{{ $item['name'] }}</th>
                                    @foreach($Davomats[$item['id']] as $keys)
                                        @if($keys['status']=='true')
                                            <td class="bg-success text-white text-center" title="Darsga qatnashdi" style="cursor:pointer"><i class="bi bi-clipboard2-check"></i></td>
                                        @elseif($keys['status']=='pedding')
                                            <td class="bg-warning text-white text-center" title="Dars kutilmoqda" style="cursor:pointer"><i class="bi bi-clipboard2-check"></i></td>
                                        @else 
                                            <td class="bg-danger text-white text-center" title="Darsga qatnashmadi" style="cursor:pointer"><i class="bi bi-dot"></i></td>
                                        @endif
                                    @endforeach
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card info-card sales-card">
                <div class="card-body text-center">
                    <h5 class="card-title">Test natijalari</span></h5>
                    <table class="table text-center table-bordered" style="font-size:14px;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Talaba</th>
                            <th>Testlar soni</th>
                            <th>To'g'ri javoblar</th>
                            <th>Noto'g'ri javoblar</th>
                            <th>Ball</th>
                            <th>Urinishlar soni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($test as $item)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $item['user'] }}</td>
                                <td>15</td>
                                <td>{{ $item['count'] }}</td>
                                <td>{{ 15-$item['count'] }}</td>
                                <td>{{ $item['ball'] }}</td>
                                <td>{{ $item['urinish'] }}</td>
                            </tr>
                        @empty
                        <tr>
                            <td colspan=7 class="text-center">Test topshirgan talabalar mavjud emas.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                </div>  
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Talabalar davomatin olish</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Yopish">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('techer.davomat') }}" method="post">
                        @csrf
                        <input type="hidden" name="guruh_id" value="{{ $Grops['id'] }}">
                        <div class="div px-2 mb-2">
                            @foreach($users as $item)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="{{ 'id'.$item['id'] }}" id="{{ 'id'.$item['id'].'a' }}" value="{{ $item['id'] }}">
                                <label class="form-check-label" for="{{ 'id'.$item['id'].'a' }}">{{ $item['name'] }}</label>
                            </div>
                            @endforeach
                        </div>
                        @if(count($users)!=0)
                        <button type="submit" class="btn btn-primary w-100 mt-2">Davomatni saqlash</button>
                        @endif
                    </form>
                </div>
            </div>
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