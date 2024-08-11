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
            <h5 class="card-title w-100 text-center">Dam olish kunlari</h5>
            <div class="table-responsive">
              <table class="table text-center table-bordered" style="font-size: 12px;">
                <thead>
                  <tr class="align-items-center">
                    <th>#</th>
                    <th>Dam olish kuni</th>
                    <th>Dam olish kuni haqida</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($DamOlish as $item)
                    <tr>
                      <td>{{ $loop->index+1 }}</td>
                      <td>{{ $item['data'] }}</td>
                      <td>{{ $item['description'] }}</td>
                      <td>
                        <form action="{{ route('admin.datadaysDelete') }}" method="post" class="p-0 m-0">
                          @csrf 
                          <input type="hidden" name="id" value="{{ $item['id'] }}">
                          <button type="submit" class="btn btn-danger p-1"><i class="bi bi-trash"></i></button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            
          </div>
        </div>
      </div>
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title w-100 text-center mb-0">Yangi dam olish kuni qo'shish</h5>
            <form action="{{ route('admin.datadaysCreate') }}" method="post">
              @csrf
              <label class="my-2">Dam olish kuni sanasi</label>
              <input type="date" name="data" class="form-control" name="password" required>
              <label class="my-2">Dam olish kuni haqida</label>
              <textarea name="description" required class="form-control"></textarea>
              <button class="btn btn-primary w-100 mt-2" type="submit">Parolni yangilash</button>
            </form>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title w-100 text-center mb-0">Yakshanba kunlarni qo'shish</h5>
            <form action="{{ route('admin.datadaysYearsCreate') }}" method="post">
              @csrf
              <label class="my-2">Yilni tanlang</label>
              <select name="years" class="form-select">
                <option value="">Tanlang</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
              </select>
              <button class="btn btn-primary w-100 mt-2" type="submit">Yakshanba kunlarni qo'shish</button>
            </form>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title w-100 text-center mb-0">O'tgan dam olish kunlarini o'chirish</h5>
            <form action="{{ route('admin.datadaysYearsDelete') }}" method="post">
              @csrf
              <button class="btn btn-primary w-100 mt-2" type="submit">Dam olish kunlarini arxivini o'chirish</button>
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