@extends('layouts.meneger_src')
@section('title', 'Dars jadval')
@section('content')
@extends('layouts.meneger_header')
@extends('layouts.meneger_menu')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dars jadvali</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('meneger.home') }}">Bosh sahifa</a></li>
                    <li class="breadcrumb-item active">Dars jadvali</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row mb-2">
                <div class="col-lg-3 mt-lg-0 mt-3">
                <a href="{{ route('meneger.all_tashrif') }}" class="btn btn-secondary w-100">Tashriflar</a>
                </div>
                <div class="col-lg-3 mt-lg-0 mt-3">
                <a href="{{ route('meneger.all_debet') }}" class="btn btn-secondary w-100">Qarzdorlar</a>
                </div>
                <div class="col-lg-3 mt-lg-0 mt-3">
                <a href="{{ route('dars_jadval') }}" class="btn btn-primary w-100">Dars jadvali</a>
                </div>
                <div class="col-lg-3 mt-lg-0 mt-3">
                <a href="{{ route('meneger.all_create') }}" class="btn btn-secondary w-100">Yangi tashrif</a>
                </div>
            </div>
            @foreach($Room as $item)
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title w-100 text-center">{{ $item['room_name'] }}</h2>
                    <div class="table-responsive">
                        <table class="table text-center table-bordered" style="font-size: 12px;border:3px solid aqua">
                            <thead>
                                <tr>
                                    <th class="bg-primary text-white">Dars Vaqti</th>
                                    @foreach($item['data'] as $item2)
                                    <th class="bg-primary text-white">{{ $item2 }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($item['times'] as $keyt => $item3)
                                    <tr>
                                        <th class="bg-primary text-white">{{ $item3 }}</th>
                                        @foreach($item['data'] as $keys => $item2)
                                            @if($item['about'][$keys][$keyt]['guruh_id'] == 'NULL')
                                            <td title="Xona bo'sh" class="bg-success text-white">--</td>
                                            @else 
                                            <td class="bg-white" title="{{ $item['about'][$keys][$keyt]['guruh_name'] }}"><a href="{{ route('meneger_groups_show',$item['about'][$keys][$keyt]['guruh_id']) }}" class="m-0 p-0 px-1 btn btn-danger">+</a></td>
                                            @endif
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endforeach
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