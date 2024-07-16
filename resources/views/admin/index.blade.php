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
        <li class="breadcrumb-item active">O'quv markazlar</li>
      </ol>
    </nav>
  </div>

  <section class="section dashboard">



    <div class="row mb-2">
      <div class="col-6">
        <a href="{{ route('admin.index') }}" class="btn btn-primary w-100">O'quv markazlar</a>
      </div>
      <div class="col-6">
        <a href="{{ route('admin.create') }}" class="btn btn-secondary w-100">Yangi o'quv markaz</a>
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
        <h5 class="card-title w-100 text-center">O'quv markazlar</h5>
        <div class="table-responsive">
          <table class="table text-center table-bordered" style="font-size: 12px;">
            <thead>
              <tr class="align-items-center">
                <th>#</th>
                <th>O'quv markaz</th>
                <th>Drektor</th>
                <th>Address</th>
                <th>Telefon raqam</th>
                <th>Status</th>
                <th>Ro'yhatdan o'tdi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($Markaz as $item)
              <tr>
                <td>{{ $loop->index+1 }}</td>
                <td style="text-align:left;">
                  <a href="{{ route('admin.show',$item['id'] ) }}"><b>{{ $item['name'] }}</b></a>
                </td>
                <td>{{ $item['drektor'] }}</td>
                <td>{{ $item['addres'] }}</td>
                <td>{{ $item['phone'] }}</td>
                <td>
                  @if($item['status']=='true')
                    <span class="badge bg-success">Activ</span>
                  @else 
                    <span class="badge bg-danger">Bloklangan</span>
                  @endif
                </td>
                <td>{{ $item['created_at'] }}</td>
              </tr>
              @endforeach
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