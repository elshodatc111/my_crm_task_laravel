@extends('layouts.meneger_src')
@section('title', 'Kirish')
@section('content')
@extends('layouts.meneger_header')
@extends('layouts.meneger_menu')
  
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tug'ilgan kunlar</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('meneger.all_tashrif') }}">Bosh sahifa</a></li>
          <li class="breadcrumb-item active">Tug'ilgan kunlar</li>
        </ol>
      </nav>
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
    <section class="section dashboard"> 
        <div class="card">
            <div class="card-body">
                <h5 class="card-title w-100 text-center">Tug'ilgan kunlar</h5>
                <div class="table-responsive">
                    <table class="table text-center table-bordered" style="font-size: 12px;">
                        <thead>
                            <tr class="align-items-center">
                                <th>#</th>
                                <th>FIO</th>
                                <th>Telefon raqam</th>
                                <th>Yashash manzili</th>
                                <th>Tug'ilgan kuni</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($User as $item)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td><a href="{{ route('meneger.all_show',$item['id']) }}">{{ $item['name'] }}</a></td>
                                <td>{{ $item['phone1'] }}</td>
                                <td>{{ $item['addres'] }}</td>
                                <td>{{ $item['tkun'] }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center" colspan=5>Bugun tug'ilgan kunlar mavjud emas.</td>
                            </tr>
                            @endforelse
                        <tbody>
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