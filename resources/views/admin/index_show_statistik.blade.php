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
      <a href="{{ route('admin.show_sms',$id) }}" class="btn btn-secondary w-100">SMS sozlamalari</a>
    </div>
    <div class="col-6 col-lg-3 mt-1">
      <a href="{{ route('admin.show_statistik',$id) }}" class="btn btn-primary w-100">Statistika</a>
    </div>
  </div>

  <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle me-1"></i>
        Yangi talalaba qo'shildi.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

      <div class="card">
        <div class="card-body">
          <h5 class="card-title w-100 text-center">Tashriflar</h5>
          <div class="table-responsive">
            <table class="table text-center table-bordered" style="font-size: 12px;">
              <thead>
                <tr class="align-items-center">
                  <th>#</th>
                  <th>Talaba</th>
                  <th>Telefon raqam</th>
                  <th>Address</th>
                  <th>Guruhlar</th>
                  <th>Ro'yhatdan o'tdi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td style="text-align:left;">
                    <a href="index_show.html"><b>Elshod Musurmonov</b></a>
                  </td>
                  <td>99 890 88 55</td>
                  <td>Qarshi shaxar</td>
                  <td>3</td>
                  <td>10.07.2024 15:24:45</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td style="text-align:left;">
                    <a href="index_show.html"><b>Elshod Musurmonov</b></a>
                  </td>
                  <td>99 890 88 55</td>
                  <td>Qarshi shaxar</td>
                  <td>3</td>
                  <td>10.07.2024 15:24:45</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td style="text-align:left;">
                    <a href="index_show.html"><b>Elshod Musurmonov</b></a>
                  </td>
                  <td>99 890 88 55</td>
                  <td>Qarshi shaxar</td>
                  <td>3</td>
                  <td>10.07.2024 15:24:45</td>
                </tr>
              </tbody>
            </table>
          </div>
          <nav aria-label="Page navigation example">
            <ul class="pagination  pagination-sm justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
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