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
                    <li class="breadcrumb-item"><a href="{{ route('meneger_groups_show',$guruh['id']) }}">Guruh</a></li>
                    <li class="breadcrumb-item active">Guruhning davomi</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">      
                            <h5 class="card-title w-100 text-center mb-0">Guruhni davom ettirish</h5>
                        </div>
                        <div class="col-lg-6">      
                            <h5 class="card-title w-100 text-center">{{ $guruh['guruh_name'] }}</h5>
                            <div class="row">
                                <div class="col-6  mt-1"><b>Dars xonasi:</b></div>
                                <div class="col-6" style="text-align:right;">{{ $guruh['room_name'] }}</div>
                                <div class="col-6  mt-1"><b>Dars boshlandi:</b></div>
                                <div class="col-6" style="text-align:right;">{{ $guruh['guruh_start'] }}</div>
                                <div class="col-6  mt-1"><b>Dars tugadi:</b></div>
                                <div class="col-6" style="text-align:right;">{{ $guruh['guruh_end'] }}</div>
                                <div class="col-6  mt-1"><b>Darslar vaqti:</b></div>
                                <div class="col-6" style="text-align:right;">{{ $guruh['dars_time'] }}</div>
                                <div class="col-6  mt-1"><b>Darslar soni:</b></div>
                                <div class="col-6" style="text-align:right;">{{ $guruh['dars_count'] }}</div>
                                <div class="col-6  mt-1"><b>Hafta kuni:</b></div>
                                <div class="col-6" style="text-align:right;">{{ $guruh['hafta_kun'] }}</div>
                            </div>
                        </div>
                        <div class="col-lg-6">      
                            <h5 class="card-title w-100 text-center">Guruh narxi: {{ number_format($guruh['paymart']['summa'], 0, '.', ' ') }} so'm</h5>
                            <div class="row">
                                <div class="col-6  mt-1"><b>Chegirma:</b></div>
                                <div class="col-6" style="text-align:right;">{{ number_format($guruh['paymart']['chegirma'], 0, '.', ' ') }} so'm</div>  
                                <div class="col-6  mt-1"><b>Chegirma muddati:</b></div>
                                <div class="col-6" style="text-align:right;">{{ $guruh['paymart']['chegirma_time'] }} kun</div>  
                                <div class="col-6  mt-1"><b>O'qituvchi:</b></div>
                                <div class="col-6" style="text-align:right;">{{ $guruh['techer'] }}</div>
                                @if($guruh['techer_tulov']==1)
                                    <div class="col-6  mt-1"><b>Ish haqi to'lov:</b></div>
                                    <div class="col-6" style="text-align:right;">{{ $guruh['techer_foiz'] }}%</div>
                                @elseif($guruh['techer_tulov']==2)
                                    <div class="col-6  mt-1"><b>Ish haqi to'lov:</b></div>
                                    <div class="col-6" style="text-align:right;">{{ number_format($guruh['techer_paymart'], 0, '.', ' ') }} so'm</div>
                                @else
                                    <div class="col-6  mt-1"><b>Ish haqi to'lov:</b></div>
                                    <div class="col-6" style="text-align:right;">{{ number_format($guruh['techer_paymart'], 0, '.', ' ') }} so'm</div>
                                    <div class="col-6  mt-1"><b>Ish haqi bonus:</b></div>
                                    <div class="col-6" style="text-align:right;">{{ number_format($guruh['techer_bonus'], 0, '.', ' ') }} so'm</div>
                                @endif
                                <div class="col-4  mt-1"><b>Meneger:</b></div>
                                <div class="col-8" style="text-align:right;">{{ $guruh['meneger'] }}</div>
                                <div class="col-6  mt-1"><b>Guruh ochildi:</b></div>
                                <div class="col-6" style="text-align:right;">{{ $guruh['created_at'] }}</div>        
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="card">
                <div class="card-body">    
                    <h5 class="card-title w-100 text-center">Yangi guruh haqida</h5>
                    <form action="{{ route('meneger_groups_next_create_story') }}" method="post">
                        @csrf 
                        <input type="hidden" name="id" value="{{ $guruh['id'] }}">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="guruh_name" class="my-2">Yangi guruhning nomi</label>
                                <input type="text" name="guruh_name" value="{{ old('guruh_name') }}" required class="form-control">
                                <label for="guruh_start" class="my-2">Darslar boshlanish vaqti (<i class='text-danger' style="font-size:14px;">{{ $guruh['guruh_end'] }} dan kiyingi kunlar</i>)</label>
                                <input type="date" name="guruh_start" value="{{ old('guruh_start') }}" required class="form-control">
                                @error('guruh_start')
                                    <span class="text-danger w-100" style="font-size:10px;">Guruhni davom ettirish uchun {{ $guruh['guruh_end'] }} sanada keyingi kunlarda davom ettirish mumkun.</span>
                                @enderror
                                <label for="dars_count" class="my-2">Darslar sonini kiriting ( Maksima darslar soni : 30 )</label>
                                <input type="number" value="{{ old('dars_count') }}" max=30 min=9 name="dars_count" required class="form-control">                                
                                <label for="" class="my-2">Yangi guruh uchun kurs</label>
                                <select name="cours_id" required class="form-select">
                                    <option value="cours_id">Tanlang ... </option>
                                    @foreach($Cours as $item)
                                        <option value="{{ $item['id'] }}">{{ $item['cours_name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="tulov_id" class="my-2">Yangi guruh uchun to'lov summasi</label>
                                <select name="tulov_id" required class="form-select">
                                    <option value="">Tanlang ... </option>
                                    @foreach($MarkazPaymart as $item)
                                    <option value="{{ $item['id'] }}">{{ number_format($item['summa'], 0, '.', ' ') }} so'm, Chegirma: {{ number_format($item['chegirma'], 0, '.', ' ') }}</option>
                                    @endforeach
                                </select>
                                <label for="techer_id" class="my-2">Yangi guruh o'qituvchi</label>
                                <select name="techer_id" required class="form-select">
                                    <option value="">Tanlang ... </option>
                                    @foreach($Techer as $item)
                                        <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                    @endforeach
                                </select>
                                @if($Markaz == 1)
                                    <label for="techer_foiz" class="my-2">O'qituvchiga to'lov foizi(%)</label>
                                    <input type="number" value="{{ old('techer_foiz') }}" name="techer_foiz" min="0" max="100" required class="form-control">
                                @elseif($Markaz == 2)
                                    <label for="techer_paymart" class="my-2">O'qituvchiga to'lov (Har bir talaba uchun)</label>
                                    <input type="text" value="{{ old('techer_paymart') }}" name="techer_paymart" required class="form-control amount">
                                @else
                                    <label for="techer_paymart" class="my-2">O'qituvchiga to'lov (Har bir talaba uchun)</label>
                                    <input type="text" value="{{ old('techer_paymart') }}" name="techer_paymart" required class="form-control amount">
                                    <label for="techer_bonus" class="my-2">O'qituvchiga bonus</label>
                                    <input type="text" value="{{ old('techer_bonus') }}" name="techer_bonus" required class="form-control amount">
                                @endif
                            </div>
                            <div class="col-lg-12 text-center mt-2">
                            <button type="submit" class="btn btn-primary w-50">Davom etish</button>
                            </div>
                        </div>
                    </form>
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