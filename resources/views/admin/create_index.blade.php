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
      <form action="{{ route('admin.create_story') }}" method="POST">
        @csrf 
        <div class="row">
          <div class="col-lg-6">
            <label for="" class="my-2">O'quv markaz nomi</label>
            <input type="text" name="name" required class="form-control">
            <label for="" class="my-2">O'quv markaz drektori</label>
            <input type="text" name="drektor" required class="form-control">
            <label for="" class="my-2">Drektor telefon raqami</label>
            <input type="text" name="phone" required class="form-control">
            <label for="" class="my-2">O'quv markaz manzili</label>
            <input type="text" name="addres" required class="form-control">
          </div>
          <div class="col-lg-6">
            <label for="" class="my-2">Payme ID</label>
            <input type="text" name="payme_id" value="NULL" required class="form-control">
            <label for="" class="my-2">Dars vaqti(minut)</label>
            <input type="number" name="lessen_time" required class="form-control">
            <label for="" class="my-2">O'qituvchiga to'lov(1-foiz, 2-qism tulov, 3-qism tulov + bonus)</label>
            <input type="number" name="paymart" required class="form-control">
            <label for="" class="my-2">.</label>
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