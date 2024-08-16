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
                    <li class="breadcrumb-item active">Guruhlar</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">

            <div class="row mb-2">
                <div class="col-lg-4 my-lg-0 mt-2">
                    <a href="{{ route('meneger_groups') }}" class="btn btn-primary w-100">Guruhlar</a>
                </div>
                <div class="col-lg-4 my-lg-0 mt-2">
                    <a href="{{ route('meneger_groups_end') }}" class="btn btn-secondary w-100">Yakunlangan guruhlar</a>
                </div>
                <div class="col-lg-4 my-lg-0 mt-2">
                    <a href="{{ route('meneger_groups_create') }}" class="btn btn-secondary w-100">Yangi guruh</a>
                </div>
            </div>


            <div class="card">
                <div class="card-body">
                    <h5 class="card-title w-100 text-center">Guruhlar</h5>
                    <div class="table-responsive">
                        <table class="table text-center table-bordered" style="font-size: 12px;">
                            <thead>
                                <tr class="align-items-center">
                                    <th>#</th>
                                    <th>Guruh nomi</th>
                                    <th>Boshlanish vaqti</th>
                                    <th>Yakunlanish vaqti</th>
                                    <th>Dars xonasi</th>
                                    <th>Dars vaqti</th>
                                    <th>Talabalar soni</th>
                                    <th>Guruh holati</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($Guruh as $item)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td style="text-align:left;">
                                        <a href="{{ route('meneger_groups_show',$item['id']) }}"><b>{{ $item['guruh_name'] }}</b></a>
                                    </td>
                                    <td>{{ $item['guruh_start'] }}</td>
                                    <td>{{ $item['guruh_end'] }}</td>
                                    <td>{{ $item['room'] }}</td>
                                    <td>{{ $item['dars_time'] }}</td>
                                    <td>{{ $item['users'] }}</td>
                                    <td>
                                        @if($item['status']=='new')
                                        <span class='badge border-1 text-primary'>YANGI</span>
                                        @elseif($item['status']=='activ')
                                        <span class='badge border-1 text-success'>AKTIV</span>
                                        @else
                                        <span class='badge border-1 text-danger'>YAKUNLANGAN</span>
                                        @endif
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan=8 class="text-center">Guruhlar mavjud emas.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
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