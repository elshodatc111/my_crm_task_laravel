@extends('layouts.meneger_src')
@section('content')
@extends('layouts.admin_header')
@extends('layouts.admin_menu')

  
<main id="main" class="main">

<div class="pagetitle">
  <h1>Markaz</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Bosh sahifa</a></li>
      <li class="breadcrumb-item active">Yangi o'quv markazlar</li>
    </ol>
  </nav>
</div>

<section class="section dashboard">



<div class="row mb-2">
      <div class="col-6">
        <a href="{{ route('admin.index') }}" class="btn btn-secondary w-100">O'quv markazlar</a>
      </div>
      <div class="col-6">
        <a href="{{ route('admin.create') }}" class="btn btn-primary w-100">Yangi o'quv markaz</a>
      </div>
    </div>


  <div class="card">
    <div class="card-body">
      <h5 class="card-title w-100 text-center">Yang o'quv markazlar</h5>
      <form action="">
        <div class="row">
          <div class="col-lg-6">
            <label for="">O'quv markaz nomi</label>
            <input type="text" required class="form-control">
            <label for="">O'quv markaz drektori</label>
            <input type="text" required class="form-control">
          </div>
          <div class="col-lg-6">
            <label for="">Drektor telefon raqami</label>
            <input type="text" required class="form-control">
            <label for=""></label>
            <button class="btn btn-primary w-100">Saqlash</button>
          </div>
        </div>
      </form>
      
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