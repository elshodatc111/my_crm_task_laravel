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
      <a href="{{ route('admin.show',$id) }}" class="btn btn-primary w-100">Markaz haqida</a>
    </div>
    <div class="col-6 col-lg-3 mt-1">
      <a href="{{ route('admin.show_setting',$id) }}" class="btn btn-secondary w-100">Sozlamalar</a>
    </div>
    <div class="col-6 col-lg-3 mt-1">
      <a href="{{ route('admin.show_sms',$id) }}" class="btn btn-secondary w-100">SMS sozlamalari</a>
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
      <div class="card" style="min-height:300px">
        <div class="card-body text-center">
          <h5 class="card-title w-100 text-center">Markaz logatifi</h5>
          <img src="https://atko.tech/mycrm/assets/img/logos/atko.jpg" style="width:80%">
          <form action="" method="post">
            <label for="">Logatifni yangilash</label>
            <input type="file" required class="form-control">
            <button type="submit" class="btn btn-primary w-100 mt-2">Yangilash</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card" style="min-height:300px">
        <div class="card-body">
          <h5 class="card-title w-100 text-center">Markaz nomi</h5>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Drektor
              <span class="badge bg-primary rounded-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Manzil
              <span class="badge bg-primary rounded-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Telefon raqam
              <span class="badge bg-primary rounded-pill">1</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Payme id
              <span class="badge bg-primary rounded-pill">1</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Status
              <span class="badge bg-danger rounded-pill">Bloklandi</span>
              <span class="badge bg-primary rounded-pill">Aktiv</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title w-100 text-center">Ogoxlantirish xatini yuborish</h2>
          <form action="" method="post">
            <div class="row">
              <div class="col-lg-2 col-4 mt-1">
                <label for="">Sanasi</label>
                <input type="date" required class="form-control">
              </div>
              <div class="col-lg-8 col-4 mt-1">
                <label for="">Xabar matni</label>
                <input type="text" required class="form-control">
              </div>
              <div class="col-lg-2 col-4 mt-1">
                <label for=""></label>
                <button class="btn btn-primary w-100">Saqlash</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title w-100 text-center">Yuborilgan ogoxlantirish xatlari</h5>
          <div class="table-responsive">
            <table class="table text-center table-bordered" style="font-size: 12px;">
              <thead>
                <tr class="align-items-center">
                  <th>#</th>
                  <th>Data</th>
                  <th>Xabar matni</th>
                  <th>Meneger</th>
                  <th>Xabar xolati</th>
                  <th>Saqlandi</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>2024.07.15</td>
                  <td>Test xabar matni</td>
                  <td>elshodatc1116</td>
                  <td>true</td>
                  <td>10.07.2024 15:24:45</td>
                  <td>
                    <form action="">
                      <button type="submit" class="btn btn-danger p-0 px-1"><i class="bi bi-trash"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>2024.07.15</td>
                  <td>Test xabar matni</td>
                  <td>elshodatc1116</td>
                  <td>false</td>
                  <td>10.07.2024 15:24:45</td>
                  <td></td>
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