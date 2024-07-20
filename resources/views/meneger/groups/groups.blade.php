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
                <div class="col-4">
                    <a href="{{ route('meneger_groups') }}" class="btn btn-primary w-100">Guruhlar</a>
                </div>
                <div class="col-4">
                    <a href="{{ route('meneger_groups_end') }}" class="btn btn-secondary w-100">Yakunlangan guruhlar</a>
                </div>
                <div class="col-4">
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
                                    <th>Guruh</th>
                                    <th>Boshlanish vaqti</th>
                                    <th>Yakunlanish vaqti</th>
                                    <th>Dars xonasi</th>
                                    <th>Dars vaqti</th>
                                    <th>Talabalar</th>
                                    <th>Guruh holati</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td style="text-align:left;">
                                        <a href="{{ route('meneger_groups_show',1) }}"><b>Hangil</b></a>
                                    </td>
                                    <td>10.07.2024</td>
                                    <td>10.07.2024</td>
                                    <td>1-xona</td>
                                    <td>08:00-09:30</td>
                                    <td>12</td>
                                    <td><p class="text-primary p-0 m-0">Yangi</p></td>
                                </tr>
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