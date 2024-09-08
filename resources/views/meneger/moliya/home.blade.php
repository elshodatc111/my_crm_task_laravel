@extends('layouts.meneger_src')
@section('title', 'Kirish')
@section('content')
@extends('layouts.meneger_header')
@extends('layouts.meneger_menu')

<main id="main" class="main">

<div class="pagetitle">
  <h1>Moliya</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('meneger.home') }}">Bosh sahifa</a></li>
      <li class="breadcrumb-item active">Moliya</li>
    </ol>
  </nav>
</div>

<section class="section dashboard">

    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-1"></i>
                {{Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif (Session::has('error'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-1"></i>
                {{Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row">
        <div class={{ (auth()->user()->role_id==4)?'col-lg-4':'col-lg-3' }}>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title w-100 text-center"><i class="bi bi-card-checklist"></i> Kassada mavjud to'lovlar</h5>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                        Naqt
                        <span class="badge bg-primary rounded-pill" style="font-size:16px;">{{ number_format($Kassa['kassa_naqt'], 0, '.', ' ') }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                        Plastik
                        <span class="badge bg-primary rounded-pill" style="font-size:16px;">{{ number_format($Kassa['kassa_plastik'], 0, '.', ' ') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class={{ (auth()->user()->role_id==4)?'col-lg-4':'col-lg-3' }}>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title w-100 text-center"><i class="bi bi-backspace-reverse"></i> Chiqim kutilmoqda</h5>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                        Naqt
                        <span class="badge bg-warning text-success rounded-pill" style="font-size:16px;">{{ number_format($Kassa['kassa_naqt_chiqim_pedding'], 0, '.', ' ') }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                        Plastik
                        <span class="badge bg-warning text-success rounded-pill" style="font-size:16px;">{{ number_format($Kassa['kassa_plastik_chiqim_pedding'], 0, '.', ' ') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class={{ (auth()->user()->role_id==4)?'col-lg-4':'col-lg-3' }}>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title w-100 text-center"><i class="bi bi-backspace-reverse-fill"></i> Xarajat kutilmoqda</h5>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                        Naqt
                        <span class="badge bg-warning text-success rounded-pill" style="font-size:16px;">{{ number_format($Kassa['kassa_naqt_xarajat_pedding'], 0, '.', ' ') }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                        Plastik
                        <span class="badge bg-warning text-success rounded-pill" style="font-size:16px;">{{ number_format($Kassa['kassa_plastik_xarajat_pedding'], 0, '.', ' ') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @if(auth()->user()->role_id!=4)
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title w-100 text-center"><i class="bi bi-arrow-right-square"></i> Ish haqi to'lovi uchun</h5>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                        Naqt
                        <span class="badge bg-success rounded-pill" style="font-size:16px;">{{ number_format($Kassa['kassa_naqt_ish_haqi_pedding'], 0, '.', ' ') }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                        Plastik
                        <span class="badge bg-success rounded-pill" style="font-size:16px;">{{ number_format($Kassa['kassa_plastik_ish_haqi_pedding'], 0, '.', ' ') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @endif
        <div class="col-lg-4 mt-lg-0 mt-2"><button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#qaytarilgan">Qaytarilgan to'lovlar (Oxirgi 7 kun)</button></div>
        <div class="col-lg-4 mt-lg-0 mt-2"><button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#kassadanChiqim">Kassadan chiqim</button></div>
        <div class="col-lg-4 mt-lg-0 mt-2"><button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#kassadanXarajat">Xarajatlar chiqim</button></div>
        <div class="col-12">
            <div class="card mt-3">
                <div class="card-body">
                    <h2 class="card-title w-100 text-center">Tasdiqlanish kutilmoqda</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" style="font-size:14px;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Chiqim turi</th>
                                    <th>Summa</th>
                                    <th>Tulov turi</th>
                                    <th>Chqim haqida</th>
                                    <th>Meneger</th>
                                    <th>Chiqim vaqti</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($Tasdiqlanmagan as $item)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $item['hodisa'] }}</td>
                                        <td>{{ $item['summa'] }}</td>
                                        <td>{{ $item['type'] }}</td>
                                        <td>{{ $item['comment'] }}</td>
                                        <td>{{ $item['meneger'] }}</td>
                                        <td>{{ $item['created_at'] }}</td>
                                        <td>
                                            <form action="{{ route('meneger_moliya_kassadan_chiqim_delete') }}" method="post" class="p-0 m-0" style="display:inline">
                                                @csrf 
                                                <input type="hidden" name="id" value="{{ $item['id'] }}">
                                                <button class="btn btn-danger p-1"><i class="bi bi-trash"></i></button>
                                            </form>
                                            @if(auth()->user()->role_id==2)
                                            <form action="{{ route('meneger_moliya_kassadan_chiqim_check') }}" method="post" class="p-0 m-0" style="display:inline">
                                                @csrf 
                                                <input type="hidden" name="id" value="{{ $item['id'] }}">
                                                <button class="btn btn-success p-1"><i class="bi bi-check"></i></button>
                                            </form>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan=8 class="text-center">Tasdiqlanmagan chiqim va xarajatlar mavjud emas.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="modal fade" id="qaytarilgan" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100 text-center">Qaytarilgan to'lovlar (Oxirgi 7 kun)</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" style="font-size:14px;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>FIO</th>
                                    <th>Summa</th>
                                    <th>Qaytarish sababi</th>
                                    <th>Qaytarilgan vaqt</th>
                                    <th>Meneger</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($Qaytarilganlar as $item)
                                    <tr>
                                        <td>1</td>
                                        <td><a href="{{ route('meneger.all_show', $item['user_id'] ) }}">{{ $item['name'] }}</a></td>
                                        <td>{{ number_format($item['summa'], 0, '.', ' ') }}</td>
                                        <td>{{ $item['comment'] }}</td>
                                        <td>{{ $item['created_at'] }}</td>
                                        <td>{{ $item['meneger'] }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan=6 class="text-center">Oxirhi 7 kunda to'lovlar qaytarilmagan.</td>
                                    </tr>
                                @endforelse                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="kassadanChiqim" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100 text-center">Kassadan chiqim</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-group">
                                <li class="list-group-item"><i class="bi bi-coin me-1 text-success"></i> {{ number_format($Kassa['kassa_naqt'], 0, '.', ' ') }} </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-group">
                                <li class="list-group-item"><i class="bi bi-credit-card me-1 text-success"></i> {{ number_format($Kassa['kassa_plastik'], 0, '.', ' ') }} </li>
                            </ul>
                        </div>
                    </div>
                    <form action="{{ route('meneger_moliya_kassadan_chiqim') }}" method="post" class="m-0 p-0">
                        @csrf 
                        <input type="hidden" name="kassa_naqt" value="{{ $Kassa['kassa_naqt'] }}">
                        <input type="hidden" name="kassa_plastik" value="{{ $Kassa['kassa_plastik'] }}">
                        <input type="hidden" name="typing" value="Kassadan Chiqim">
                        <div class="row">
                            <div class="col-6">
                                <label for="summa" class="my-2">Chiqim summasi</label>
                                <input type="text" name="summa" required class="form-control amount">
                            </div>
                            <div class="col-6">
                                <label for="type" class="my-2">Chiqim turi</label>
                                <select name="type" required class="form-select">
                                    <option value="">Tanlang</option>
                                    <option value="Naqt">Naqt</option>
                                    <option value="Plastik">Plastik</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="comment" class="my-2">Chiqim haqida</label>
                                <textarea name="comment" required class="form-control mb-3"></textarea>
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn btn-danger w-100" data-bs-dismiss="modal">Bekor qilish</button>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary w-100">Tasdiqlash</button>
                            </div>
                        </div>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="kassadanXarajat" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100 text-center">Kassadan xarajat</h5><br>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-group">
                                <li class="list-group-item"><i class="bi bi-coin me-1 text-success"></i> {{ number_format($Kassa['kassa_naqt'], 0, '.', ' ') }} </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-group">
                                <li class="list-group-item"><i class="bi bi-credit-card me-1 text-success"></i> {{ number_format($Kassa['kassa_plastik'], 0, '.', ' ') }} </li>
                            </ul>
                        </div>
                    </div>
                    <form action="{{ route('meneger_moliya_kassadan_chiqim') }}" method="post" class="m-0 p-0">
                        @csrf 
                        <input type="hidden" name="kassa_naqt" value="{{ $Kassa['kassa_naqt'] }}">
                        <input type="hidden" name="kassa_plastik" value="{{ $Kassa['kassa_plastik'] }}">
                        <input type="hidden" name="typing" value="Kassadan Xarajat">
                        <div class="row">
                            <div class="col-6">
                                <label for="summa" class="my-2">Xarajat summasi</label>
                                <input type="text" name="summa" required class="form-control amount">
                            </div>
                            <div class="col-6">
                                <label for="type" class="my-2">Xarajat turi</label>
                                <select name="type" required class="form-select">
                                    <option value="">Tanlang</option>
                                    <option value="Naqt">Naqt</option>
                                    <option value="Plastik">Plastik</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="comment" class="my-2">Xarajat haqida</label>
                                <textarea name="comment" required class="form-control mb-3"></textarea>
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn btn-danger w-100" data-bs-dismiss="modal">Bekor qilish</button>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary w-100">Tasdiqlash</button>
                            </div>
                        </div>
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