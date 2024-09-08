@extends('layouts.meneger_src')
@section('title', 'Kirish')
@section('content')
@extends('layouts.meneger_header')
@extends('layouts.meneger_menu')

<main id="main" class="main">

<div class="pagetitle">
  <h1>O'qituvchi</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('meneger.home') }}">Bosh sahifa</a></li>
      <li class="breadcrumb-item"><a href="{{ route('meneger.techer') }}">O'qituvchlar</a></li>
      <li class="breadcrumb-item active">O'qituvchi</li>
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
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <i class="bi bi-check-circle me-1"></i>
      {{Session::get('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <div class="row">
    <div class="col-lg-8">      
      <div class="card" style="min-height: 300px;">
        <div class="card-body">
          <h5 class="card-title w-100 text-center">{{ $User['name'] }}</h5>
          <div class="row">
            <div class="col-6  mt-1"><b>Telefon raqam:</b></div>
            <div class="col-6" style="text-align:right;">{{ $User['phone1'] }}</div>
            <div class="col-6  mt-1"><b>Telefon raqam:</b></div>
            <div class="col-6" style="text-align:right;">{{ $User['phone2'] }}</div>
            <div class="col-6  mt-1"><b>Manzil:</b></div>
            <div class="col-6" style="text-align:right;">{{ $User['addres'] }}</div>
            <div class="col-6  mt-1"><b>Tug'ilgan kun:</b></div>
            <div class="col-6" style="text-align:right;">{{ $User['tkun'] }}</div>
            <div class="col-6  mt-1"><b>Login:</b></div>
            <div class="col-6" style="text-align:right;">{{ $User['email'] }}</div>
            <div class="col-6  mt-1"><b>Ishga olindi:</b></div>
            <div class="col-6" style="text-align:right;">{{ $User['created_at'] }}</div>
            <div class="col-6  mt-1"><b>O'qituvchi haqida:</b></div>
            <div class="col-6" style="text-align:right;">{{ $User['about'] }}</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">      
      <div class="card" style="min-height: 300px;">
        <div class="card-body">
          <button class="btn btn-outline-primary w-100 mt-3" data-bs-toggle="modal" data-bs-target="#updatePassword">Parolni yangilash</button>
          <button class="btn btn-outline-primary w-100 mt-2" data-bs-toggle="modal" data-bs-target="#updateUser">Taxrirlash</button>
          <button class="btn btn-outline-primary w-100 mt-2" data-bs-toggle="modal" data-bs-target="#hodimPay">Ish haqi to'lash</button>
        </div>
      </div>
    </div>
  </div>
  <!--Hodimni parolini yangilash-->
  <div class="modal fade" id="updatePassword" tabindex="-1">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title w-100 text-center">Parolni yangilash</h5>
        </div>
        <div class="modal-body">
          <form action="{{ route('meneger.techer_update_password') }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $User->id }}">
            <div class="row">
              <div class="col-6">
                <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Bekor qilish</button>
              </div>
              <div class="col-6">
                <button type="submit" class="btn btn-primary w-100">Yangilash</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--Taxrirlash-->
  <div class="modal fade" id="updateUser" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title w-100 text-center">O'qituvchi ma`lumotlarini yangilash</h5>
        </div>
        <div class="modal-body">
          <form action="{{ route('meneger.techer_update_store') }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $User->id }}">
            <label for="" class="mb-2">FIO</label>
            <input type="text" name="name" value="{{ $User->name }}" required class="form-control">
            <label for="" class="my-2">Yashash manzili</label>
            <select name="addres" required class="form-select">
              <option value="">Tanlang</option>
              @foreach($MarkazAddres as $item)
                <option value="{{ $item['addres'] }}">{{ $item['addres'] }}</option>
              @endforeach
            </select>
            <label for="" class="my-2">Tug'ilgan kuni</label>
            <input type="date" name="tkun" value="{{ $User['tkun'] }}" required class="form-control">
            <label for="" class="my-2">Telefon raqam</label>
            <input type="text" name="phone1" value="{{ $User['phone1'] }}" required class="form-control phone">
            <label for="" class="my-2">Qo'shimcha telefin raqam</label>
            <input type="text" name="phone2" value="{{ $User['phone2'] }}" required class="form-control phone">
            <label for="" class="my-2">O'qituvchi haqida</label>
            <textarea required class="form-control mb-2" name="about">{{ $User['about'] }}</textarea>
            <div class="row">
              <div class="col-6">
                <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Bekor qilish</button>
              </div>
              <div class="col-6">
                <button type="submit" class="btn btn-primary w-100">Yangilash</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--Ish haqi to'lsh-->
  <div class="modal fade" id="hodimPay" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title w-100 text-center">O'qituvchi ish haqi to'lash</h5>
        </div>
        <div class="modal-body">
          <div class="row text-center">
            <div class="col-12">
              <b>Kassada mavjud</b>
            </div>
            <div class="col-6">
              <b>Naqt: </b>{{ number_format($Kassa['kassa_naqt_ish_haqi_pedding'], 0, '.', ' ') }}
            </div>
            <div class="col-6">
              <b>Naqt: </b>{{ number_format($Kassa['kassa_plastik_ish_haqi_pedding'], 0, '.', ' ') }}
            </div>
          </div>
          <form action="{{ route('meneger.techer_paymart') }}" method="post">
            @csrf 
            <input type="hidden" name="user_id" value="{{ $User['id'] }}">
            <input type="hidden" name="Naqt" value="{{ $Kassa['kassa_naqt_ish_haqi_pedding'] }}">
            <input type="hidden" name="Plastik" value="{{ $Kassa['kassa_plastik_ish_haqi_pedding'] }}">
            <label for="summa" class="my-2">Ish haqi so'mmasi</label>
            <input type="text" name="summa" required class="form-control amount">
            <label for="type" class="my-2">To'lov turi</label>
            <select name="type" required class="form-select">
              <option value="">Tanlang</option>
              <option value="Naqt">Naqt</option>
              <option value="Plastik">Plastik</option>
            </select>
            <label for="" class="my-2">Guruhni tanlang</label>
            <select name="guruh_id" required class="form-select">
              <option value="">Tanlang</option>
              @foreach($TecherGrops as $item)
                <option value="{{ $item['guruh_id'] }}" title="Hisoblandi: {{ number_format($item['techer_hisob'], 0, '.', ' ') }}, To'landi: {{ number_format($item['techer_tulandi'], 0, '.', ' ') }}, Qoldiq: {{ number_format($item['qoldiq'], 0, '.', ' ') }}">{{ $item['guruh_name'] }}</option>
              @endforeach
            </select>
            <label for="comment" class="my-2">To'lov haqida</label>
            <textarea type="text" name="comment" required class="form-control mb-2"></textarea>
            <div class="row">
              <div class="col-6">
                <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Bekor qilish</button>
              </div>
              <div class="col-6">
                <button type="submit" class="btn btn-primary w-100">To'lov</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title w-100 text-center">O'qituvchi guruhlari (Guruh yakunlangandan so'ng 45 kundan so'ng o'chiriladi.)</h5>
      <div class="table-responsive">
        <table class="table text-center table-bordered" style="font-size: 12px;">
          <thead>
            <tr class="align-items-center">
              <th>#</th>
              <th>Guruh</th>
              <th>Guruh holati</th>
              <th>Guruh talabalari</th>
              <th>Bonus talabalar</th>
              <th>Davomat</th>
              <th>Guruhga to'lovlar</th>
              <th>Hisoblandi</th>
              <th>To'langan</th>
              <th>Qoldiq</th>
            </tr>
          </thead>
          <tbody>
            @forelse($TecherGrops as $item)
            <tr>
              <td>{{ $loop->index+1 }}</td>
              <td><a href="{{ route('meneger_groups_show', $item['guruh_id']) }}">{{ $item['guruh_name'] }}</a></td>
              <td>{{ $item['guruh_status'] }}</td>
              <td>{{ $item['user_groups'] }}</td>
              <td>{{ $item['user_bonus'] }}</td>
              <td>{{ $item['user_davomat'] }}</td>
              <td>{{ number_format($item['user_paymart'], 0, '.', ' ') }}</td>
              <td>{{ number_format($item['techer_hisob'], 0, '.', ' ') }}</td>
              <td>{{ number_format($item['techer_tulandi'], 0, '.', ' ') }}</td>
              <td>{{ number_format($item['qoldiq'], 0, '.', ' ') }}</td>
            </tr>
            @empty
              <tr>
                <td colspan=10 class="text-center">O'qituvchi guruhlari mavjud emas.</td>
              </tr>
            @endforelse
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title w-100 text-center">To'langan ish haqlari(oxirgi 45 kun)</h5>
      <div class="table-responsive">
        <table class="table text-center table-bordered" style="font-size: 12px;">
          <thead>
            <tr class="align-items-center">
              <th>#</th>
              <th>Guruh</th>
              <th>To'lov Summasi</th>
              <th>To'lov turi</th>
              <th>To'lov haqida</th>
              <th>To'lov vaqti</th>
              <th>Meneger</th>
            </tr>
          </thead>
          <tbody>
            @forelse($MarkazIshHaqi as $item)
            <tr>
              <td>{{ $loop->index+1 }}</td>
              <td><a href="{{ route('meneger_groups_show', $item['guruh']) }}">{{ $item['guruh_name'] }}</a></td>
              <td>{{ number_format($item['summa'], 0, '.', ' ') }}</td>
              <td>{{ $item['type'] }}</td>
              <td>{{ $item['comment'] }}</td>
              <td>{{ $item['created_at'] }}</td>
              <td>{{ $item['meneger'] }}</td>
            </tr>
            @empty
              <tr>
                <td colspan=7 class="text-center">O'qituvchi uchun to'langan ish haqi mavjud emas.</td>
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