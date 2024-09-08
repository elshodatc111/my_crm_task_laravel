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
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <h2 class="card-title w-100 text-center">Yangi guruh haqida</h2>
                            <div class="row">
                                <div class="col-lg-6">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Yangi guruh:</th>
                                            <td style="text-align:right;">{{ $guruh['guruh_name'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Guruh narxi:</th>
                                            <td style="text-align:right;">{{ number_format($guruh['summa'], 0, '.', ' ') }} so'm</td>
                                        </tr>
                                        <tr>
                                            <th>Boshlanish vaqti:</th>
                                            <td style="text-align:right;">{{ $guruh['guruh_start'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tugash vaqti:</th>
                                            <td style="text-align:right;">{{ $guruh['guruh_end'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Darslar soni:</th>
                                            <td style="text-align:right;">{{ $guruh['dars_count'] }}</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-lg-6">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Hafta kuni:</th>
                                            <td style="text-align:right;">{{ $guruh['hafta_kun2'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Kurs:</th>
                                            <td style="text-align:right;">{{ $guruh['cours_name'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>O'qituvchi:</th>
                                            <td style="text-align:right;">{{ $guruh['techer'] }}</td>
                                        </tr>
                                        @if($markaz==1)
                                        <tr>
                                            <th>O'qituvchiga to'lov(%):</th>
                                            <td style="text-align:right;">{{ $guruh['techer_foiz'] }} %</td>
                                        </tr>
                                        <tr>
                                            <th>Meneger:</th>
                                            <td style="text-align:right;">{{ auth()->user()->email }}</td>
                                        </tr>
                                        @elseif($markaz==2)
                                        <tr>
                                            <th>O'qituvchiga to'lov:</th>
                                            <td style="text-align:right;">{{ number_format($guruh['techer_paymart'], 0, '.', ' ') }} so'm</td>
                                        </tr>
                                        <tr>
                                            <th>Meneger:</th>
                                            <td style="text-align:right;">{{ auth()->user()->email }}</td>
                                        </tr>
                                        @elseif($markaz==3)
                                        <tr>
                                            <th>O'qituvchiga to'lov:</th>
                                            <td style="text-align:right;">{{ number_format($guruh['techer_paymart'], 0, '.', ' ') }} so'm</td>
                                        </tr>
                                        <tr>
                                            <th>O'qituvchiga bonus:</th>
                                            <td style="text-align:right;">{{ number_format($guruh['techer_bonus'], 0, '.', ' ') }} so'm</td>
                                        </tr>
                                        @endif
                                    </table>
                                </div>
                            </div>
                            <form action="{{ route('meneger_groups_create_story_two') }}" method="post">
                                @csrf 
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="room_id" class="my-2">Dars xonasi</label>
                                        <select name="room_id" id="room_id" required class="form-select">
                                            <option value="">Tanlang...</option>
                                            @foreach($xonalar as $item)
                                                <option value="{{ $item['id'] }}">{{ $item['room_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="dars_time" class="my-2">Dars vaqti</label>
                                        <select name="dars_time" id="dars_time" required class="form-select">
                                            <option value="">Oldin xonani tanlang</option>
                                        </select>
                                    </div>
                                    <script>
                                        $(document).ready(function() {
                                            $('#room_id').on('change', function() {
                                                var regionId = $(this).val();
                                                if (regionId) {
                                                    $.ajax({
                                                        url: '/meneger/groups/create/two/' + regionId,
                                                        type: 'GET',
                                                        dataType: 'json',
                                                        success: function(data) {
                                                            $('#dars_time').empty();
                                                            $('#dars_time').append('<option value="">Dars vaqtini tanlang</option>');
                                                            $.each(data, function(key, value) {
                                                                $('#dars_time').append('<option value="'+ value.time +'">'+ value.time +'</option>');
                                                            });
                                                        }
                                                    });
                                                } else {
                                                    $('#dars_time').empty();
                                                    $('#dars_time').append('<option value="">Siz tanlagan xonada barcha vaqtlar band</option>');
                                                }
                                            });
                                        });
                                    </script>
                                    
                                    <div class="col-lg-6 text-center mt-4">
                                        <a href="{{ route('meneger_groups_create') }}" class="btn btn-danger w-50">Bekor qilish</a>
                                    </div>
                                    <div class="col-lg-6 text-center mt-4">
                                        <button class="btn btn-primary w-50">Guruhni saqlash</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <h2 class="card-title w-100 text-center">Dars kunlari</h2>
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