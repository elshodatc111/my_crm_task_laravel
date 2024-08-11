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
      <a href="{{ route('admin.show',$id) }}" class="btn btn-secondary w-100">Markaz haqida</a>
    </div>
    <div class="col-6 col-lg-3 mt-1">
      <a href="{{ route('admin.show_setting',$id) }}" class="btn btn-primary w-100">Sozlamalar</a>
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
          <div class="card" style="min-height:400px">
            <div class="card-body mt-3">
              <form action="{{ route('admin.show_update',$id ) }}" method="post">
                @csrf 
                @method('put')
                <label for="">O'quv markaz</label>
                <input type="text" name="name" value="{{ $response['markaz']['name'] }}" required class="form-control">
                <label for="">Drektor</label>
                <input type="text" name="drektor" value="{{ $response['markaz']['drektor'] }}" required class="form-control">
                <label for="">Telefon raqam</label>
                <input type="text" name="phone" value="{{ $response['markaz']['phone'] }}" required class="form-control">
                <label for="">Manzil</label>
                <input type="text" name="addres" value="{{ $response['markaz']['addres'] }}" required class="form-control">
                <label for="">Payme ID</label>
                <input type="text" name="payme_id" value="{{ $response['markaz']['payme_id'] }}" required class="form-control">
                <label for="">Payme ID</label>
                <input type="text" name="lessen_time" value="{{ $response['markaz']['lessen_time'] }}" required class="form-control">
                <label for="">Payme ID</label>
                <input type="text" name="paymart" value="{{ $response['markaz']['paymart'] }}" required class="form-control">
                <button type="submit" class="btn btn-primary w-100 mt-2">O'zgarishlarni saqlash</button>
              </form>
              <div class="w-100 text-center mt-2">
                @if($response['markaz']['status']=='true')
                <form action="{{ route('admin.show_update_lock') }}" method="post" style="display: inline;">
                  @csrf
                  <input type="hidden" name="id" value="{{ $id }}">
                  <button class="btn btn-danger">Bloklash</button>
                </form>
                @else
                <form action="{{ route('admin.show_update_lock_block') }}" method="post" style="display: inline;">
                  @csrf
                  <input type="hidden" name="id" value="{{ $id }}">
                  <button class="btn btn-success">Aktivlashtirish</button>
                </form>
                @endif
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="card-title w-100 text-center">Xona Dars vaqtlari</div>
              <form action="{{ route('admin.generator') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $id }}">
                <button class="btn btn-primary w-100 my-2">Dars vaqtlarini generatsiya qilish</button>
              </form>
              <table class="table text-center table-bordered" style="font-size: 12px;">
                  <thead>
                    <tr class="align-items-center">
                      <th>#</th>
                      <th>Darslar</th>
                      <th>Dars vaqti</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($response['generatsiya'] as $item)
                    <tr>
                      <td>{{ $loop->index+1 }}</td>
                      <td>{{ $loop->index+1 }}-dars</td>
                      <td>{{ $item['time'] }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
          </div>
        </div>
        
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="card-title w-100 text-center">Xizmat ko'rsatish manzillari</div>
              <table class="table text-center table-bordered" style="font-size: 12px;">
                <thead>
                  <tr class="align-items-center">
                    <th>#</th>
                    <th>Manzil</th>
                    <th>Yaratildi</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($MarkazAddres as $item)
                  <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $item['addres'] }}</td>
                    <td>{{ $item['created_at'] }}</td>
                    <td>
                      <form action="{{ route('admin.manzilDelete') }}" method="post" class="m-0">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item['id'] }}">
                        <button type="submit" class="btn btn-danger p-1"><i class="bi bi-trash"></i></button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <hr>
              <form action="{{ route('admin.manzilCreate') }}" method="post">
                @csrf 
                <input type="hidden" name="markaz_id" value="{{ $id }}">
                <label class="w-100 text-center">Yangi xizmar ko'rsatish manzili</label>
                <input type="text" name="addres" required class="form-control mb-2">
                <button class="btn btn-primary w-100">Yangi manzilni saqlash</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="card-title w-100 text-center">SMM sozlamalari</div>
              <table class="table text-center table-bordered" style="font-size: 12px;">
                <thead>
                  <tr class="align-items-center">
                    <th>#</th>
                    <th>SMM</th>
                    <th>Yaratildi</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($MarkazSmm as $item)
                  <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $item['smm'] }}</td>
                    <td>{{ $item['created_at'] }}</td>
                    <td>
                      <form action="{{ route('admin.smmDelete') }}" method="post" class="m-0">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item['id'] }}">
                        <button type="submit" class="btn btn-danger p-1"><i class="bi bi-trash"></i></button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <hr>
              <form action="{{ route('admin.smmCreate') }}" method="post">
                @csrf 
                <input type="hidden" name="markaz_id" value="{{ $id }}">
                <label class="w-100 text-center">Yangi SMM</label>
                <input type="text" name="smm" required class="form-control mb-2">
                <button class="btn btn-primary w-100">Yangi SMMni saqlash</button>
              </form>
            </div>
          </div>
        </div>
        


        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="card-title w-100 text-center">Markaz kassa</div>
              <form action="{{ route('admin.kassaUpdate') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $id }}">
                <label for="" class="my-2">Kassa Naqt</label>
                <input type="number" name="kassa_naqt" required value="{{ $response['kassa']['kassa_naqt'] }}" class="form-control">
                <label for="" class="my-2">Kassa Naqt Chiqim Kutilmoqda</label>
                <input type="number" name="kassa_naqt_chiqim_pedding" required value="{{ $response['kassa']['kassa_naqt_chiqim_pedding'] }}" class="form-control">
                <label for="" class="my-2">Kassa Naqt Xarajat Kutilmoqda</label>
                <input type="number" name="kassa_naqt_xarajat_pedding" required value="{{ $response['kassa']['kassa_naqt_xarajat_pedding'] }}" class="form-control">
                <label for="" class="my-2">Kassa Naqt Ish Haqi Kutilmoqda</label>
                <input type="number" name="kassa_naqt_ish_haqi_pedding" required value="{{ $response['kassa']['kassa_naqt_ish_haqi_pedding'] }}" class="form-control">
                <label for="" class="my-2">Kassa Plastik</label>
                <input type="number" name="kassa_plastik" required value="{{ $response['kassa']['kassa_plastik'] }}" class="form-control">
                <label for="" class="my-2">Kassa Plastik Chiqim Kutilmoqda</label>
                <input type="number" name="kassa_plastik_chiqim_pedding" required value="{{ $response['kassa']['kassa_plastik_chiqim_pedding'] }}" class="form-control">
                <label for="" class="my-2">Kassa Plastik Xarajat Kutilmoqda</label>
                <input type="number" name="kassa_plastik_xarajat_pedding" required value="{{ $response['kassa']['kassa_plastik_xarajat_pedding'] }}" class="form-control">
                <label for="" class="my-2">Kassa Plastik Ish haqi Kutilmoqda</label>
                <input type="number" name="kassa_plastik_ish_haqi_pedding" required value="{{ $response['kassa']['kassa_plastik_ish_haqi_pedding'] }}" class="form-control">
                <button class="btn btn-primary w-100 my-2">O'zgarishlarni saqlash</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="card-title w-100 text-center">Markaz Balans</div>
              <form action="{{ route('admin.balansUpdate') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $id }}">
                <label for="" class="my-2">Balans Naqt</label>
                <input type="number" name="balans_naqt" required value="{{ $response['balans']['balans_naqt'] }}" class="form-control">
                <label for="" class="my-2">Balans Naqt Chiqim</label>
                <input type="number" name="balans_naqt_chiqim" required value="{{ $response['balans']['balans_naqt_chiqim'] }}" class="form-control">
                <label for="" class="my-2">Balans Naqt Xarajat</label>
                <input type="number" name="kassa_naqt_xarajat" required value="{{ $response['balans']['kassa_naqt_xarajat'] }}" class="form-control">
                <label for="" class="my-2">Balans Plastik</label>
                <input type="number" name="balans_plastik" required value="{{ $response['balans']['balans_plastik'] }}" class="form-control">
                <label for="" class="my-2">Balans Plastik Chiqim</label>
                <input type="number" name="balans_plastik_chiqim" required value="{{ $response['balans']['balans_plastik_chiqim'] }}" class="form-control">
                <label for="" class="my-2">Balans Plastik Xarajat</label>
                <input type="number" name="kassa_plastik_xarajat" required value="{{ $response['balans']['kassa_plastik_xarajat'] }}" class="form-control">
                <label for="" class="my-2">Balans Payme</label>
                <input type="number" name="balans_payme" required value="{{ $response['balans']['balans_payme'] }}" class="form-control">
                <label for="" class="my-2">Balans Payme Chiqim</label>
                <input type="number" name="balans_payme_chiqim" required value="{{ $response['balans']['balans_payme_chiqim'] }}" class="form-control">
                <button class="btn btn-primary w-100 my-2">O'zgarishlarni saqlash</button>
              </form>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="card-title w-100 text-center">Markaz drektor qo'shish</div>
              <form action="{{ route('admin.create_drektor') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $id }}">
                <label for="name" class="my-2">Drektor FIO</label>
                <input type="text" name="name" required  class="form-control">
                <label for="email" class="my-2">Drektor LOGIN</label>
                <input type="text" name="email" required  class="form-control">
                <label for="password" class="my-2">Drektor PAROL</label>
                <input type="password" name="password" required  class="form-control">
                <button class="btn btn-primary w-100 my-2">Yangi drektorni saqlash</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="card-title w-100 text-center">Markaz drektorlari</div>
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>FIO</th>
                    <th>Login</th>
                    <th>Holati</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($User as $item)
                  <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['email'] }}</td>
                    <td>{{ $item['status'] }}</td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan=4 class="text-center">Drektorlar mavjud emas.</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
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