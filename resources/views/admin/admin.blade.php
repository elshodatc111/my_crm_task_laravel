@extends('layouts.meneger_src')
@section('content')
@extends('layouts.admin_header')
@extends('layouts.admin_menu')

  
<main id="main" class="main">

<div class="pagetitle">
  <h1>Adminstrator</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Bosh sahifa</a></li>
      <li class="breadcrumb-item active">Administratorlar</li>
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
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle me-1"></i>
        {{Session::get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


<div class="card">
    <div class="card-body">
      <h5 class="card-title w-100 text-center">Administratrorlar</h5>
        <div class="table-responsive">
          <table class="table text-center table-bordered" style="font-size: 12px;">
            <thead>
              <tr class="align-items-center">
                <th>#</th>
                <th>FIO</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Login</th>
                <th>Status</th>
                <th>Status</th>
                <th>Ro'yhatdan o'tdi</th>
              </tr>
            </thead>
            <tbody>
                @foreach($User as $item)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['phone1'] }}</td>
                        <td>{{ $item['addres'] }}</td>
                        <td>{{ $item['email'] }}</td>
                        <td>{{ $item['status'] }}</td>
                        <td>{{ $item['created_at'] }}</td>
                        <td>
                            @if($item['status']=='true')
                            <form action="{{ route('admin.adminPersonBlocks') }}" method="post" class="m-0 p-0">
                                @csrf 
                                <input type="hidden" name="id" value="{{ $item['id'] }}">
                                <button trpe="submit" class="btn btn-danger p-1" title="Bloklash"><i class="bi bi-check"></i></button>
                            </form>
                            @else
                            <form action="{{ route('admin.adminPersonOpen') }}" method="post" class="m-0 p-0">
                                @csrf 
                                <input type="hidden" name="id" value="{{ $item['id'] }}">
                                <button trpe="submit" class="btn btn-success p-1" title="Aktivlashtirish"><i class="bi bi-x"></i></button>
                            </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
        <h5 class="card-title w-100 text-center">Yangi Administratrorlar</h5>
        <form action="{{ route('admin.adminPersonCreate') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <label class="my-2">FIO</label>
                    <input type="text" name="name" required class="form-control">
                    <label class="my-2">Telefon raqam</label>
                    <input type="text" name="phone1" required class="form-control">
                </div>
                <div class="col-lg-6">
                    <label class="my-2">Address</label>
                    <input type="text" name="addres" required class="form-control">
                    <label class="my-2">Login</label>
                    <input type="text" name="email" required class="form-control">
                </div>
                <div class="col-12 text-center">
                    <button class="btn btn-primary w-50 mt-3">Saqlash</button>
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