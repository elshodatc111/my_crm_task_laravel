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
                    <li class="breadcrumb-item active">Guruh</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="card" style="min-height: 280px;">
                <div class="card-body">
                    <div class="row">
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
                    <div class="row">
                        <div class="col-lg-3 my-1">
                            <button class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#createPaymart">Qarzdorlarga SMS</button>
                        </div>
                        <div class="col-lg-3 mt-1">
                            <button class="btn btn-outline-danger w-100" data-bs-toggle="modal" data-bs-target="#repetPaymart">Guruhni taxrirlash</button>
                        </div>
                        <div class="col-lg-3 mt-1">
                            <button class="btn btn-outline-success w-100"  data-bs-toggle="modal" data-bs-target="#addGroups">Talaba o'chirish</button>
                        </div>
                        <div class="col-lg-3 mt-1">
                            <button class="btn btn-danger w-100" data-bs-toggle="modal"  data-bs-target="#endGroups">Davomat</button>
                        </div>
                        <div class="col-lg-4 mt-1">
                            <button class="btn btn-outline-danger w-100" data-bs-toggle="modal"  data-bs-target="#lessenDays">Dars kunlari</button>
                        </div>
                        <div class="col-lg-4 mt-1">
                            <button class="btn btn-primary w-100" data-bs-toggle="modal"  data-bs-target="#updateUser">Test natijalari</button>
                        </div>
                        <div class="col-lg-4 mt-1">
                            @if($guruh['next_id']=='false')
                            <a class="btn btn-outline-primary w-100" href="{{ route('meneger_groups_next_create',$guruh['id'] ) }}">Guruhni davom etish</a>
                            @else
                            <a class="btn btn-outline-warning w-100" href="{{ route('meneger_groups_show',$guruh['next_id'] ) }}">Guruh davom ettirilgan</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title w-100 text-center">Guruh talabalari</h5>
                    <div class="table-responsive">
                        <table class="table text-center table-bordered" style="font-size: 12px;">
                        <thead>
                            <tr class="align-items-center">
                            <th>#</th>
                            <th>Talaba</th>
                            <th>Guruhga qo'shildi</th>
                            <th>Meneger</th>
                            <th>Izoh</th>
                            <th>Guruhdan o'chirildi</th>
                            <th>Meneger</th>
                            <th>Izoh</th>
                            <th>Jarima</th>
                            <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($guruh['users'] as $item)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td><a href="{{ route('meneger.all_show',$item['User']['user_id']) }}">{{ $item['UserName'] }}</a></td>
                                <td>{{ $item['User']['grops_start_data'] }}</td>
                                <td>{{ $item['User']['grops_start_comment'] }}</td>
                                <td>{{ $item['User']['grops_start_meneger'] }}</td>
                                <td>{{ $item['User']['grops_end_data'] }}</td>
                                <td>{{ $item['User']['grops_end_meneger'] }}</td>
                                <td>{{ $item['User']['grops_end_comment'] }}</td>
                                <td>{{ $item['User']['jarima'] }}</td>
                                <td>
                                    @if($item['User']['status'] == 'true')
                                        aktiv
                                    @else 
                                        End
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div> 
            <!--Qarzdorlarga SMS +++ --> 
            <div class="modal fade" id="createPaymart" tabindex="-1">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title w-100 text-center">Qarzdorlarga SMS yuborish</h5>
                        </div>
                        <div class="modal-body m-0 p-1" style="padding:3px">
                            <form action="" method="post" class="m-0 p-0">
                                <div class="row">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-danger w-100 m-0" data-bs-dismiss="modal" aria-label="Close">Bekor qilish</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary w-100 m-0">Tasdiqlash</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Guruhni taxrirlash-->
            <div class="modal fade" id="repetPaymart" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Guruhni taxrirlash</h5>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <label for="" class="my-2">Guruh nomi</label>
                                <input type="text" required class="form-control">
                                <label for="" class="my-2">O'qituvchi</label>
                                <select name="" required class="form-select">
                                    <option value="">Tanlang...</option>
                                </select>
                                <label for="" class="my-2">O'qituvchiga to'lov turi</label>
                                <select name="" required class="form-select">
                                    <option value="">Tanlang...</option>
                                </select>
                                <label for="" class="my-2">To'lov foizi</label>
                                <input type="text" required class="form-control">
                                <label for="" class="my-2">O'qituvchiga to'lov</label>
                                <input type="text" required class="form-control">
                                <label for="" class="my-2">O'qituvchiga bonus</label>
                                <input type="text" required class="form-control">
                                <label for="" class="my-2">Guruh uchun kurs</label>
                                <select name="" required class="form-select">
                                    <option value="">Tanlang...</option>
                                </select>
                                <label for="" class="my-2">Guruh narxi</label>
                                <select name="" required class="form-select">
                                    <option value="">Tanlang...</option>
                                </select>
                                <div class="w-100 text-center mt-2">
                                    <button class="btn btn-primary w-50">O'zgarishlarni saqlash</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Talabani o'chirish +++++ -->
            <div class="modal fade" id="addGroups" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title w-100 text-center">Guruh talabasin o'chirish</h5>
                        </div>
                        <div class="modal-body">
                        <form action="{{ route('meneger.user_delete_group') }}" method="post">
                            @csrf 
                            <input type="hidden" name="guruh_id" value="{{ $guruh['id'] }}">
                            <input type="hidden" name="guruh_price" value="{{ $guruh['paymart']['summa'] }}">
                            <label for="user_id" class="mb-2">Guruhdan o'chiladigan talabani tanlang</label>
                            <select name="user_id" required class="form-select">
                                <option value="">Tanlang...</option>
                                    @forelse($guruh['users_active'] as $item)
                                        <option value="{{ $item['user_id'] }}">{{ $item['name'] }} Balansi: {{ number_format($item['balans'], 0, '.', ' ') }} so'm</option>
                                    @empty
                                    @endforelse
                            </select>
                            <label for="jarima" class="mt-2 mb-2">Jarima summasi <i>(Maksima jarima summasi: {{ number_format($guruh['paymart']['summa'], 0, '.', ' ') }} so'm)</i></label>
                            <input type="number" name="jarima" max={{ $guruh['paymart']['summa'] }} required class="form-control">
                            <label for="grops_end_comment" class="mt-2 mb-2">Guruhdan o'chirish sababi</label>
                            <textarea type="text" name="grops_end_comment" required class="form-control"></textarea>
                            <div class="row mt-2">
                            <div class="col-6">
                                <button type="button" class="btn btn-danger w-100" data-bs-dismiss="modal" aria-label="Close">Bekor qilish</button>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary w-100">O'chirish</button>
                            </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Davomat-->
            <div class="modal fade" id="endGroups" tabindex="-1">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title">Davomat</h5>
                        </div>
                        <div class="modal-body">
                            <div class="table-responsive">
                                <table class="table text-center table-bordered" style="font-size: 12px;">
                                    <thead>
                                        <tr class="align-items-center">
                                        <th>#</th>
                                        <th>Talaba</th>
                                        <th>12.07.2024</th>
                                        <th>12.07.2024</th>
                                        <th>12.07.2024</th>
                                        <th>12.07.2024</th>
                                        <th>12.07.2024</th>
                                        <th>12.07.2024</th>
                                        <th>12.07.2024</th>
                                        <th>12.07.2024</th>
                                        <th>12.07.2024</th>
                                        <th>12.07.2024</th>
                                        <th>12.07.2024</th>
                                        <th>12.07.2024</th>
                                        <th>12.07.2024</th>
                                        <th>12.07.2024</th>
                                        <th>12.07.2024</th>
                                        <th>12.07.2024</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>1</td>
                                        <td>Elshod Musurmonov</td>
                                        <td class="bg-danger text-white"><i class="bi bi-shield-x" title="Davomat olinmagan"></i></td>
                                        <td class="bg-warning text-white"><i class="bi bi-shield-minus" title="Darsga qatnashmagan"></i></td>
                                        <td class="bg-success text-white"><i class="bi bi-shield-plus" title="Darsga qatnashgan"></i></td>
                                        <td class="bg-info text-white"><i class="bi bi-shield-lock" title="Davomat kutilmoqda"></i></td>
                                        <td class="bg-danger text-white"><i class="bi bi-shield-x" title="Davomat olinmagan"></i></td>
                                        <td class="bg-warning text-white"><i class="bi bi-shield-minus" title="Darsga qatnashmagan"></i></td>
                                        <td class="bg-success text-white"><i class="bi bi-shield-plus" title="Darsga qatnashgan"></i></td>
                                        <td class="bg-info text-white"><i class="bi bi-shield-lock" title="Davomat kutilmoqda"></i></td>
                                        <td class="bg-danger text-white"><i class="bi bi-shield-x" title="Davomat olinmagan"></i></td>
                                        <td class="bg-warning text-white"><i class="bi bi-shield-minus" title="Darsga qatnashmagan"></i></td>
                                        <td class="bg-success text-white"><i class="bi bi-shield-plus" title="Darsga qatnashgan"></i></td>
                                        <td class="bg-info text-white"><i class="bi bi-shield-lock" title="Davomat kutilmoqda"></i></td>
                                        <td class="bg-danger text-white"><i class="bi bi-shield-x" title="Davomat olinmagan"></i></td>
                                        <td class="bg-warning text-white"><i class="bi bi-shield-minus" title="Darsga qatnashmagan"></i></td>
                                        <td class="bg-success text-white"><i class="bi bi-shield-plus" title="Darsga qatnashgan"></i></td>
                                        <td class="bg-info text-white"><i class="bi bi-shield-lock" title="Davomat kutilmoqda"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Dars kunlari-->
            <div class="modal fade" id="lessenDays" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Dars kunlari</h5>
                        </div>
                        <div class="modal-body">
                            <ul class="list-group">
                                @foreach($guruh['dars_data'] as $item)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        {{ $loop->index+1 }}-dars
                                        <span class="badge bg-primary rounded-pill">{{ $item['data'] }}</span>
                                    </li>
                                @endforeach  
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--Test narijalari-->
            <div class="modal fade" id="updateUser" tabindex="-1">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Test natijalari</h5>
                        </div>
                        <div class="modal-body">
                            <div class="table-responsive">
                                <table class="table text-center table-bordered" style="font-size: 12px;">
                                <thead>
                                    <tr class="align-items-center">
                                    <th>#</th>
                                    <th>Talaba</th>
                                    <th>Tastlar soni</th>
                                    <th>To'g'ri javoblar</th>
                                    <th>Noto'g'ri javoblar</th>
                                    <th>Ball</th>
                                    <th>Test vaqti</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>1</td>
                                    <td>Elshod Musurmonov</td>
                                    <td>To'lov</td>
                                    <td>Guruh nomi(Tanlanmasa bo'sh)</td>
                                    <td>350 000</td>
                                    <td>Plastik</td>
                                    <td>To'lov haqida komment</td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
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