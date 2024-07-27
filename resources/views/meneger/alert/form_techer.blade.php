@extends('layouts.meneger_src')
@section('title', 'Balans')
@section('content')
@extends('layouts.meneger_header')
@extends('layouts.meneger_menu')

<main id="main" class="main">

<div class="pagetitle">
  <h1>Form</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('meneger.home') }}">Bosh sahifa</a></li>
      <li class="breadcrumb-item active">Form Statistika</li>
    </ol>
  </nav>
</div>

<section class="section dashboard">

    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-1"></i>
                {{Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif (Session::has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-1"></i>
                {{Session::get('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-3 col-6 pt-2">
            <a href="{{ route('form') }}" class="btn btn-secondary w-100">Form Murojat</a>
        </div>
        <div class="col-lg-3 col-6 pt-2">
            <a href="{{ route('form_techer') }}" class="btn btn-primary w-100">Form Statistika</a>
        </div>
        <div class="col-lg-3 col-6 pt-2">
            <a href="{{ route('form_arxiv') }}" class="btn btn-secondary w-100">Arxiv</a>
        </div>
        <div class="col-lg-3 col-6 pt-2">
            <a href="{{ route('form_url') }}" class="btn btn-secondary w-100">Url Manzil</a>
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