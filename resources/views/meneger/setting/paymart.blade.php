@extends('layouts.meneger_src')
@section('title', 'Kirish')
@section('content')
@extends('layouts.meneger_header')
@extends('layouts.meneger_menu')
<main id="main" class="main">

<div class="pagetitle">
  <h1>Sozlamalar</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('meneger.home') }}">Bosh sahifa</a></li>
      <li class="breadcrumb-item active">To'lov sozlamalari</li>
    </ol>
  </nav>
</div>

<section class="section dashboard">
  <div class="row mb-2">
    <div class="col-lg-3 mt-lg-0 mt-2">
      <a href="{{ route('meneger.rooms') }}" class="btn btn-secondary w-100">Xonalar</a>
    </div>
    <div class="col-lg-3 mt-lg-0 mt-2">
      <a href="{{ route('meneger.paymart') }}" class="btn btn-primary w-100">To'lovlar</a>
    </div>
    <div class="col-lg-3 mt-lg-0 mt-2">
      <a href="{{ route('meneger.cours') }}" class="btn btn-secondary w-100">Kurslar</a>
    </div>
    <div class="col-lg-3 mt-lg-0 mt-2">
      <a href="{{ route('meneger.message') }}" class="btn btn-secondary w-100">SMS</a>
    </div>
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
      {{Session::get('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="row">
    <div class="col-lg-8">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title w-100 text-center">To'lov sozlamalari </h5>
          <div class="table-responsive">
            <table class="table text-center table-bordered" style="font-size: 12px;">
              <thead>
                <tr class="align-items-center">
                  <th>#</th>
                  <th>To'lov summasi</th>
                  <th>To'lov chegirmasi</th>
                  <th>Admin chegirmasi</th>
                  <th>Chegirma muddati</th>
                  <th>Meneger</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                @forelse($MarkazPaymart as $item)
                <tr>
                  <td>{{ $loop->index+1 }}</td>
                  <td>{{ number_format($item['summa'], 0, ',', ' ') }}</td>
                  <td>{{ number_format($item['chegirma'], 0, ',', ' ') }}</td>
                  <td>{{ number_format($item['admin_chegirma'], 0, ',', ' ') }}</td>
                  <td>{{ number_format($item['chegirma_time'], 0, ',', ' ') }}</td>
                  <td>{{ $item['meneger'] }}</td>
                  <td> 
                    <form action="{{ route('meneger.paymart_delete') }}" method="post">
                      @csrf 
                      <input type="hidden" name="id" value="{{ $item['id'] }}">
                      <button class="btn btn-danger p-1"><i class="bi bi-trash"></i></button>
                    </form>
                  </td>
                </tr>
                @empty
                <tr>
                  <td colspan=7 class="text-center">To'lov sozlamalari kirityilmagan</td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title w-100 text-center">Yangi to'lov qo'shish</h5>
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <form action="{{ route('meneger.paymart_reate') }}" method="post" id="form1">
            @csrf 
            <label for="">Yangi to'lov summasi</label>
            <input type="text" name="summa" class="form-control  amount my-2" value="{{ old('summa') }}" required>
            @if($Markaz['paymart']==3)
            <label for="">To'lov uchun chegirma</label>
            <input type="text" name="chegirma" class="form-control amount  my-2" value="{{ old('chegirma') }}" required>
            @else
            <input type="hidden" name="chegirma" class="form-control amount  my-2" value="0" required>
            @endif
            <label for="">Admin uchun chegirma</label>
            <input type="text" name="admin_chegirma" class="form-control amount  my-2" value="{{ old('admin_chegirma') }}" required>
            @if($Markaz['paymart']==3)
            <label for="">Chegirma muddati (kun)</label>
            <input type="number" name="chegirma_time" class="form-control my-2" value="{{ old('chegirma_time') }}" required>
            @else
            <input type="hidden" name="chegirma_time" class="form-control amount  my-2" value="0" required>
            @endif
            <button class="btn btn-primary w-100">To'lovni saqlash</button>
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