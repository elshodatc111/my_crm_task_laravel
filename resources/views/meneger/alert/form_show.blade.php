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
      <li class="breadcrumb-item"><a href="{{ route('form') }}">Murojatlar</a></li>
      <li class="breadcrumb-item active">Murojat</li>
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
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title w-100 text-center">
                        <b class="p-0 m-0 text-success">
                            @if($Form['type']=='User')
                                Talaba:
                            @else
                                O'qituvchi:
                            @endif
                        </b>
                        {{ $Form['name'] }}
                    </h2>
                    <div class="row">
                        <div class="col-6">
                            <Label class="my-2">SMM</Label>
                            <input type="text" class="form-control" value="{{ $Form['smm'] }}" disabled>
                            <Label class="my-2">Yashash manzili</Label>
                            <input type="text" class="form-control" value="{{ $Form['addres'] }}" disabled>
                        </div>
                        <div class="col-6">
                            <Label class="my-2">Telefon raqam</Label>
                            <input type="text" class="form-control" value="{{ $Form['phone1'] }}" disabled>
                            <Label class="my-2">Qo'shimcha telefon raqam</Label>
                            <input type="text" class="form-control" value="{{ $Form['phone2'] }}" disabled>
                        </div>
                        @if($User)
                        <div class="col-12">
                            <h2 class="text-danger w-100 text-center mt-2">Telefon raqam ro'yhatga olingan.</h2>
                        </div>
                        <div class="col-6">
                            <Label class="my-2">FIO</Label>
                            <input type="text" class="form-control" value="{{ $Form['smm'] }}" disabled>
                            <Label class="my-2">Telefon raqam</Label>
                            <input type="text" class="form-control" value="{{ $Form['smm'] }}" disabled>
                            <Label class="my-2">Qo'shimcha telefon raqam</Label>
                            <input type="text" class="form-control" value="{{ $Form['smm'] }}" disabled>
                        </div>
                        <div class="col-6">
                            <Label class="my-2">Yashash manzili</Label>
                            <input type="text" class="form-control" value="{{ $Form['smm'] }}" disabled>
                            <Label class="my-2">Tug'ilgan kuni</Label>
                            <input type="text" class="form-control" value="{{ $Form['smm'] }}" disabled>
                            <Label class="my-2">Login</Label>
                            <input type="text" class="form-control" value="{{ $Form['addres'] }}" disabled>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title w-100 text-center">Murojatni saqlash</h2>
                    <form action="{{ route('form_murojat_typing') }}" method="post">
                        @csrf 
                        <input type="hidden" name="form_id" value="{{ $Form->id }}">
                        <select name="Status" required class="form-select">
                            <option value="">Tanlang</option>
                            @if(!$User)
                                @if($Form->type=='User')
                                    <option value="register">Ro'yhatga olish</option>
                                @endif
                            @endif
                            @if($Form->status=='true')
                            <option value="arxiv">Arxivga Saqlash</option>
                            @endif
                        </select>
                        <button type="submit" class="btn btn-primary w-100 mt-3">Saqlash</button>
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