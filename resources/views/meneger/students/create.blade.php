@extends('layouts.meneger_src')
@section('title', 'Kirish')
@section('content')
@extends('layouts.meneger_header')
@extends('layouts.meneger_menu')


  
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Yangi tashrif</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('meneger.all_tashrif') }}">Bosh sahifa</a></li>
          <li class="breadcrumb-item active">Yangi tashrif</li>
        </ol>
      </nav>
    </div>

    <section class="section dashboard"> 

      <div class="row mb-2">
        <div class="col-lg-3 mt-lg-0 mt-3">
          <a href="{{ route('meneger.all_tashrif') }}" class="btn btn-secondary w-100">Tashriflar</a>
        </div>
        <div class="col-lg-3 mt-lg-0 mt-3">
          <a href="{{ route('meneger.all_debet') }}" class="btn btn-secondary w-100">Qarzdorlar</a>
        </div>
        <div class="col-lg-3 mt-lg-0 mt-3">
          <a href="{{ route('dars_jadval') }}" class="btn btn-secondary w-100">Dars jadvali</a>
        </div>
        <div class="col-lg-3 mt-lg-0 mt-3">
          <a href="{{ route('meneger.all_create') }}" class="btn btn-primary w-100">Yangi tashrif</a>
        </div>
      </div>
 
      
      <div class="card">
        <div class="card-body">
          <h5 class="card-title w-100 text-center">Yangi tashrif</h5>
          <form action="{{ route('meneger.all_create_story') }}" method="post">
            @csrf 
            <div class="row">
              <div class="col-lg-6">
                <label for="name" class="mb-1">F.I.SH</label>
                <input type="text" name="name" value="{{ old('name') }}" required class="form-control">
                <label for="phone1" class="mb-1 mt-1">Telefon raqami</label>
                <input type="text"  name="phone1" value="{{ old('phone1') }}" required class="form-control phone">
                @error('phone1')
                  <span class="text-danger w-100" style="font-size:10px;">Telefon raqam oldin ro'yhatga olingan.</span>
                @enderror
                <label for="phone2" class="mb-1 mt-1 w-100">Qo'shimcha telefon raqami</label>
                <input type="text" name="phone2" value="{{ old('phone2') }}" required class="form-control phone">
                <label for="addres" class="mb-1 mt-1">Yashash manzili</label>
                <select name="addres" required class="form-select">
                  <option value="">Tanlang...</option>
                  @foreach($MarkazAddres as $item)
                    <option value="{{ $item['addres'] }}">{{ $item['addres'] }}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-lg-6">
                <label for="tkun" class="mt-1 mt-lg-0 mb-1">Talaba tug'ilgan kuni</label>
                <input type="date" name="tkun" value="{{ old('tkun') }}" required class="form-control">
                @error('tkun')
                  <span class="text-danger w-100" style="font-size:10px;">Yosh chagarasi (7 yoshdan 65 yoshgacha).</span>
                @enderror
                <label for="about" class="mb-1 mt-1 w-100">Talaba haqida</label>
                <textarea name="about" rows="4" required class="form-control">{{ old('about') }}</textarea>
                <label for="smm" class="mb-1 mt-1">Biz haqimizda</label>
                <select name="smm" required class="form-select">
                  <option value="">Tanlang...</option>
                  @foreach($MarkazSmm as $item)
                    <option value="{{ $item['smm'] }}">{{ $item['smm'] }}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-12 text-center mt-4">
                <button type="submit" class="btn btn-primary w-50">Tashrifni saqlash</button>
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