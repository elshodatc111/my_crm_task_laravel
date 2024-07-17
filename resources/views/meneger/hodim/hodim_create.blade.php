@extends('layouts.meneger_src')
@section('title', 'Kirish')
@section('content')
@extends('layouts.meneger_header')
@extends('layouts.meneger_menu')

<main id="main" class="main">

<div class="pagetitle">
  <h1>Yangi hodimlar</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('meneger.home') }}">Bosh sahifa</a></li>
      <li class="breadcrumb-item active">Yangi hodim</li>
    </ol>
  </nav>
</div>

<section class="section dashboard">
<div class="row mb-2">
    <div class="col-lg-3 mt-2 mt-lg-0">
      <a href="{{ route('meneger.hodim') }}" class="btn btn-secondary w-100">Hodimlar</a>
    </div>
    <div class="col-lg-3 mt-2 mt-lg-0">
      <a href="{{ route('meneger.hodim_create') }}" class="btn btn-primary w-100">Yangi hodim</a>
    </div>
    <div class="col-lg-3 mt-2 mt-lg-0">
      <a href="{{ route('meneger.techer') }}" class="btn btn-secondary w-100">O'qituvchilar</a>
    </div>
    <div class="col-lg-3 mt-2 mt-lg-0">
      <a href="{{ route('meneger.techer_create') }}" class="btn btn-secondary w-100">Yangi o'qituvchi</a>
    </div>
  </div>


  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    Login band.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title w-100 text-center">Yangi hodim</h5>
      <form action="">
        <div class="row">
          <div class="col-lg-6">
            <label class="my-2">Hodimning FIO</label>
            <input type="text" class="form-control" required>
            <label class="my-2">Yashash manzili</label>
            <select name="" required class="form-select">
              <option value=""></option>
            </select>
            <label class="my-2">Hodimning tug'ilgan kuni</label>
            <input type="date" class="form-control" required>
            <label class="my-2">Hodim haqida</label>
            <textarea name=""  class="form-control" required></textarea>
          </div>
          <div class="col-lg-6">
            <label class="my-2">Telefon raqam</label>
            <input type="text" required class="form-control">
            <label class="my-2">Qo'shimcha telefon raqami</label>
            <input type="text" required class="form-control">
            <label class="my-2">Lovazimi</label>
            <select name="" required class="form-select">
              <option value="">Tanlang ...</option>
              <option value="2">Drektor</option>
              <option value="3">Admin</option>
              <option value="4">Meneger</option>
            </select>
            <label class="my-2">Hodim uchun login</label>
            <input type="text" required class="form-control">
            <button class="btn btn-primary w-100 mt-2">Yangi hodimni saqlash</button>
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