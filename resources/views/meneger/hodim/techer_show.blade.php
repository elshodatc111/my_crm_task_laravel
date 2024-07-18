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
      <li class="breadcrumb-item"><a href="{{ route('meneger.hodim') }}">O'qituvchlar</a></li>
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
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <i class="bi bi-check-circle me-1"></i>
      {{Session::get('success') }}
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
          <form action="" method="post">
            <label for="" class="mb-2">FIO</label>
            <input type="text" required class="form-control">
            <label for="" class="my-2">Yashash manzili</label>
            <select name="" id="" required class="form-select">
              <option value="">Tanlang</option>
            </select>
            <label for="" class="my-2">Tug'ilgan kuni</label>
            <input type="text" required class="form-control">
            <label for="" class="my-2">Telefon raqam</label>
            <input type="text" required class="form-control">
            <label for="" class="my-2">Qo'shimcha telefin raqam</label>
            <input type="text" required class="form-control">
            <label for="" class="my-2">Lavozimi</label>
            <select name="" id="" required class="form-select">
              <option value="">Tanlang</option>
            </select>
            <label for="" class="my-2">Talaba haqida</label>
            <textarea required class="form-control mb-2"></textarea>
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
              <b>Naqt: </b>150 000
            </div>
            <div class="col-6">
              <b>Naqt: </b>150 000
            </div>
          </div>
          <form action="" method="post">
            <label for="" class="my-2">Ish haqi so'mmasi</label>
            <input type="text" required class="form-control">
            <label for="" class="my-2">To'lov turi</label>
            <select name="" id="" required class="form-select">
              <option value="">Tanlang</option>
            </select>
            <label for="" class="my-2">Guruhni tanlang</label>
            <select name="" id="" required class="form-select">
              <option value="">Tanlang</option>
            </select>
            <label for="" class="my-2">To'lov haqida</label>
            <input type="text" required class="form-control mb-2">
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
      <h5 class="card-title w-100 text-center">O'qituvchi guruhlari</h5>
      <div class="table-responsive">
        <table class="table text-center table-bordered" style="font-size: 12px;">
          <thead>
            <tr class="align-items-center">
              <th>#</th>
              <th>Guruh</th>
              <th>Guruh holari</th>
              <th>Talabalar</th>
              <th>Bonus</th>
              <th>Davomat</th>
              <th>Guruhga to'lovlar</th>
              <th>Ish haqi (%)</th>
              <th>Ish haqi (Bonus)</th>
              <th>To'langan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Guruh nomi</td>
              <td>Aktiv</td>
              <td>10</td>
              <td>3</td>
              <td>10</td>
              <td>160 000</td>
              <td>16 000</td>
              <td>15 000</td>
              <td>0</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Guruh nomi</td>
              <td>Yangi</td>
              <td>10</td>
              <td>3</td>
              <td>10</td>
              <td>160 000</td>
              <td>16 000</td>
              <td>15 000</td>
              <td>0</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Guruh nomi</td>
              <td>Yakunlangan</td>
              <td>10</td>
              <td>3</td>
              <td>10</td>
              <td>160 000</td>
              <td>16 000</td>
              <td>15 000</td>
              <td>0</td>
            </tr>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title w-100 text-center">To'langan ish haqlari</h5>
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
            <tr>
              <td>1</td>
              <td>25 000</td>
              <td>Naqt</td>
              <td>Naqt</td>
              <td>Yanvar oyi uchun</td>
              <td>2024.02.01 09:15:25</td>
              <td>elshodatc1116</td>
            </tr>
            <tr>
              <td>2</td>
              <td>25 000</td>
              <td>Naqt</td>
              <td>Naqt</td>
              <td>Yanvar oyi uchun</td>
              <td>2024.02.01 09:15:25</td>
              <td>elshodatc1116</td>
            </tr>
            <tr>
              <td>3</td>
              <td>25 000</td>
              <td>Naqt</td>
              <td>Naqt</td>
              <td>Yanvar oyi uchun</td>
              <td>2024.02.01 09:15:25</td>
              <td>elshodatc1116</td>
            </tr>
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