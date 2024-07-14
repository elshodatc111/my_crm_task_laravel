@extends('layouts.meneger_src')
@section('content')
@extends('layouts.admin_header')
@extends('layouts.admin_menu')

  
  
<main id="main" class="main">

<div class="pagetitle">
  <h1>Tashriflar</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Bosh sahifa</a></li>
      <li class="breadcrumb-item active">Tashriflar</li>
    </ol>
  </nav>
</div>

<section class="section dashboard">



  <div class="row mb-2">
    <div class="col-6 col-lg-3 mt-1">
      <a href="{{ route('admin.show',$id) }}" class="btn btn-secondary w-100">Markaz haqida</a>
    </div>
    <div class="col-6 col-lg-3 mt-1">
      <a href="{{ route('admin.show_setting',$id) }}" class="btn btn-secondary w-100">Sozlamalar</a>
    </div>
    <div class="col-6 col-lg-3 mt-1">
      <a href="{{ route('admin.show_sms',$id) }}" class="btn btn-primary w-100">SMS sozlamalari</a>
    </div>
    <div class="col-6 col-lg-3 mt-1">
      <a href="{{ route('admin.show_statistik',$id) }}" class="btn btn-secondary w-100">Statistika</a>
    </div>
  </div>

  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="bi bi-check-circle me-1"></i>
    Yangi talalaba qo'shildi.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>


      <div class="row">
        <div class="col-lg-6">
          <div class="card" style="min-height:180px">
            <div class="card-body">
              <h2 class="card-title w-100 text-center">Markaz nomi</h2>
              <table class="table text-center table-bordered">
                <tr>
                  <th>Yuborilgan SMS</th>
                  <th>Mavjud SMS</th>
                </tr>
                <tr>
                  <td>12</td>
                  <td>15</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card" style="min-height:180px">
            <div class="card-body">
              <h5 class="card-title w-100 text-center">SMS xizmati sozlamasi</h5>
              <div class="w-100 text-center mt-2">
                <form action="" method="post" style="display: inline;">
                  <button class="btn btn-success w-100">Xizmatni faollashtirish</button>
                </form>
                <form action="" method="post" style="display: inline;">
                  <button class="btn btn-danger w-100">Xizmatni o'chirish</button>
                </form>

                <a href="admin_index_show_sms_all_send.html" class="btn btn-outline-info w-100 mt-2">Barcha yuborilgan smslar</a>
              </div>
            </div>
          </div>
        </div>

        
        <div class="col-lg-6">
          <div class="card" style="min-height:180px">
            <div class="card-body">
              <h5 class="card-title w-100 text-center">Yangi sms paketi</h5>
              <div class="w-100 text-center mt-2">
                <form action="" method="post">
                  <label for="">SMS paketi soni</label>
                  <input type="number" required class="form-control my-2">
                  <label for="">SMS paketi haqida</label>
                  <input type="text" required class="form-control my-2">
                  <button class="btn btn-danger my-2">Paketni saqlash</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title w-100 text-center">SMS paketlari tarixi</h5>
              <div class="table-responsive">
                <table class="table text-center table-bordered" style="font-size: 12px;">
                  <thead>
                    <tr class="align-items-center">
                      <th>#</th>
                      <th>Paket soni</th>
                      <th>Paket haqidani</th>
                      <th>Meneger</th>
                      <th>Data</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>15</td>
                      <td>Test xabar matni</td>
                      <td>elshodatc1116</td>
                      <td>10.07.2024 15:24:45</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>2021</td>
                      <td>Test xabar matni</td>
                      <td>elshodatc1116</td>
                      <td>10.07.2024 15:24:45</td>
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