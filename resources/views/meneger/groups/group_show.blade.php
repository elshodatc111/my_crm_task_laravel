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
        <section class="section dashboard">
            <div class="card">
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
                                <div class="col-6  mt-1"><b>Guruh davomi:</b></div>
                                <div class="col-6" style="text-align:right;">
                                    @if($guruh['next_id']!=='false')
                                        <a href="{{ route('meneger_groups_show',$guruh['newGroupID'] ) }}">Davom ettirilgan: ({{ $guruh['newGroup'] }})</a>
                                    @else 
                                        Davom ettirilmagan
                                    @endif
                                </div>
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
                <div class="row mt-3">
                    <div class="col-lg-4">
                        <button class="btn btn-primary my-1 w-100" data-bs-toggle="modal"  data-bs-target="#lessenDays">Dars kunlari</button>
                    </div>
                    <div class="col-lg-4">
                        <button class="btn btn-primary my-1 w-100" data-bs-toggle="modal"  data-bs-target="#updateUser">Test natijalari</button>
                    </div>
                    <div class="col-lg-4">
                        <button class="btn btn-primary my-1 w-100" data-bs-toggle="modal" data-bs-target="#createPaymart">Qarzdorlarga sms yuborish</button>
                    </div>
                    <div class="col-lg-4">
                        <button class="btn btn-primary my-1 w-100"  data-bs-toggle="modal" data-bs-target="#addGroups">Guruhdan talaba o'chirish</button>
                    </div>
                    @if(auth()->user()->role_id != 4)
                    <div class="col-lg-4">
                        <button class="btn btn-primary my-1 w-100" data-bs-toggle="modal" data-bs-target="#repetPaymart">Guruh ma`lumotini yangilash</button>
                    </div>
                    @endif
                    <div class="col-lg-4">
                        <button class="btn btn-primary my-1 w-100" data-bs-toggle="modal"  data-bs-target="#endGroups">Talabalar davomati</button>
                    </div>
                    <div class="col-lg-4 text-center">
                        @if($guruh['next_id']=='false')
                            <a class="btn btn-primary my-1 w-100" href="{{ route('meneger_groups_next_create',$guruh['id'] ) }}">Guruhni davom ettirish</a>
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
                                <td style="text-align:left;"><a href="{{ route('meneger.all_show',$item['User']['user_id']) }}">{{ $item['UserName'] }}</a></td>
                                <td>{{ $item['User']['grops_start_data'] }}</td>
                                <td style="text-align:left;">{{ $item['User']['grops_start_comment'] }}</td>
                                <td>{{ $item['User']['grops_start_meneger'] }}</td>
                                <td>{{ $item['User']['grops_end_data'] }}</td>
                                <td>{{ $item['User']['grops_end_meneger'] }}</td>
                                <td style="text-align:left;">{{ $item['User']['grops_end_comment'] }}</td>
                                <td>{{ $item['User']['jarima'] }}</td>
                                <td>
                                    @if($item['User']['status'] == 'true')
                                        <b class="text-success p-0 m-0">Aktiv<b>
                                    @else 
                                        <b class="text-danger p-0 m-0">O'chirildi<b>
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
                            <form action="{{ route('meneger_groups_debet_messege') }}" method="post" class="m-0 p-0">
                                @csrf 
                                <input type="hidden" name="id" value="{{ $guruh['id'] }}">
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
                            <form action="{{ route('meneger_groups_updates') }}" method="post">
                                @csrf 
                                <input type="hidden" name="id" value="{{ $guruh['id'] }}">
                                <label for="guruh_name" class="my-2">Guruh nomi</label>
                                <input type="text" name="guruh_name" value="{{ $guruh['guruh_name'] }}" required class="form-control">
                                <label for="" class="my-2">O'qituvchi</label>
                                <select name="techer_id" required class="form-select">
                                    <option value="">Tanlang...</option>
                                    @foreach($Techers as $item)
                                    <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                    @endforeach
                                </select>
                                @if($Markaz->paymart == 1)
                                <label for="techer_foiz" class="my-2">To'lov foizi</label>
                                <input type="number" name="techer_foiz" value="{{ $guruh['techer_foiz'] }}" max=100 min=0 required class="form-control">
                                <input type="hidden" name="techer_paymart" value="0" required class="form-control">
                                <input type="hidden" name="techer_bonus" value="0" required class="form-control">
                                @elseif($Markaz->paymart == 2)
                                <input type="hidden" name="techer_foiz" value="0" required class="form-control">
                                <label for="" class="my-2">O'qituvchiga to'lov</label>
                                <input type="text" value="{{ $guruh['techer_paymart'] }}" required class="form-control amount">
                                <input type="hidden" name="techer_bonus" value="0" required class="form-control">
                                @else
                                <input type="hidden" name="techer_foiz" value="0" required class="form-control">
                                <label for="techer_paymart" class="my-2">O'qituvchiga to'lov</label>
                                <input type="text" name="techer_paymart" value="{{ $guruh['techer_paymart'] }}" required class="form-control amount">
                                <label for="techer_bonus" class="my-2">O'qituvchiga bonus</label>
                                <input type="text" name="techer_bonus" value="{{ $guruh['techer_bonus'] }}" required class="form-control amount">
                                @endif
                                <label for="cours_id" class="my-2">Guruh uchun kurs</label>
                                <select name="cours_id" required class="form-select">
                                    <option value="">Tanlang...</option>
                                    @foreach($Kurslar as $item)
                                    <option value="{{ $item['id'] }}">{{ $item['cours_name'] }}</option>
                                    @endforeach
                                </select>
                                <label for="tulov_id" class="my-2">Guruh narxi</label>
                                <select name="tulov_id" required class="form-select">
                                    <option value="">Tanlang...</option>
                                    @foreach($Tulovlar as $item)
                                    <option value="{{ $item['id'] }}">{{ $item['summa'] }} so'm</option>
                                    @endforeach
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
                                        <th style='width:250px;'>Talaba</th>
                                        @foreach($guruh['dars_data'] as $item)
                                            <th class='align-middle' style="font-size:10px;width:100px">{{ $item['data'] }}</th>
                                        @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($DAVOMAT as $item)
                                        <tr>
                                            <td style="text-align:left;">{{ $item['user_name'] }}</td>
                                            @foreach($item['check'] as $item2)
                                                @if($item2=='close')
                                                    <td class="text-danger text-center align-middle"><b class="p-0 m-0" style="font-size:14px;">x</b></td>
                                                @elseif($item2=='true')
                                                    <td class="text-success text-center align-middle"><b class="p-0 m-0" style="font-size:14px;">+</b></td>
                                                @elseif($item2=='false')
                                                    <td class="text-warning text-center align-middle"><b class="p-0 m-0" style="font-size:14px;">--</b></td>
                                                @else
                                                    <td class="text-info text-center align-middle"></td>
                                                @endif
                                            @endforeach
                                        </tr>
                                        @endforeach
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
                                    <th>Urinishlar soni</th>
                                    <th>To'g'ri javob</th>
                                    <th>Ball</th>
                                    <th>Birinchi urinish vaqti</th>
                                    <th>Oxirgi urinish vaqti</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($UserTestCount as $item)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $item['user'] }}</td>
                                        <td>{{ $item['urinish'] }}</td>
                                        <td>{{ $item['count'] }}</td>
                                        <td>{{ $item['ball'] }}</td>
                                        <td>{{ $item['created_at'] }}</td>
                                        <td>{{ $item['updated_at'] }}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan=7 class="text-center">Test yechgan talabalar mavjud emas.</td>
                                    </tr>
                                    @endforelse
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