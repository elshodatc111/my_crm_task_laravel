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
      <li class="breadcrumb-item"><a href="{{ route('meneger.cours') }}">Kurs sozlamalari</a></li>
      <li class="breadcrumb-item active">Kurs</li>
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

    <div class="col-lg-8">
      <div class="card" style="min-height:210px;">
        <div class="card-body">
          <h5 class="card-title w-100 text-center">Kurs uchun testlar </h5>
          <div class="table-responsive">
            <table class="table text-center table-bordered" style="font-size: 12px;">
              <thead>
                <tr class="align-items-center">
                  <th>#</th>
                  <th>Test savol</th>
                  <th>To'g'ri javon</th>
                  <th>Noto'g'ri javob</th>
                  <th>Noto'g'ri javob</th>
                  <th>Noto'g'ri javob</th>
                  <th>Meneger</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
              @forelse($MarkazCoursTest as $item)
                <tr>
                  <td>{{ $loop->index+1 }}</td>
                  <td>{{ $item['test_savol'] }}</td>
                  <td>{{ $item['test_javob_true'] }}</td>
                  <td>{{ $item['test_javon_false1'] }}</td>
                  <td>{{ $item['test_javon_false2'] }}</td>
                  <td>{{ $item['test_javon_false3'] }}</td>
                  <td>{{ $item['meneger'] }}</td>
                  <td>
                    <form action="{{ route('meneger.cours_create_test_delete') }}" method="post">
                      @csrf 
                      <input type="hidden" name="id" value="{{ $item['id'] }}">
                      <button class="btn btn-danger p-1"><i class="bi bi-trash" type="submit"></i></button>
                    </form>
                  </td>
                </tr>
                @empty
                <tr>
                  <td class="text-center" colspan=8>Testlar mavjud emas</td>
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
          <h5 class="card-title w-100 text-center">Yangi test savolini qo'shish</h5>
          <form action="{{ route('meneger.cours_create_test') }}" method="post">
            @csrf
            <input type="hidden" name="cours_id" value="{{ $id }}">
            <label for="">Test savoli</label>
            <input type="text" name="test_savol" class="form-control my-2" required>
            <label for="">To'g'ri javob</label>
            <input type="text" name="test_javob_true" class="form-control my-2" required>
            <label for="">Noto'g'ri javob</label>
            <input type="text" name="test_javon_false1" class="form-control my-2" required>
            <label for="">Noto'g'ri javob</label>
            <input type="text" name="test_javon_false2" class="form-control my-2" required>
            <label for="">Noto'g'ri javob</label>
            <input type="text" name="test_javon_false3" class="form-control my-2" required>
            <button type="submit" class="btn btn-primary w-100">Darsni saqlash</button>
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