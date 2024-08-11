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


      <div class="card">
        <div class="card-body">
          <h5 class="card-title w-100 text-center">Xarid qilingan SMS paketlari</h5>
          <div class="table-responsive">
            <table class="table text-center table-bordered" style="font-size: 12px;">
              <thead>
                <tr class="align-items-center">
                  <th>#</th>
                  <th>Telefon raqam</th>
                  <th>SMS matni</th>
                  <th>Yuborilgan vaqt</th>
                </tr>
              </thead>
              <tbody>
                @forelse($messege as $item)
                  <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $item['phone'] }}</td>
                    <td style="text-align:left; ">{{ $item['description'] }}</td>
                    <td>{{ $item['created_at'] }}</td>
                  </tr>
                @empty
                  <tr>
                    <td class="text-center" colspan=4>Yurborilgan smslar mavjud emas.</td>
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