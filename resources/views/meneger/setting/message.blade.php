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
      <li class="breadcrumb-item active">SMS sozlamalari</li>
    </ol>
  </nav>
</div>

<section class="section dashboard">
  <div class="row mb-2">
    <div class="col-lg-3 mt-lg-0 mt-2">
      <a href="{{ route('meneger.rooms') }}" class="btn btn-secondary w-100">Xonalar</a>
    </div>
    <div class="col-lg-3 mt-lg-0 mt-2">
      <a href="{{ route('meneger.paymart') }}" class="btn btn-secondary w-100">To'lovlar</a>
    </div>
    <div class="col-lg-3 mt-lg-0 mt-2">
      <a href="{{ route('meneger.cours') }}" class="btn btn-secondary w-100">Kurslar</a>
    </div>
    <div class="col-lg-3 mt-lg-0 mt-2">
      <a href="{{ route('meneger.message') }}" class="btn btn-primary w-100">SMS</a>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title w-100 text-center">SMS statistikasi</h5>
          <div class="row">
            <div class="col-6">
              <h5 class="w-100 text-center">Yuborilgan SMSlar</h5>
              <h3 class="w-100 text-center">{{ $return['markaz']['count_sms'] }}</h3>
            </div>
            <div class="col-6">
              <h5 class="w-100 text-center">SMS uchun to'lovlar</h5>
              <h3 class="w-100 text-center">{{ $return['markaz']['mavjud_sms'] }}</h3>
            </div>
            <div class="col-12 text-center pt-3">
              <a  href="{{ route('meneger.message_show') }}" class="btn btn-primary mb-3 w-100 ">Yuborilgan smslar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title w-100 text-center">SMS Sozlamalar</h5>
          <form action="{{ route('meneger.message_update') }}" method="post">
            @csrf 
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="new_user" @if($return['setting']['new_user']=='true') checked @endif >
              <label class="form-check-label" for="flexSwitchCheckChecked">Yangi tashriflar uchun sms yuborish</label>
            </div>
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="tkun" @if($return['setting']['tkun']=='true') checked @endif >
              <label class="form-check-label" for="flexSwitchCheckChecked">Tug'ilgan kunlar uchun sms yuborish</label>
            </div>
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="new_pay" @if($return['setting']['new_pay']=='true') checked @endif >
              <label class="form-check-label" for="flexSwitchCheckChecked">To'lovlar uchun sms yuborish</label>
            </div>
            <button class="btn btn-primary mt-2 w-100">O'zgarishlarni saqlash</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title w-100 text-center">Xarid qilingan SMS paketlari</h5>
          <div class="table-responsive">
            <table class="table text-center table-bordered" style="font-size: 12px;">
              <thead>
                <tr class="align-items-center">
                  <th>#</th>
                  <th>SMS paket</th>
                  <th>To'lov summasi</th>
                  <th>Sotib olingan vaqt</th>
                  <th>Paket haqida</th>
                </tr>
              </thead>
              <tbody>
                @forelse($return['paket'] as $item)
                <tr>
                  <td>{{ $loop->index+1 }}</td>
                  <td>{{ $item['paket_soni'] }}</td>
                  <td>{{ $item['tulov'] }}</td>
                  <td>{{ $item['created_at'] }}</td>
                  <td>{{ $item['description'] }}</td>
                </tr>
                @empty
                <tr>
                  <td colspan=5 class="text-center">Xarid qilingan sms paketlari mavjud emas.</td>
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