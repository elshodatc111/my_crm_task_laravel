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
      <li class="breadcrumb-item"><a href="index.html">Bosh sahifa</a></li>
      <li class="breadcrumb-item active">Xona sozlamalari</li>
    </ol>
  </nav>
</div>

<section class="section dashboard">
  <div class="row mb-2">
    <div class="col-lg-3 mt-lg-0 mt-2">
      <a href="settings.html" class="btn btn-primary w-100">Xonalar</a>
    </div>
    <div class="col-lg-3 mt-lg-0 mt-2">
      <a href="settings_tolov.html" class="btn btn-secondary w-100">To'lovlar</a>
    </div>
    <div class="col-lg-3 mt-lg-0 mt-2">
      <a href="settings_cours.html" class="btn btn-secondary w-100">Kurslar</a>
    </div>
    <div class="col-lg-3 mt-lg-0 mt-2">
      <a href="settings_sms.html" class="btn btn-secondary w-100">SMS</a>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-8">
      <div class="card" style="min-height:290px;">
        <div class="card-body">
          <h5 class="card-title w-100 text-center">Dars xonalari </h5>
          <div class="table-responsive">
            <table class="table text-center table-bordered" style="font-size: 12px;">
              <thead>
                <tr class="align-items-center">
                  <th>#</th>
                  <th>Xona nomi</th>
                  <th>Xona ochildi</th>
                  <th>Xona holati</th>
                  <th>Meneger</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>1-xona</td>
                  <td>20.07.2024 15:14:13</td>
                  <td><span>Ochiq</span></td>
                  <td>elshodatc1116</td>
                  <td>
                    <form action="" method="post">
                      <button class="btn btn-danger mx-0 py-0" title="Bloklangan"><i class="bi bi-lock"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>2-xona</td>
                  <td>20.07.2024 15:14:13</td>
                  <td><span>Ochiq</span></td>
                  <td>elshodatc1116</td>
                  <td>
                    <form action="" method="post">
                      <button class="btn btn-success mx-0 py-0" title="Aktiv"><i class="bi bi-unlock"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>3-xona</td>
                  <td>20.07.2024 15:14:13</td>
                  <td><span>Yopiq</span></td>
                  <td>elshodatc1116</td>
                  <td>
                    <form action="" method="post">
                      <button class="btn btn-success mx-0 py-0" title="Aktiv"><i class="bi bi-unlock"></i></button>
                    </form>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card" style="min-height:290px;">
        <div class="card-body">
          <h5 class="card-title w-100 text-center">Yangi xona qo'shish</h5>
          <form action="" method="post">
            <label for="">Yangi xona nomi</label>
            <input type="text" class="form-control my-2" required>
            <button class="btn btn-primary w-100">Xonani saqlash</button>
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