@extends('layouts.meneger_src')
@section('title', 'Kirish')
@section('content')
@extends('layouts.meneger_header')
@extends('layouts.meneger_menu')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Guruhlar</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('meneger.home') }}">Bosh sahifa</a></li>
                    <li class="breadcrumb-item active">Yangi guruh</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">

            <div class="row mb-2">
                <div class="col-lg-4 my-lg-0 mt-2">
                    <a href="{{ route('meneger_groups') }}" class="btn btn-secondary w-100">Guruhlar</a>
                </div>
                <div class="col-lg-4 my-lg-0 mt-2">
                    <a href="{{ route('meneger_groups_end') }}" class="btn btn-secondary w-100">Yakunlangan guruhlar</a>
                </div>
                <div class="col-lg-4 my-lg-0 mt-2">
                    <a href="{{ route('meneger_groups_create') }}" class="btn btn-primary w-100">Yangi guruh</a>
                </div>
            </div>
            <form action="{{ route('meneger_groups_create_story') }}" method="post">
                @csrf 
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title w-100 mb-0 pb-0">Yangi guruh haqida</h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="guruh_name" class="my-2">Guruh nomi</label>
                                <input type="text" name="guruh_name" value="{{ old('guruh_name') }}" required class="form-control">
                                <label for="tulov_id" class="my-2">Guruhning narxi</label>
                                <select name="tulov_id" required class="form-select">
                                    <option value="">Tanlang...</option>
                                    @foreach($MarkazPaymart as $item)
                                        <option value="{{ $item['id'] }}">{{ number_format($item['summa'], 0, '.', ' ') }} so'm, Chegirma: {{ number_format($item['chegirma'], 0, '.', ' ') }}</option>
                                    @endforeach
                                </select>
                                <label for="dars_count" class="my-2">Darslar sonini kiriting ( Maksima darslar soni : 30 )</label>
                                <input type="number" value="{{ old('dars_count') }}" max=30 min=9 name="dars_count" required class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <label for="guruh_start" class="my-2">Dars boshlanish sanasi</label>
                                <input type="date" name="guruh_start" value="{{ old('guruh_start') }}" required class="form-control">
                                @error('guruh_start')
                                    <span class="text-danger w-100" style="font-size:10px;">Darslar boshlanishi bugungi kun va keyingi kunlarni qabul qilinadi.</span>
                                @enderror
                                <label for="hafta_kun" class="my-2 w-100">Hafta kunlari</label>
                                <select name="hafta_kun" required class="form-select">
                                    <option value="">Tanlang...</option>
                                    <option value="toq_kun">Haftaning toq kunlari</option>
                                    <option value="juft_kun">Haftaning juft kunlari</option>
                                    <option value="har_kun">Har kuni</option>
                                </select>
                                <label for="cours_id" class="my-2">Guruh uchun kursni tanlang</label>
                                <select name="cours_id" required class="form-select">
                                    <option value="">Tanlang...</option>
                                    @foreach($Cours as $item)
                                        <option value="{{ $item['id'] }}">{{ $item['cours_name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <label for="techer_id" class="my-2">Guruh uchun o'qituvchi tanlang</label>
                        <select name="techer_id" required class="form-select">
                            <option value="">Tanlang...</option>
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
                        <div class="w-100 text-center mt-2">
                            <button type="submit" class="btn btn-primary w-50">Davom etish    </button>
                        </div>
                    </div>
                </div>
            </form>
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