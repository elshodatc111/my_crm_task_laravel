@extends('layouts.meneger_src')
@section('title', 'Kirish')
@section('content')
@extends('layouts.meneger_header')
@extends('layouts.meneger_menu')


  
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tashriflar</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('meneger.all_tashrif') }}">Bosh sahifa</a></li>
          <li class="breadcrumb-item"><a href="{{ route('meneger.all_tashrif') }}">Tashriflar</a></li>
          <li class="breadcrumb-item active">Tashrif</li>
        </ol>
      </nav>
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
      <div class="card" style="min-height: 280px;">
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
            <div class="col-6  mt-1"><b>Biz haqimizda:</b></div>
            <div class="col-6" style="text-align:right;">{{ $User['smm'] }}</div>
            <div class="col-6  mt-1"><b>Talaba haqida:</b></div>
            <div class="col-6" style="text-align:right;">{{ $User['about'] }}</div>
            <div class="col-6  mt-1"><b>Talaba login:</b></div>
            <div class="col-6" style="text-align:right;">{{ $User['email'] }}</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">      
      <div class="card" style="min-height: 280px;">
        <div class="card-body">
          <h5 class="card-title w-100 text-center" @if($User['balans']>0) style="color:green;" @elseif($User['balans']<0) style='color:red' @endif >Balans: {{ number_format($User['balans'], 0, '.', ' ') }} so'm</h5>
          <div class="row">
            <div class="col-6  mt-1"><b>Naqt to'lovlar:</b></div>
            <div class="col-6" style="text-align:right;">{{ number_format($UserBalans['naqt'], 0, '.', ' ') }} so'm</div>
            <div class="col-6  mt-1"><b>Plastik to'lovlar:</b></div>
            <div class="col-6" style="text-align:right;">{{ number_format($UserBalans['plastik'], 0, '.', ' ') }} so'm</div>
            <div class="col-6  mt-1"><b>Payme orqali to'lov:</b></div>
            <div class="col-6" style="text-align:right;">{{ number_format($UserBalans['payme'], 0, '.', ' ') }} so'm</div>
            <div class="col-6  mt-1"><b>Qaytarilgan:</b></div>
            <div class="col-6" style="text-align:right;">{{ number_format($UserBalans['qaytarildi'], 0, '.', ' ') }} so'm</div>
            <div class="col-6  mt-1"><b>Chegirmalar:</b></div>
            <div class="col-6" style="text-align:right;">{{ number_format($UserBalans['chegirma'], 0, '.', ' ') }} so'm</div>
            <div class="col-6  mt-1"><b>Jarimalar:</b></div>
            <div class="col-6" style="text-align:right;">{{ number_format($UserBalans['jarima'], 0, '.', ' ') }} so'm</div>              
          </div> 
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-4 mt-3">
          <button class="btn btn-primary w-100 mb-3" data-bs-toggle="modal" data-bs-target="#createPaymart">To'lov qilish</button>
          <button class="btn btn-primary w-100 mb-3" data-bs-toggle="modal" data-bs-target="#repetPaymart">To'lov qaytarish</button>
          @if(auth()->user()->role_id!=4)
            <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#createChegirma">Chegirma kiritish</button>
          @endif
        </div>
        <div class="col-lg-4 mt-3">
          <button class="btn btn-primary w-100 mb-3"  data-bs-toggle="modal" data-bs-target="#addGroups">Yangi guruhga qo'shish</button>
          <button class="btn btn-primary mb-3 w-100" data-bs-toggle="modal"  data-bs-target="#arxivGroups">Arxiv guruhlar</button>
          <button class="btn btn-primary w-100" data-bs-toggle="modal"  data-bs-target="#arxvPaymart">To'lovlar tarixi</button>
        </div>
        <div class="col-lg-4 mt-3">
          <button class="btn btn-primary w-100 mb-3" data-bs-toggle="modal"  data-bs-target="#updateUser">Taxrirlash</button>
          <button class="btn btn-primary w-100 mb-3" data-bs-toggle="modal"  data-bs-target="#updatePassword">Parolni yangilash</button>
          <button class="btn btn-primary w-100" data-bs-toggle="modal"  data-bs-target="#addMessages">Eslatma qoldirish</button>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title w-100 text-center">Talaba tarixi</h5>
      <div class="table-responsive">
        <table class="table text-center table-bordered" style="font-size: 10px;">
          <thead>
            <tr class="align-items-center">
              <th>#</th>
              <th>Vaqt</th>
              <th>Status</th>
              <th>Guruh</th>
              <th>Summa</th>
              <th>To'lov turi</th>
              <th>Commend</th>
              <th>Xisoblash</th>
              <th>Balans</th>
              <th>Meneger</th>
            </tr>
          </thead>
          <tbody>
            @forelse($UserHistory as $item)
              <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $item['created_at'] }}</td>
                <td>{{ $item['status'] }}</td>
                <td>{{ $item['guruh'] }}</td>
                <td>{{ $item['summa'] }}</td>
                <td>{{ $item['tulov_type'] }}</td>
                <td>{{ $item['comment'] }}</td>
                <td>{{ $item['xisoblash'] }}</td>
                <td>{{ $item['balans'] }}</td>
                <td>{{ $item['meneger'] }}</td>
              </tr>
            @empty
              <tr>
                <td colspan=10 class="text-center">Talaba tarixi mavjud emas.</td>
              </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div> 
  <!--To'lov qilish--> 
  <div class="modal fade" id="createPaymart" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">To'lov qilish</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('meneger.paymarts') }}" method="post">
            @csrf 
            <input type="hidden" name="user_id" value="{{ $User['id'] }}">
            <input type="hidden" name="paymart" value = "{{ $Paymart }}">
            <label for="summaNaqt" class="my-2">Naqt summa</label>
            <input type="text" name="summaNaqt" value="0" required class="form-control amount">
            <label for="summaPlastik" class="my-2">Plastik summa</label>
            <input type="text" name="summaPlastik" value="0" required class="form-control amount">
            @if($Paymart==1)
            <label for="guruh_id" class="my-2">To'lov uchun guruhni tanlang</label>
            <select name="guruh_id" required class="form-select">
              <option value="">Tanlang...</option>
              @foreach($UserPayGroupOne as $item)
                <option value="{{ $item['id'] }}">{{ $item['guruh_name'] }}</option>
              @endforeach
            </select>
            @elseif($Paymart==2)
            <input type="hidden" name="guruh_id" value="NULL">
            @elseif($Paymart==3)
            <label for="guruh_id" class="my-2">Chegirma uchun guruhni tanlang</label>
            <select name="guruh_id" required class="form-select">
              <option value="NULL">Tanlang</option>
              @foreach($ChegirmaliGuruh as $item)
                <option value="{{ $item['grops_id'] }}">{{ $item['guruh_name'] }} (To'lov: {{ number_format($item['tulovsumma'], 0, '.', ' ') }}, Chegirma: {{ number_format($item['chegirma'], 0, '.', ' ') }})</option>
              @endforeach
            </select>
            @endif
            <label for="comment" class="my-2">To'lov haqida</label>
            <textarea type="text" name="comment" required class="form-control"></textarea>
            <div class="row">
              <div class="col-6">
                <button type="button" class="btn btn-danger w-100 mt-2" data-bs-dismiss="modal" aria-label="Close">Bekor qilish</button>
              </div>
              <div class="col-6">
                <button type="submit" class="btn btn-primary w-100 mt-2">To'lovni saqlash</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--To'lov Qaytarish-->
  <div class="modal fade" id="repetPaymart" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">To'lov qaytarish</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="table table-bordered text-center">
            <tr>
              <th colspan="2">Kassada mavjud</th>
            </tr>
            <tr>
              <td>Naqt</td>
              <td>Plastik</td>
            </tr>
            <tr>
              <td>{{ number_format($Kassa['kassa_naqt'], 0, '.', ' ') }}</td>
              <td>{{ number_format($Kassa['kassa_plastik'], 0, '.', ' ') }}</td>
            </tr>
          </table>
          <form action="{{ route('meneger.paymarts_reperts') }}" method="post" class="p-0">
            @csrf 
            <input type="hidden" name="user_id" value="{{ $User['id'] }}">
            <input type="hidden" name="paymart" value = "{{ $Paymart }}">
            <input type="hidden" name="kassa_naqt" value="{{ $Kassa['kassa_naqt'] }}">
            <input type="hidden" name="kassa_plastik" value="{{ $Kassa['kassa_plastik'] }}">
            <label for="summa" class="my-2">Qaytariladigan summa</label>
            <input type="text" name="summa" required class="form-control amount">
            <label for="type" class="my-2">To'lov turi</label>
            <select name="type" required class="form-select">
              <option value="">Tanlang...</option>
              <option value="Naqt">Naqt</option>
              <option value="Plastik">Plastik</option>
            </select>
            <label for="comment" class="my-2">Qaytarish haqida</label>
            <textarea type="text" name="comment" required class="form-control"></textarea>
            <div class="row">
              <div class="col-6">
                <button type="button" class="btn btn-danger w-100 mt-2" data-bs-dismiss="modal" aria-label="Close">Bekor qilish</button>
              </div>
              <div class="col-6">
                <button type="submit" class="btn btn-primary w-100 mt-2">To'lovni qaytarish</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--Chegirma kiritish-->
  <div class="modal fade" id="createChegirma" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Chegirma kiritish</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('meneger.paymarts_chegirma') }}" method="post">
            @csrf 
            <input type="hidden" name="user_id" value="{{ $User['id'] }}">
            <input type="hidden" name="paymart" value = "{{ $Paymart }}">
            <label for="summa" class="my-2">Chegirma summasi</label>
            <input type="text" name="summa" required class="form-control amount">
            <label for="guruh_id" class="my-2">Chegirma uchun guruhni tanlang</label>
            <select name="guruh_id" required class="form-select">
              <option value="">Tanlang</option>
              @foreach($ChegirmaAdmin as $item)
              <option value="{{ $item['grops_id'] }}">{{ $item['guruh_name'] }} (Maksimal chegirma: {{ number_format($item['admin_chegirma'], 0, '.', ' ') }})</option>
              @endforeach
            </select>
            <label for="comment" class="my-2">Chegirma haqida</label>
            <textarea type="text" name="comment" required class="form-control"></textarea>
            <div class="row">
              <div class="col-6">
                <button type="button" class="btn btn-danger w-100 mt-2" data-bs-dismiss="modal" aria-label="Close">Bekor qilish</button>
              </div>
              <div class="col-6">
                <button type="submit" class="btn btn-primary w-100 mt-2">Chegirmani saqlash</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--Yangi guruhga qo'shish ++++ -->
  <div class="modal fade" id="addGroups" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Yangi guruhga qo'shish</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body pt-1">
          <form action="{{ route('meneger.user_add_group') }}" method="post" class="p-0 m-0">
            @csrf 
            <input type="hidden" name="user_id" value="{{ $User->id }}">
            <label for="grops_id" class="my-2">Guruhni tanlang</label>
            <select name="grops_id" required class="form-select">
              <option value="">Tanlang...</option>
              @foreach($GropsNew as $item)
              <option value="{{ $item['id'] }}">{{ $item['guruh_name'] }} Narxi: {{ number_format($item['guruh_price'], 0, '.', ' ') }} so'm</option>
              @endforeach
            </select>
            <label for="grops_start_comment" class="my-2">Guruhga qo'shish haqida</label>
            <textarea name="grops_start_comment" required class="form-control"></textarea>
            <div class="row">
              <div class="col-6">
                <button type="button" class="btn btn-danger w-100 mt-2" data-bs-dismiss="modal" aria-label="Close">Bekor qilish</button>
              </div>
              <div class="col-6">
                <button type="submit" class="btn btn-primary w-100 mt-2">Guruhga qo'shish</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--Arxiv Guruhlar +++++ -->
  <div class="modal fade" id="arxivGroups" tabindex="-1">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Arxiv guruhlar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="table-responsive">
            <table class="table text-center table-bordered" style="font-size: 12px;">
              <thead>
                <tr class="align-items-center">
                  <th>#</th>
                  <th>Guruh</th>
                  <th>Guruhga qo'shildi</th>
                  <th>Guruhga qo'shish haqida</th>
                  <th>Meneger</th>
                  <th>Guruhdan o'chirildi</th>
                  <th>Guruhdan o'chirish haqida</th>
                  <th>Jarima</th>
                  <th>Meneger</th>
                </tr>
              </thead>
              <tbody>
                @forelse($UserGuruh as $item)
                <tr>
                  <td>{{ $loop->index+1 }}</td>
                  <td><a href="{{ route('meneger_groups_show',$item['about']['id']) }}">{{ $item['guruh'] }}</a></td>
                  <td>{{ $item['about']['grops_start_data'] }}</td>
                  <td>{{ $item['about']['grops_start_comment'] }}</td>
                  <td>{{ $item['about']['grops_start_meneger'] }}</td>
                  <td>{{ $item['about']['grops_end_data'] }}</td>
                  <td>{{ $item['about']['grops_end_comment'] }}</td>
                  <td>{{ $item['about']['jarima'] }}</td>
                  <td>{{ $item['about']['grops_end_meneger'] }}</td>
                </tr>
                @empty
                  <tr>
                    <td colspan=9 class="text-center">Guruhlar mavjud emas</td>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--To'lov tarixi-->
  <div class="modal fade" id="arxvPaymart" tabindex="-1">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Talaba to'lovlari</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="table-responsive">
            <table class="table text-center table-bordered" style="font-size: 12px;">
              <thead>
                <tr class="align-items-center">
                  <th>#</th>
                  <th>To'lov summasi</th>
                  <th>To'lov turi</th>
                  <th>To'lov haqida</th>
                  <th>To'lov vaqti</th>
                  <th>Meneger</th>
                </tr>
              </thead>
              <tbody>
                @forelse($ArxivGuruhlar as $item)
                <tr>
                  <td>{{ $loop->index+1 }}</td>
                  <td>{{ number_format($item['summa'], 0, '.', ' ') }}</td>
                  <td>{{ $item['type'] }}</td>
                  <td>{{ $item['comment'] }}</td>
                  <td>{{ $item['created_at'] }}</td>
                  <td>{{ $item['meneger'] }}</td>
                </tr>
                @empty
                <tr>
                  <td colspan=6 class='text-center'>To'lovlar mavjud emas.</td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Eslatma qoldirish ++++ -->
  <div class="modal fade" id="addMessages" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title w-100 text-center">Eslatma qoldirish</h5>
        </div>
        <div class="modal-body p-3">
          <form action="{{ route('meneger.create_eslatma') }}" method="post" class="m-0 p-0">
            @csrf
            <input type="hidden" name="id" value="{{ $User['id'] }}">
            <label for="" class="my-2">Eslatma matni</label>
            <textarea name="comment" required class="form-control"></textarea>
            <div class="row">
              <div class="col-6">
                <button type="button" class="btn btn-danger w-100 mt-2" data-bs-dismiss="modal" aria-label="Close">Bekor qilish</button>
              </div>
              <div class="col-6">
                <button type="submit" class="btn btn-primary w-100 mt-2">Eslatmani saqlash</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--Taxrirlash ++++++ -->
  <div class="modal fade" id="updateUser" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title w-100 text-center">Talaba ma`lumotlarini yangilash</h5>
        </div>
        <div class="modal-body">
          <form action="{{ route('meneger.student_update') }}" method="post" class="p-0 m-0">
            @csrf
            <input type="hidden" name="id" value="{{ $User['id'] }}">
            <label for="name" class="mb-1">FIO</label>
            <input type="text" name="name" class="form-control" value="{{ $User['name'] }}" required>
            <label for="phone1" class="my-1">Telefon raqam</label>
            <input type="text" name="phone1" class="form-control phone" value="{{ $User['phone1'] }}" required>
            <label for="phone2" class="my-1">Qo'shimcha telefon raqam</label>
            <input type="text" name="phone2" class="form-control phone" value="{{ $User['phone2'] }}" required>
            <label for="tkun" class="my-1">Tug'ilgan kuni</label>
            <input type="date" name="tkun" class="form-control" value="{{ $User['tkun'] }}" required>
            <label for="addres" class="my-1">Yashash manzili</label>
            <input type="text" name="addres" value="{{ $User['addres'] }}" class="form-control" required>
            <label for="about" class="my-1">Talaba haqida</label>
            <textarea name="about" class="form-control">{{ $User['about'] }}</textarea>
            <div class="row">
              <div class="col-6">
                <button type="button" class="btn btn-danger w-100 mt-2" data-bs-dismiss="modal" aria-label="Close">Bekor qilish</button>
              </div>
              <div class="col-6">
                <button type="submit" class="btn btn-primary w-100 mt-2">O'zgarishlarni saqlash</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--Update Password ++++++ -->
  <div class="modal fade" id="updatePassword" tabindex="-1">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title w-100 text-center">Parolni yangilash</h5>
        </div>
        <div class="modal-body p-1 m-0">
          <div class="row">
            <div class="col-6">
              <button type="button" class="btn btn-danger w-100 mt-2" data-bs-dismiss="modal" aria-label="Close">Bekor qilish</button>
            </div>
            <div class="col-6">
              <form action="{{ route('meneger.password_update') }}" method="post" class="p-0 m-0">
                @csrf 
                <input type="hidden" name="user_id" value="{{ $User['id'] }}">
                <button type="submit" class="btn btn-primary w-100 mt-2">Yangilash</button>
              </form>
            </div>
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