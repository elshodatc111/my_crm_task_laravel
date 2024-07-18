@extends('layouts.meneger_src')
@section('title', 'Kirish')
@section('content')
@extends('layouts.meneger_header')
@extends('layouts.meneger_menu')


  
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Qarzdorlar</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('meneger.all_tashrif') }}">Bosh sahifa</a></li>
          <li class="breadcrumb-item active">Qarzdorlar</li>
        </ol>
      </nav>
    </div>

    <section class="section dashboard"> 

      <div class="row mb-2">
        <div class="col-4">
          <a href="{{ route('meneger.all_tashrif') }}" class="btn btn-secondary w-100">Tashriflar</a>
        </div>
        <div class="col-4">
          <a href="{{ route('meneger.all_debet') }}" class="btn btn-primary w-100">Qarzdorlar</a>
        </div>
        <div class="col-4">
          <a href="{{ route('meneger.all_create') }}" class="btn btn-secondary w-100">Yangi tashrif</a>
        </div>
      </div>

      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle me-1"></i>
        Yangi talalaba qo'shildi.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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