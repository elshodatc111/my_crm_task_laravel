@extends('layouts.meneger_src')
@section('title', 'Kirish')
@section('content')
@extends('layouts.meneger_header')
@extends('layouts.meneger_menu')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Guruh</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('meneger.home') }}">Bosh sahifa</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('meneger_groups') }}">Guruhlar</a></li>
                    <li class="breadcrumb-item active">Guruhning davomi</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">      
                            <h5 class="card-title w-100 text-center mb-0">Yangi guruh haqida</h5>
                        </div>
                        <div class="col-lg-6">      
                            <h5 class="card-title w-100 text-center">{{ $guruh['guruh_name'] }}</h5>
                            <div class="row">
                                <div class="col-6  mt-1"><b>Dars xonasi:</b></div>
                                <div class="col-6" style="text-align:right;">{{ $guruh['room'] }}</div>
                                <div class="col-6  mt-1"><b>Dars boshlandi:</b></div>
                                <div class="col-6" style="text-align:right;">{{ $guruh['guruh_start'] }}</div>
                                <div class="col-6  mt-1"><b>Dars tugadi:</b></div>
                                <div class="col-6" style="text-align:right;">{{ $guruh['guruh_end'] }}</div>
                                <div class="col-6  mt-1"><b>Darslar soni:</b></div>
                                <div class="col-6" style="text-align:right;">{{ $guruh['dars_count'] }}</div>
                                <div class="col-6  mt-1"><b>Dars vaqti:</b></div>
                                <div class="col-6" style="text-align:right;">{{ $guruh['dars_time'] }}</div>
                                <div class="col-6  mt-1"><b>Hafta kuni:</b></div>
                                <div class="col-6" style="text-align:right;">{{ $guruh['hafta_kun'] }}</div>
                            </div>
                        </div>
                        <div class="col-lg-6">      
                            <h5 class="card-title w-100 text-center">Guruh narxi: {{ number_format($guruh['summa'], 0, '.', ' ') }} so'm</h5>
                            <div class="row">
                                <div class="col-6  mt-1"><b>Chegirma:</b></div>
                                <div class="col-6" style="text-align:right;">{{ number_format($guruh['chegirma'], 0, '.', ' ') }} so'm</div>  
                                <div class="col-6  mt-1"><b>Chegirma muddati:</b></div>
                                <div class="col-6" style="text-align:right;">{{ $guruh['chegirma_time'] }} kun</div>  
                                <div class="col-6  mt-1"><b>O'qituvchi:</b></div>
                                <div class="col-6" style="text-align:right;">{{ $guruh['techer'] }}</div>
                                @if($Markaz == 1)
                                <div class="col-6  mt-1"><b>Ish haqi to'lov:</b></div>
                                <div class="col-6" style="text-align:right;">{{ $guruh['techer_foiz'] }}%</div>
                                @elseif($Markaz == 2)
                                <div class="col-6  mt-1"><b>Ish haqi to'lov:</b></div>
                                <div class="col-6" style="text-align:right;">{{ number_format($guruh['techer_paymart'], 0, '.', ' ') }} so'm</div>
                                @else
                                <div class="col-6  mt-1"><b>Ish haqi to'lov:</b></div>
                                <div class="col-6" style="text-align:right;">{{ number_format($guruh['techer_paymart'], 0, '.', ' ') }} so'm</div>
                                <div class="col-6  mt-1"><b>Ish haqi bonus:</b></div>
                                <div class="col-6" style="text-align:right;">{{ number_format($guruh['techer_bonus'], 0, '.', ' ') }} so'm</div>     
                                @endif
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title w-100 text-center">Dars Kunlari</h2>
                            <table class="table table-bordered text-center">
                                <tr>
                                    <th>#</th>
                                    <th>Dars kuni</th>
                                    <th>Hafta kuni</th>
                                </tr>
                                @foreach($datas as $item)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $item['data'] }}</td>
                                    <td>{{ $item['kun'] }}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title w-100 text-center">Yangi guruhga o'tadigan talabalar</h2>
                            <form action="{{ route('meneger_groups_next_create_story_end') }}" method="post">
                                @csrf
                                <ul class="list-group">
                                    @foreach($Users as $item)
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox" name="user{{ $item['id'] }}" value="{{ $item['id'] }}" aria-label="...">
                                        {{ $item['name'] }} {{ $item['id'] }}
                                    </li>
                                    @endforeach
                                </ul>
                                <button type="submit" class="btn btn-primary w-100 mt-2">Yangi guruhni saqlash</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; <strong><span>CodeStart</span></strong>. development center
        </div>
        <div class="credits">
            Qarshi 2024
        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection