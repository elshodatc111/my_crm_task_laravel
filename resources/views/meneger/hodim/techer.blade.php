@extends('layouts.meneger_src')
@section('title', 'Kirish')
@section('content')
@extends('layouts.meneger_header')
@extends('layouts.meneger_menu')

<main id="main" class="main">

<div class="pagetitle">
  <h1>O'qituvchilar</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('meneger.home') }}">Bosh sahifa</a></li>
      <li class="breadcrumb-item active">O'qituvchilar</li>
    </ol>
  </nav>
</div>

<section class="section dashboard">
<div class="row mb-2">
    <div class="col-lg-3 mt-2 mt-lg-0">
      <a href="{{ route('meneger.hodim') }}" class="btn btn-secondary w-100">Hodimlar</a>
    </div>
    <div class="col-lg-3 mt-2 mt-lg-0">
      <a href="{{ route('meneger.hodim_create') }}" class="btn btn-secondary w-100">Yangi hodim</a>
    </div>
    <div class="col-lg-3 mt-2 mt-lg-0">
      <a href="{{ route('meneger.techer') }}" class="btn btn-primary w-100">O'qituvchilar</a>
    </div>
    <div class="col-lg-3 mt-2 mt-lg-0">
      <a href="{{ route('meneger.techer_create') }}" class="btn btn-secondary w-100">Yangi o'qituvchi</a>
    </div>
  </div>

  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="bi bi-check-circle me-1"></i>
    Yangi xodim qo'shildi.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

  
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="bi bi-check-circle me-1"></i>
    Hodim faoliyati yakunlandi.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="bi bi-check-circle me-1"></i>
    Hodim faoliyati qayta tiklandi.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>


  <div class="card">
    <div class="card-body">
      <h5 class="card-title w-100 text-center">O'qituvchilar</h5>
      <div class="table-responsive">
        <table class="table text-center table-bordered" style="font-size: 12px;">
          <thead>
            <tr class="align-items-center">
              <th>#</th>
              <th>O'qituvchi</th>
              <th>Login</th>
              <th>Telefon</th>
              <th>Faoliyati</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td style="text-align:left;">
                <a href="{{ route('meneger.techer_show',1) }}"><b>Elshod Musurmonov</b></a>
              </td>
              <td>elshodatc1116</td>
              <td>90 883 0450</td>
              <td><span class="bg-success p-1 text-white">Aktiv</span></td>
              <td>
                <form action="" method="post">
                  <button class="btn btn-danger p-0 px-1 m-0">Yakunlash</button>
                </form>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td style="text-align:left;">
                <a href="{{ route('meneger.techer_show',1) }}"><b>Elshod Musurmonov</b></a>
              </td>
              <td>elshodatc1116</td>
              <td>90 883 0450</td>
              <td><span class="bg-danger p-1 text-white">Yakunlangan</span></td>
              <td>
                <form action="" method="post">
                  <button class="btn btn-success p-0 px-1 m-0">Aktivlashtirish</button>
                </form>
              </td>
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