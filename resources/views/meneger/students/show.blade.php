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



  <div class="row">
    <div class="col-lg-6">      
      <div class="card" style="min-height: 280px;">
        <div class="card-body">
          <h5 class="card-title w-100 text-center">Elshod Musurmonov</h5>
          <div class="row">
            <div class="col-6  mt-1"><b>Telefon raqam:</b></div>
            <div class="col-6" style="text-align:right;">90 883 0450</div>
            <div class="col-6  mt-1"><b>Telefon raqam:</b></div>
            <div class="col-6" style="text-align:right;">90 883 0450</div>
            <div class="col-6  mt-1"><b>Manzil:</b></div>
            <div class="col-6" style="text-align:right;">Qarshi shaxar</div>
            <div class="col-6  mt-1"><b>Tug'ilgan kun:</b></div>
            <div class="col-6" style="text-align:right;">2024.07.17</div>
            <div class="col-6  mt-1"><b>Biz haqimizda:</b></div>
            <div class="col-6" style="text-align:right;">Telegram</div>
            <div class="col-6  mt-1"><b>Talaba haqida:</b></div>
            <div class="col-6" style="text-align:right;">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">      
      <div class="card" style="min-height: 280px;">
        <div class="card-body">
          <h5 class="card-title w-100 text-center">Balans: 145 000 so'm</h5>
          <div class="row">
            <div class="col-6  mt-1"><b>Naqt to'lovlar:</b></div>
            <div class="col-6" style="text-align:right;">260 000</div>
            <div class="col-6  mt-1"><b>Plastik to'lovlar:</b></div>
            <div class="col-6" style="text-align:right;">130 000</div>
            <div class="col-6  mt-1"><b>Payme orqali to'lov:</b></div>
            <div class="col-6" style="text-align:right;">80 000</div>
            <div class="col-6  mt-1"><b>Qaytarilgan:</b></div>
            <div class="col-6" style="text-align:right;">45 000</div>
            <div class="col-6  mt-1"><b>Chegirmalar:</b></div>
            <div class="col-6" style="text-align:right;">50 000</div>
            <div class="col-6  mt-1"><b>Jarimalar:</b></div>
            <div class="col-6" style="text-align:right;">30 000</div>                
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-4 mt-3">
          <button class="btn btn-success w-100 mb-3" data-bs-toggle="modal" data-bs-target="#createPaymart">To'lov qilish</button>
          <button class="btn btn-outline-danger w-100 mb-3" data-bs-toggle="modal" data-bs-target="#repetPaymart">To'lov qaytarish</button>
          <button class="btn btn-warning w-100" data-bs-toggle="modal" data-bs-target="#createChegirma">Chegirma kiritish</button>
        </div>
        <div class="col-lg-4 mt-3">
          <button class="btn btn-outline-success w-100 mb-3"  data-bs-toggle="modal" data-bs-target="#addGroups">Yangi guruhga qo'shish</button>
          <button class="btn btn-outline-info mb-3 w-100" data-bs-toggle="modal"  data-bs-target="#arxivGroups">Arxiv guruhlar</button>
          <button class="btn btn-success w-100" data-bs-toggle="modal"  data-bs-target="#addMessages">Eslatma qoldirish</button>
        </div>
        <div class="col-lg-4 mt-3">
          <button class="btn btn-primary w-100 mb-3" data-bs-toggle="modal"  data-bs-target="#updateUser">Taxrirlash</button>
          <button class="btn btn-outline-primary w-100 mb-3" data-bs-toggle="modal"  data-bs-target="#updatePassword">Parolni yangilash</button>
          <button class="btn btn-info w-100" data-bs-toggle="modal"  data-bs-target="#arxvPaymart">To'lovlar tarixi</button>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title w-100 text-center">Talaba tarixi</h5>
      <div class="table-responsive">
        <table class="table text-center table-bordered" style="font-size: 12px;">
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
            <tr>
              <td>1</td>
              <td>2024.07.12 15:15:29</td>
              <td>To'lov</td>
              <td>Guruh nomi(Tanlanmasa bo'sh)</td>
              <td>350 000</td>
              <td>Plastik</td>
              <td>To'lov haqida komment</td>
              <td>650 000 + 350 000 = 1 000 000</td>
              <td>1 000 000</td>
              <td>elshodatc1116</td>
            </tr>
            <tr>
              <td>2</td>
              <td>2024.07.12 15:15:29</td>
              <td>To'lov</td>
              <td>Guruh nomi(Chegirmali guruhi mavjud bo'lsa)</td>
              <td>350 000</td>
              <td>Payme</td>
              <td>Payme orqali to'lov</td>
              <td>300 000 + 350 000 = 650 000</td>
              <td>650 000</td>
              <td>elshodatc1116</td>
            </tr>
            <tr>
              <td>3</td>
              <td>2024.07.12 15:15:29</td>
              <td>Chegirma</td>
              <td>-</td>
              <td>200 000</td>
              <td>-</td>
              <td>Chegirma sababi</td>
              <td>100 000 + 200 000 = 300 000</td>
              <td>300 000</td>
              <td>elshodatc1116</td>
            </tr>
            <tr>
              <td>4</td>
              <td>2024.07.12 15:15:29</td>
              <td>Qaytarildi</td>
              <td>-</td>
              <td>100 000</td>
              <td>-</td>
              <td>Qaytarish sababi</td>
              <td>200 000 + 100 000 = 100 000</td>
              <td>100 000</td>
              <td>elshodatc1116</td>
            </tr>
            <tr>
              <td>5</td>
              <td>2024.07.12 15:15:29</td>
              <td>Chegirma</td>
              <td>Guruh nomi</td>
              <td>50 000</td>
              <td>-</td>
              <td>Guruhga 350 000 som to'lov uchun</td>
              <td>150 000 + 50 000 = 200 000</td>
              <td>200 000</td>
              <td>elshodatc1116</td>
            </tr>
            <tr>
              <td>6</td>
              <td>2024.07.12 15:15:29</td>
              <td>To'lov</td>
              <td>Guruh nomi(Tanlanmasa bo'sh)</td>
              <td>350 000</td>
              <td>Naqt</td>
              <td>To'lov haqida komment</td>
              <td>-200 000 + 350 000 = 150 000</td>
              <td>150 000</td>
              <td>elshodatc1116</td>
            </tr>
            <tr>
              <td>4</td>
              <td>2024.07.12 15:15:29</td>
              <td>Jarima</td>
              <td>Guruh nomi</td>
              <td>200 000</td>
              <td>-</td>
              <td>Guruhdan o'chirilganlik uchun jarima</td>
              <td>0 - 200 000 = -200 000</td>
              <td>-200 000</td>
              <td>elshodatc1116</td>
            </tr>
            <tr>
              <td>8</td>
              <td>2024.07.12 15:15:29</td>
              <td>Guruhdan o'chirildi</td>
              <td>Guruh nomi</td>
              <td>400 000</td>
              <td>-</td>
              <td>Guruhdan o'chirish sababi</td>
              <td>-400 000 + 400 000 = 0</td>
              <td>0</td>
              <td>elshodatc1116</td>
            </tr>
            <tr>
              <td>9</td>
              <td>2024.07.12 15:15:29</td>
              <td>Guruhga qo'shildi</td>
              <td>Guruhning nomi</td>
              <td>400 000</td>
              <td>-</td>
              <td>Guruhga qo'shish sababi</td>
              <td>0-400 000 = -400 000</td>
              <td>-400 000</td>
              <td>elshodatc1116</td>
            </tr>
            <tr>
              <td>10</td>
              <td>2024.07.12 15:15:29</td>
              <td>Markazga tashrif</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>0</td>
              <td>elshodatc1116</td>
            </tr>
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
          <form action="" method="post">
            <label for="" class="my-2">Naqt summa</label>
            <input type="text" required class="form-control">
            <label for="" class="my-2">Plastik summa</label>
            <input type="text" required class="form-control">
            <label for="" class="my-2">Chegirma uchun guruh</label>
            <select name="" required class="form-select">
              <option value="">Tanlang</option>
            </select>
            <label for="" class="my-2">To'lov haqida</label>
            <input type="text" required class="form-control">
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
              <td>150 000</td>
              <td>50 000</td>
            </tr>
          </table>
          <form action="" method="post">
            <label for="" class="my-2">Qaytariladigan summa</label>
            <input type="text" required class="form-control">
            <label for="" class="my-2">To'lov turi</label>
            <select name="" required class="form-select">
              <option value="">Tanlang</option>
            </select>
            <label for="" class="my-2">Qaytarish haqida</label>
            <input type="text" required class="form-control">
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
          <form action="" method="post">
            <label for="" class="my-2">Chegirma summasi</label>
            <input type="text" required class="form-control">
            <label for="" class="my-2">Chegirma uchun guruh</label>
            <select name="" required class="form-select">
              <option value="">Tanlang</option>
            </select>
            <label for="" class="my-2">Chegirma haqida</label>
            <input type="text" required class="form-control">
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
  <!--Yangi guruhga qo'shish-->
  <div class="modal fade" id="addGroups" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Yangi guruhga qo'shish</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            <label for="" class="my-2">Guruhni tanlang</label>
            <select name="" required class="form-select">
              <option value="">Tanlang</option>
            </select>
            <label for="" class="my-2">Guruhga qo'shish haqida</label>
            <input type="text" required class="form-control">
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
  <!--Arxiv Guruhlar-->
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
                <tr>
                  <td>1</td>
                  <td><a href="">Test guruh</a></td>
                  <td>2024.07.12 15:15:29</td>
                  <td>Guruh komment</td>
                  <td>elshodatc1116</td>
                  <td>2024.07.12 15:15:29</td>
                  <td>Guruh komment</td>
                  <td>400 000</td>
                  <td>elshodatc1116</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Eslatma qoldirish-->
  <div class="modal fade" id="addMessages" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Eslatma qoldirish</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            <label for="" class="my-2">Eslatma matni</label>
            <textarea name="" required class="form-control"></textarea>
            <div class="row">
              <div class="col-6">
                <button type="button" class="btn btn-danger w-100 mt-2" data-bs-dismiss="modal" aria-label="Close">Bekor qilish</button>
              </div>
              <div class="col-6">
                <button type="submit" class="btn btn-primary w-100 mt-2">Eslatma saqlash</button>
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
          <h5 class="modal-title">updateUser</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Non omnis incidunt qui sed occaecati magni asperiores est mollitia. Soluta at et reprehenderit. Placeat autem numquam et fuga numquam. Tempora in facere consequatur sit dolor ipsum. Consequatur nemo amet incidunt est facilis. Dolorem neque recusandae quo sit molestias sint dignissimos.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <!--Update Password-->
  <div class="modal fade" id="updatePassword" tabindex="-1">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title w-100 text-center">Parolni yangilash</h5>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            <div class="row">
              <div class="col-6">
                <button type="button" class="btn btn-danger w-100 mt-2" data-bs-dismiss="modal" aria-label="Close">Bekor qilish</button>
              </div>
              <div class="col-6">
                <button type="submit" class="btn btn-primary w-100 mt-2">Yangilash</button>
              </div>
            </div>
          </form>
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
                <tr>
                  <td>1</td>
                  <td>350 000</td>
                  <td>Naqt</td>
                  <td>Naqt</td>
                  <td>2024.07.12 15:15:29</td>
                  <td>elshodatc1116</td>
                </tr>
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