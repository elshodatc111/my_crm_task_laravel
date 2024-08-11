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
      <li class="breadcrumb-item"><a href="{{ route('meneger.home') }}">Bosh sahifa</a></li>
      <li class="breadcrumb-item active">Kurs sozlamalari</li>
    </ol>
  </nav>
</div>

<section class="section dashboard">
  <div class="row mb-2">
    <div class="col-lg-3 mt-lg-0 mt-2">
      <a href="{{ route('meneger.rooms') }}" class="btn btn-secondary w-100">Xonalar</a>
    </div>
    <div class="col-lg-3 mt-lg-0 mt-2">
      <a href="{{ route('meneger.paymart') }}" class="btn btn-secondary w-100">To'lovlar</a>
    </div>
    <div class="col-lg-3 mt-lg-0 mt-2">
      <a href="{{ route('meneger.cours') }}" class="btn btn-primary w-100">Kurslar</a>
    </div>
    <div class="col-lg-3 mt-lg-0 mt-2">
      <a href="{{ route('meneger.message') }}" class="btn btn-secondary w-100">SMS</a>
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
        <div class="col-lg-8">
          <div class="card" style="min-height:210px;">
            <div class="card-body">
              <h5 class="card-title w-100 text-center">Kurslar </h5>
              <div class="table-responsive">
                <table class="table text-center table-bordered" style="font-size: 12px;">
                  <thead>
                    <tr class="align-items-center">
                      <th>#</th>
                      <th>Kursning nomi</th>
                      <th>Testlar soni</th>
                      <th>Meneger</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($respons as $item)
                    <tr>
                      <td>{{ $loop->index+1 }}</td>
                      <td>{{ $item['cours_name'] }}</td>
                      <td>{{ $item['count'] }}</td>
                      <td>{{ $item['meneger'] }}</td>
                      <td>
                        <a href="{{ route('meneger.cours_show',$item['id']) }}" class="btn btn-primary p-1"><i class="bi bi-eye"></i></a>
                        <form action="{{ route('meneger.cours_delete') }}" method="post" style="display: inline;">
                          @csrf 
                          <input type="hidden" name="cours_id" value="{{ $item['id'] }}">
                          <button class="btn btn-danger p-1"><i class="bi bi-trash"></i></button>
                        </form>
                      </td>
                    </tr>
                    @empty
                      <tr>
                        <td class="text-center" colspan=6>Kurslar mavjud emas</td>
                      </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card" style="min-height:210px;">
            <div class="card-body">
              <h5 class="card-title w-100 text-center">Yangi kurs qo'shish</h5>
              <form action="{{ route('meneger.cours_create') }}" method="post">
                @csrf
                <label for="">Yangi kursning nomi</label>
                <input type="text" name="cours_name" class="form-control my-2" required>
                <button type="submit" class="btn btn-primary w-100">Kursni saqlash</button>
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