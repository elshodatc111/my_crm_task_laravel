@extends('layouts.meneger_src')
@section('title', 'Balans')
@section('content')
@extends('layouts.meneger_header')
@extends('layouts.meneger_menu')

<main id="main" class="main">

<div class="pagetitle">
  <h1>Balans</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('meneger.home') }}">Bosh sahifa</a></li>
      <li class="breadcrumb-item active">Balans</li>
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
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-1"></i>
                {{Session::get('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title w-100 text-center">Mavjud balans</h5>
                    <div class="row">
                        <div class="col-lg-4">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Naqt
                                    <span class="badge bg-success rounded-pill">{{ number_format($MarkazBalans['balans_naqt'], 0, '.', ' ') }}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Plastik
                                    <span class="badge bg-success rounded-pill">{{ number_format($MarkazBalans['balans_plastik'], 0, '.', ' ') }}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Payme
                                    <span class="badge bg-success rounded-pill">{{ number_format($MarkazBalans['balans_payme'], 0, '.', ' ') }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title w-100 text-center">Kassada mavjud summa</h5>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Naqt
                            <span class="badge bg-danger rounded-pill">{{ number_format($Kassa['kassa_naqt'], 0, '.', ' ') }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Plastik
                            <span class="badge bg-danger rounded-pill">{{ number_format($Kassa['kassa_plastik'], 0, '.', ' ') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title w-100 text-center">Tasdiqlanmagan chiqimlar</h5>
                    <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Naqt
                        <span class="badge bg-secondary rounded-pill">{{ number_format($Kassa['kassa_naqt_chiqim_pedding'], 0, '.', ' ') }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Plastik
                        <span class="badge bg-secondary rounded-pill">{{ number_format($Kassa['kassa_plastik_chiqim_pedding'], 0, '.', ' ') }}</span>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title w-100 text-center">Tasdiqlanmagan xarajatlar</h5>
                    <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Naqt
                        <span class="badge bg-secondary rounded-pill">{{ number_format($Kassa['kassa_naqt_xarajat_pedding'], 0, '.', ' ') }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Plastik
                        <span class="badge bg-secondary rounded-pill">{{ number_format($Kassa['kassa_plastik_xarajat_pedding'], 0, '.', ' ') }}</span>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title w-100 text-center">Kassada mavjud ish haqi</h5>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Naqt
                            <span class="badge bg-primary rounded-pill">{{ number_format($Kassa['kassa_naqt_ish_haqi_pedding'], 0, '.', ' ') }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Plastik
                            <span class="badge bg-primary rounded-pill">{{ number_format($Kassa['kassa_plastik_ish_haqi_pedding'], 0, '.', ' ') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body pt-3">
                    <button class="btn btn-primary my-1 w-100" data-bs-toggle="modal" data-bs-target="#ishHaqiKassaga">Ish haqi uchun kassaga chiqim</button>
                    <button class="btn btn-primary my-1 w-100" data-bs-toggle="modal" data-bs-target="#ishHaqiBalansga">Kassadan ish haqini qaytarish</button>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body pt-3">
                    <button class="btn btn-primary my-1 w-100" data-bs-toggle="modal" data-bs-target="#balansdanXarajat">Balansdan xarajatlar uchun</button>
                    <button class="btn btn-primary my-1 w-100" data-bs-toggle="modal" data-bs-target="#kassagaQaytarish">Balansdan kassaga qaytarish</button>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body pt-3">
                    <button class="btn btn-primary my-1 w-100" data-bs-toggle="modal" data-bs-target="#balansdanChiqim">Balansdan chiqim</button>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title w-100 text-center">Hodisalar tarixi (oxirgi 7 kun)</h2>
                    <div class="table-responsive">
                        <table class="table text-center table-bordered" style="font-size: 12px;">
                            <thead>
                                <tr class="align-items-center">
                                    <th>#</th>
                                    <th>Hodisa turi</th>
                                    <th>Summa</th>
                                    <th>To'lov turi</th>
                                    <th>Hodisa haqida</th>
                                    <th>Meneger</th>
                                    <th>Hodisa vaqti</th>
                                    <th>Administrator</th>
                                    <th>Tasdiqlandi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($KassaKirimChiqim as $item)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $item['hodisa'] }}</td>
                                    <td>{{ $item['summa'] }}</td>
                                    <td>{{ $item['type'] }}</td>
                                    <td>{{ $item['comment'] }}</td>
                                    <td>{{ $item['meneger'] }}</td>
                                    <td>{{ $item['created_at'] }}</td>
                                    <td>{{ $item['administrator'] }}</td>
                                    <td>{{ $item['updated_at'] }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan=9 class="text-center">Oxirgi 7 kunda operatsiyalar amalga oshirilmagan</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="ishHaqiKassaga" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100 text-center">Ish haqi uchun kassaga qaytarish</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('meneger_profel_ish_haqi') }}" method="post" class="p-0 m-0">
                        @csrf
                        <input type="hidden" name="naqt" value="{{ $MarkazBalans['balans_naqt'] }}">
                        <input type="hidden" name="plastik" value="{{ $MarkazBalans['balans_plastik'] }}">
                        <input type="hidden" name="typing" value="balansdanKassaga">
                        <label for="summa" class="my-1">Ish haqi uchun summa</label>
                        <input type="text" name="summa" required class="form-control amount" >
                        <label for="type" class="my-1">To'lov turi</label>
                        <select name="type" class="form-select">
                            <option value="">Tanlang</option>
                            <option value="Naqt">Naqt</option>
                            <option value="Plastik">Plastik</option>
                        </select>
                        <label for="comment" class="my-1">Izoh</label>
                        <textarea name="comment" required class="form-control mb-2"></textarea>
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-danger w-100" data-bs-dismiss="modal">Bekor qilish</button>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary w-100">Saqlash</button>
                            </div>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
    </div>    
    <div class="modal fade" id="ishHaqiBalansga" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100 text-center">Kassadagi ish haqini balansga qaytarish</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('meneger_profel_ish_haqi') }}" method="post" class="p-0 m-0">
                        @csrf
                        <input type="hidden" name="naqt" value="{{ $Kassa['kassa_naqt_ish_haqi_pedding'] }}">
                        <input type="hidden" name="plastik" value="{{ $Kassa['kassa_plastik_ish_haqi_pedding'] }}">
                        <input type="hidden" name="typing" value="kassadanBalansga">
                        <label for="summa" class="my-1">Kassadagi ish haqi uchun summa</label>
                        <input type="text" name="summa" required class="form-control amount">
                        <label for="type" class="my-1">To'lov turi</label>
                        <select name="type" class="form-select">
                            <option value="">Tanlang</option>
                            <option value="Naqt">Naqt</option>
                            <option value="Plastik">Plastik</option>
                        </select>
                        <label for="comment" class="my-1">Izoh</label>
                        <textarea name="comment" required class="form-control mb-2"></textarea>
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-danger w-100" data-bs-dismiss="modal">Bekor qilish</button>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary w-100">Saqlash</button>
                            </div>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
    </div>    
    <div class="modal fade" id="balansdanXarajat" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100 text-center">Balansdan xarajatlar</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('meneger_profel_chiqimlar') }}" method="post" class="p-0 m-0">
                        @csrf
                        <input type="hidden" name="naqt" value="{{ $MarkazBalans['balans_naqt'] }}">
                        <input type="hidden" name="plastik" value="{{ $MarkazBalans['balans_plastik'] }}">
                        <input type="hidden" name="payme" value="{{ $MarkazBalans['balans_payme'] }}">
                        <input type="hidden" name="typing" value="balansdanXarajat">
                        <label for="summa" class="my-1">Xarajat summa</label>
                        <input type="text" name="summa" required class="form-control amount" >
                        <label for="type" class="my-1">To'lov turi</label>
                        <select name="type" class="form-select">
                            <option value="">Tanlang</option>
                            <option value="Naqt">Naqt</option>
                            <option value="Plastik">Plastik</option>
                            <option value="Payme">Payme</option>
                        </select>
                        <label for="comment" class="my-1">Xarajat haqida</label>
                        <textarea name="comment" required class="form-control mb-2"></textarea>
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-danger w-100" data-bs-dismiss="modal">Bekor qilish</button>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary w-100">Saqlash</button>
                            </div>
                        </div>
                    </form>     
                </div>
            </div>
        </div>
    </div>    
    <div class="modal fade" id="kassagaQaytarish" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100 text-center">Balansdan kassaga qaytarish</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('meneger_profel_chiqimlar') }}" method="post" class="p-0 m-0">
                        @csrf
                        <input type="hidden" name="naqt" value="{{ $MarkazBalans['balans_naqt'] }}">
                        <input type="hidden" name="plastik" value="{{ $MarkazBalans['balans_plastik'] }}">
                        <input type="hidden" name="payme" value="{{ $MarkazBalans['balans_payme'] }}">
                        <input type="hidden" name="typing" value="balansdanKassaga">
                        <label for="summa" class="my-1">Balansga qaytariladigan summa</label>
                        <input type="text" name="summa" required class="form-control amount" >
                        <label for="type" class="my-1">To'lov turi</label>
                        <select name="type" class="form-select">
                            <option value="">Tanlang</option>
                            <option value="Naqt">Naqt</option>
                            <option value="Plastik">Plastik</option>
                        </select>
                        <label for="comment" class="my-1">Balansga qaytariladigan summa haqida</label>
                        <textarea name="comment" required class="form-control mb-2"></textarea>
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-danger w-100" data-bs-dismiss="modal">Bekor qilish</button>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary w-100">Saqlash</button>
                            </div>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
    </div>    
    <div class="modal fade" id="balansdanChiqim" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100 text-center">Balansdan chiqim qilish</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('meneger_profel_chiqimlar') }}" method="post" class="p-0 m-0">
                        @csrf
                        <input type="hidden" name="naqt" value="{{ $MarkazBalans['balans_naqt'] }}">
                        <input type="hidden" name="plastik" value="{{ $MarkazBalans['balans_plastik'] }}">
                        <input type="hidden" name="payme" value="{{ $MarkazBalans['balans_payme'] }}">
                        <input type="hidden" name="typing" value="balansdanChiqim">
                        <label for="summa" class="my-1">Balansga chiqim summa</label>
                        <input type="text" name="summa" required class="form-control amount" >
                        <label for="type" class="my-1">To'lov turi</label>
                        <select name="type" class="form-select">
                            <option value="">Tanlang</option>
                            <option value="Naqt">Naqt</option>
                            <option value="Plastik">Plastik</option>
                            <option value="Payme">Payme</option>
                        </select>
                        <label for="comment" class="my-1">Chiqim haqida</label>
                        <textarea name="comment" required class="form-control mb-2"></textarea>
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-danger w-100" data-bs-dismiss="modal">Bekor qilish</button>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary w-100">Saqlash</button>
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