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
      <li class="breadcrumb-item active">Xona sozlamalari</li>
    </ol>
  </nav>
</div>

<section class="section dashboard">
  <div class="row mb-2">
    <div class="col-lg-3 mt-lg-0 mt-2">
      <a href="{{ route('meneger.rooms') }}" class="btn btn-primary w-100">Xonalar</a>
    </div>
    <div class="col-lg-3 mt-lg-0 mt-2">
      <a href="{{ route('meneger.paymart') }}" class="btn btn-secondary w-100">To'lovlar</a>
    </div>
    <div class="col-lg-3 mt-lg-0 mt-2">
      <a href="{{ route('meneger.cours') }}" class="btn btn-secondary w-100">Kurslar</a>
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
                @forelse($MarkazRoom as $item)
                <tr>
                  <td>{{ $loop->index+1 }}</td>
                  <td>{{ $item['room_name'] }}</td>
                  <td>{{ $item['created_at'] }}</td>
                  <td>
                    @if($item['status']=='true')
                    <span class="badge bg-primary">Aktiv</span>
                    @else
                    <span class="badge bg-danger">Yopiq</span>
                    @endif
                  </td>
                  <td>{{ $item['meneger'] }}</td>
                  <td>
                    @if($item['status']=='true')
                      <form action="{{ route('meneger.rooms_Block') }}" method="post">
                        @csrf 
                        <input type="hidden" name="room_id" value="{{ $item['id'] }}">
                        <button type="submit" class="btn btn-danger p-1" title="Bloklash"><i class="bi bi-lock"></i></button>
                      </form>
                    @else
                      <form action="{{ route('meneger.rooms_Block') }}" method="post">
                        @csrf 
                        <input type="hidden" name="room_id" value="{{ $item['id'] }}">
                        <button class="btn btn-success p-1" title="Akrivlashtirish"><i class="bi bi-unlock"></i></button>
                      </form>
                    @endif
                  </td>
                </tr>
                @empty
                  <tr>
                    <td colspan=6 class="text-center">Dars xonalari mavjud emas.</td>
                  </tr>
                @endforelse
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
          <form action="{{ route('meneger.rooms_create') }}" method="post">
            @csrf 
            <label for="">Yangi xona nomi</label>
            <input type="text" name="room_name" class="form-control my-2" required>
            <button type="submit" class="btn btn-primary w-100">Xonani saqlash</button>
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