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
      <a href="{{ route('admin.show_setting',$id) }}" class="btn btn-primary w-100">Sozlamalar</a>
    </div>
    <div class="col-6 col-lg-3 mt-1">
      <a href="{{ route('admin.show_sms',$id) }}" class="btn btn-secondary w-100">SMS sozlamalari</a>
    </div>
    <div class="col-6 col-lg-3 mt-1">
      <a href="{{ route('admin.show_statistik',$id) }}" class="btn btn-secondary w-100">Statistika</a>
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
        <div class="col-lg-6">
          <div class="card" style="min-height:400px">
            <div class="card-body mt-3">
              <form action="{{ route('admin.show_update',$id ) }}" method="post">
                @csrf 
                @method('put')
                <label for="">O'quv markaz</label>
                <input type="text" name="name" value="{{ $response['markaz']['name'] }}" required class="form-control">
                <label for="">Drektor</label>
                <input type="text" name="drektor" value="{{ $response['markaz']['drektor'] }}" required class="form-control">
                <label for="">Telefon raqam</label>
                <input type="text" name="phone" value="{{ $response['markaz']['phone'] }}" required class="form-control">
                <label for="">Manzil</label>
                <input type="text" name="addres" value="{{ $response['markaz']['addres'] }}" required class="form-control">
                <label for="">Payme ID</label>
                <input type="text" name="payme_id" value="{{ $response['markaz']['payme_id'] }}" required class="form-control">
                <label for="">Payme ID</label>
                <input type="text" name="lessen_time" value="{{ $response['markaz']['lessen_time'] }}" required class="form-control">
                <label for="">Payme ID</label>
                <input type="text" name="paymart" value="{{ $response['markaz']['paymart'] }}" required class="form-control">
                <button type="submit" class="btn btn-primary w-100 mt-2">O'zgarishlarni saqlash</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title w-100 text-center">Markaz nomi</h5>
              <div class="w-100 text-center mt-2">
                @if($response['markaz']['status']=='true')
                <form action="{{ route('admin.show_update_lock') }}" method="post" style="display: inline;">
                  @csrf
                  <input type="hidden" name="id" value="{{ $id }}">
                  <button class="btn btn-danger">Bloklash</button>
                </form>
                @else
                <form action="{{ route('admin.show_update_lock_block') }}" method="post" style="display: inline;">
                  @csrf
                  <input type="hidden" name="id" value="{{ $id }}">
                  <button class="btn btn-success">Aktivlashtirish</button>
                </form>
                @endif
              </div>
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