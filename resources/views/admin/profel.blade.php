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
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title w-100 text-center">{{ auth()->user()->name }}</h5>
            <div class="table-responsive">
              <table class="table text-center table-bordered" style="font-size: 12px;">
                <thead>
                  <tr class="align-items-center">
                    <th>Telefon raqam</th>
                    <th>Yashash manzil</th>
                    <th>Login</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{ auth()->user()->phone1 }}</td>
                    <td>{{ auth()->user()->addres }}</td>
                    <td>{{ auth()->user()->email }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title w-100 text-center mb-0">Parolni yangilash</h5>
            <form action="{{ route('admin.adminProfelUpdate') }}" method="post">
              @csrf
              <input type="password" class="form-control" name="password" required placeholder="Yangi parol">
              <button class="btn btn-primary w-100 mt-1" type="submit">Parolni yangilash</button>
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