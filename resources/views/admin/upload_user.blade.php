@extends('layouts.meneger_src')
@section('content')
@extends('layouts.admin_header')
@extends('layouts.admin_menu')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Upload User</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Bosh sahifa</a></li>
        <li class="breadcrumb-item active">Upload User</li>
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
        {{Session::get('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <div class="row">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-body">
            <h2 class="w-100 text-center card-title">Upload Users</h2>
            <form action="{{ route('admin.upload_users_post') }}" method="post" class="p-0 m-0" enctype="multipart/form-data">@csrf 
              <div class="row">
                <div class="col-lg-4 mt-lg-2 mt-0">
                  <select name="markaz_id" required class="form-select">
                    <option value="1">Markazni tanlang</option>
                  </select>
                </div>
                <div class="col-lg-4 mt-lg-2 mt-0">
                  <input type="file" name="file" required class="form-control">
                </div>
                <div class="col-lg-4 mt-lg-2 mt-0">
                  <button type="submit" class="w-100 btn btn-primary">Faylni yuklash</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body text-center">
            <h2 class="w-100 text-center card-title">Shablon fayl</h2>
            <button class="btn btn-primary">Shablonni yuklash</button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-body">
        <h5 class="card-title w-100 text-center">Yuklangan vayllar tarixi</h5>
        <div class="table-responsive">
          <table class="table text-center table-bordered" style="font-size: 12px;">
            <thead>
              <tr class="align-items-center">
                <th>#</th>
                <th>Markaz</th>
                <th>Jami yuklanganlar</th>
                <th>Yuklandi</th>
                <th>Xatolik</th>
                <th>Yuklangan vaqt</th>
                <th>Administrator</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              @forelse($flies as $item)
                @if($item['status']=='false')
                  <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $item['markaz'] }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{ $item['created_at'] }}</td>
                    <td>{{ $item['meneger'] }}</td>
                    <td>
                      <form action="{{ route('admin.upload_Play_post') }}" method="post" class="m-0 p-0">
                        @csrf 
                        <input type="hidden" name="file_id" value="{{ $item['id'] }}">
                        <button class="btn btn-primary p-0"><i class="bi bi-play-fill"></i></button>
                      </form>
                    </td>
                  </tr>
                @else 

                @endif 
              @empty
                <tr>
                  <td colspan=8 class="text-center">Yuklangan fayllar mavjud emas.</td>
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