@extends('layouts.meneger_src')
@section('content')
@extends('layouts.admin_header')
@extends('layouts.admin_menu')

  
  
<main id="main" class="main">

<div class="pagetitle">
  <h1>Tashriflar</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Bosh sahifa</a></li>
      <li class="breadcrumb-item active">Tashriflar</li>
    </ol>
  </nav>
</div>

<section class="section dashboard">



  <div class="row mb-2">
    <div class="col-6 col-lg-3 mt-1">
      <a href="{{ route('admin.show',$id) }}" class="btn btn-primary w-100">Markaz haqida</a>
    </div>
    <div class="col-6 col-lg-3 mt-1">
      <a href="{{ route('admin.show_setting',$id) }}" class="btn btn-secondary w-100">Sozlamalar</a>
    </div>
    <div class="col-6 col-lg-3 mt-1">
      <a href="{{ route('admin.show_sms',$id) }}" class="btn btn-secondary w-100">SMS sozlamalari</a>
    </div>
    <div class="col-6 col-lg-3 mt-1">
      <a href="{{ route('admin.show_statistik',$id) }}" class="btn btn-secondary w-100">Statistika</a>
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
    <div class="col-lg-6">
      <div class="card" style="min-height:300px">
        <div class="card-body text-center">
          <h5 class="card-title w-100 text-center">Markaz logatifi</h5>
          <img src="{{ env('MARKAZLOGOLINK') }}/{{ $response['markaz']['image'] }}" style="width:100%">
          <form action="{{ route('admin.updatelogo') }}" method="post" enctype="multipart/form-data">
            @csrf 
            <input type="hidden" name="markaz_id" value="{{ $id }}">
            <label for="">Logatifni yangilash</label>
            <input type="file" required name="logotip" class="form-control">
            <button type="submit" class="btn btn-primary w-100 mt-2">Yangilash</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card" style="min-height:300px">
        <div class="card-body">
          <h5 class="card-title w-100 text-center">{{ $response['markaz']['name'] }}</h5>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Drektor
              <span class="badge bg-primary rounded-pill">{{ $response['markaz']['drektor'] }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Manzil
              <span class="badge bg-primary rounded-pill">{{ $response['markaz']['phone'] }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Telefon raqam
              <span class="badge bg-primary rounded-pill">{{ $response['markaz']['addres'] }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Payme id
              <span class="badge bg-primary rounded-pill">{{ $response['markaz']['payme_id'] }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Oqituvchiga to'lov
              <span class="badge bg-primary rounded-pill">
                @if($response['markaz']['paymart']==1)
                  Foizlar
                @elseif($response['markaz']['paymart']==2)
                  Har bir talaba uchun ajratiladi
                @else
                  Har bir talaba uchun ajratiladi + bonys
                @endif
              </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Status
              @if($response['markaz']['status']=='true')
              <span class="badge bg-primary rounded-pill">Aktiv</span>
              @else
              <span class="badge bg-danger rounded-pill">Bloklandi</span>
              @endif
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Dars vaqti
              <span class="badge bg-primary rounded-pill">{{ $response['markaz']['lessen_time'] }} minut</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title w-100 text-center">Ogoxlantirish xatini yuborish</h2>
          <form action="{{ route('admin.postogoh') }}" method="post">
            @csrf 
            <input type="hidden" name="markaz_id" value="{{ $id }}">
            <div class="row">
              <div class="col-lg-2 col-4 mt-1">
                <label for="">Sanasi</label>
                <input type="date" name="data" required class="form-control">
              </div>
              <div class="col-lg-8 col-4 mt-1">
                <label for="">Xabar matni</label>
                <input type="text" name="description" required class="form-control">
              </div>
              <div class="col-lg-2 col-4 mt-1">
                <label for="">.</label>
                <button class="btn btn-primary w-100">Saqlash</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title w-100 text-center">Yuborilgan ogoxlantirish xatlari</h5>
          <div class="table-responsive">
            <table class="table text-center table-bordered" style="font-size: 12px;">
              <thead>
                <tr class="align-items-center">
                  <th>#</th>
                  <th>Data</th>
                  <th>Xabar matni</th>
                  <th>Meneger</th>
                  <th>Xabar xolati</th>
                  <th>Saqlandi</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach($response['markazOgoh'] as $item)
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{ $item['data'] }}</td>
                  <td>{{ $item['description'] }}</td>
                  <td>{{ $item['meneger'] }}</td>
                  <td>{{ $item['status'] }}</td>
                  <td>{{ $item['created_at'] }}</td>
                  <td>
                    @if($item['status']=='true')
                    <form action="{{ route('admin.postogohdelete', $item['id'] ) }}" method="POST">
                      @csrf 
                      @method('delete')
                      <button type="submit" class="btn btn-danger p-0 px-1"><i class="bi bi-trash"></i></button>
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