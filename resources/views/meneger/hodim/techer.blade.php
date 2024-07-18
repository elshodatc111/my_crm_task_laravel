@extends('layouts.meneger_src')
@section('title', 'Kirish')
@section('content')
@extends('layouts.meneger_header')
@extends('layouts.meneger_menu')

<main id="main" class="main">

<div class="pagetitle">
  <h1>O'qituvchilar</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('meneger.home') }}">Bosh sahifa</a></li>
      <li class="breadcrumb-item active">O'qituvchilar</li>
    </ol>
  </nav>
</div>

<section class="section dashboard">
<div class="row mb-2">
    <div class="col-lg-3 mt-2 mt-lg-0">
      <a href="{{ route('meneger.hodim') }}" class="btn btn-secondary w-100">Hodimlar</a>
    </div>
    <div class="col-lg-3 mt-2 mt-lg-0">
      <a href="{{ route('meneger.hodim_create') }}" class="btn btn-secondary w-100">Yangi hodim</a>
    </div>
    <div class="col-lg-3 mt-2 mt-lg-0">
      <a href="{{ route('meneger.techer') }}" class="btn btn-primary w-100">O'qituvchilar</a>
    </div>
    <div class="col-lg-3 mt-2 mt-lg-0">
      <a href="{{ route('meneger.techer_create') }}" class="btn btn-secondary w-100">Yangi o'qituvchi</a>
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



  <div class="card">
    <div class="card-body">
      <h5 class="card-title w-100 text-center">O'qituvchilar</h5>
      <div class="table-responsive">
      <table class="table text-center table-bordered" style="font-size: 12px;">
          <thead>
            <tr class="align-items-center">
              <th>#</th>
              <th>Hodim</th>
              <th>Login</th>
              <th>Telefon</th>
              <th>Lavozim</th>
              <th>Faoliyati</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            @forelse($User as $item)
            <tr>
              <td>{{ $loop->index+1 }}</td>
              <td style="text-align:left;">
                <a href="{{ route('meneger.techer_show', $item['id']) }}"><b class="m-0 p-0">{{ $item['name'] }}</b></a>
              </td>
              <td style="text-align:left">{{ $item['email'] }}</td>
              <td>{{ $item['phone1'] }}</td>
              <td>
                O'qituvchi
              </td>
              <td>
                @if($item['status']=='true')
                <span class="bg-success p-1 text-white">Aktiv</span>
                @else
                <span class="bg-danger p-1 text-white">Bloklangan</span>
                @endif
              </td>
              <td>
                @if($item['status']=='true')
                  <form action="{{ route('meneger.hodim_unlock') }}" method="post" class="m-0">
                    @csrf 
                    <input type="hidden" name="id" value="{{$item['id']}}">
                    <button type="submit" class="btn btn-danger p-1 m-0" title="Bloklash"><i class="bi bi-lock"></i></button>
                  </form>
                @else
                  <form action="{{ route('meneger.hodim_unlock') }}" method="post" class="m-0">
                    @csrf 
                    <input type="hidden" name="id" value="{{$item['id']}}">
                    <button type="submit" class="btn btn-danger p-1 m-0" title="Aktivlashtirish"><i class="bi bi-unlock"></i></button>
                  </form>
                @endif
              </td>
            </tr>
            @empty
              <tr>
                <td class="text-center">Hodimlar vajud emas</td>
              </tr>
            @endforelse
          </tbody>
        </table>
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