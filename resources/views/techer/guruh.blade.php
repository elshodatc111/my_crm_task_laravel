@extends('layouts.meneger_src')
@section('title', 'Kirish')
@extends('layouts.techer_header')
@section('content')
    <div class="main-content">
        <div class="container">
            <h2 class="text-center mb-4">Guruh haqida ma'lumot</h2>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $Grops['guruh_name'] }}</h5>
                    <p><strong>O'qituvchiga to'lov:</strong> {{ $Grops['guruh_name'] }}</p>
                    <p><strong>O'qituvchiga to'lov(%):</strong> {{ $Grops['guruh_name'] }}</p>
                    <p><strong>O'qituvchiga bonus:</strong> {{ $Grops['guruh_name'] }}</p>
                    <p><strong>Boshlanish:</strong> {{ $Grops['guruh_name'] }}</p>
                    <p><strong>Tugash:</strong> {{ $Grops['guruh_name'] }}</p>
                    <p><strong>Dars vaqt:</strong> {{ $Grops['guruh_name'] }}</p>
                </div>
            </div>
            
            <div class="text-center mb-3">
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">DAVOMAT</button>
            </div>

            <div class="card mb-3">
                <div class="card-body text-center">
                    <h5 class="card-title">Dars kunlari</h5>
                    <table class="table table-bordered" style="font-size:14px;">
                        <tr style="font-size:10px">
                            <td>2024-06-19</td>
                        </tr>
                        <tr style="font-size:10px">
                            <td>2024-06-21</td>
                        </tr>
                        <tr style="font-size:10px">
                            <td>2024-06-24</td>
                        </tr>
                        <tr style="font-size:10px">
                            <td>2024-06-26</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body text-center">
                    <h5 class="card-title">Guruh davomat</span></h5>
                    <div class="table-responsive">
                        <table class="table table-bordered" style="font-size:14px;">
                            <thead>
                                <tr>
                                    <th  class="bg-primary text-white">#</th>
                                    <th  class="bg-primary text-white">Talabalar</th>
                                    <td  class="bg-primary text-white" style="font-size:10px;width:50px">2024-06-19</td>
                                    <td  class="bg-primary text-white" style="font-size:10px;width:50px">2024-06-21</td>
                                    <td  class="bg-primary text-white" style="font-size:10px;width:50px">2024-06-24</td>
                                    <td  class="bg-primary text-white" style="font-size:10px;width:50px">2024-06-26</td>
                                    <td  class="bg-primary text-white" style="font-size:10px;width:50px">2024-06-28</td>
                                    <td  class="bg-primary text-white" style="font-size:10px;width:50px">2024-07-01</td>
                                    <td  class="bg-primary text-white" style="font-size:10px;width:50px">2024-07-03</td>
                                    <td  class="bg-primary text-white" style="font-size:10px;width:50px">2024-07-05</td>
                                    <td  class="bg-primary text-white" style="font-size:10px;width:50px">2024-07-08</td>
                                    <td  class="bg-primary text-white" style="font-size:10px;width:50px">2024-07-10</td>
                                    <td  class="bg-primary text-white" style="font-size:10px;width:50px">2024-07-12</td>
                                    <td  class="bg-primary text-white" style="font-size:10px;width:50px">2024-07-15</td>
                                    <td  class="bg-primary text-white" style="font-size:10px;width:50px">2024-07-17</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <th style="text-align:left;">MAJIDOV ASLIDDIN</th>
                                    <td class="bg-danger text-white text-center" title="Davomat olinmadi" style="cursor:pointer"><i class="bi bi-dot"></i></td>
                                    <td class="bg-danger text-white text-center" title="Davomat olinmadi" style="cursor:pointer"><i class="bi bi-dot"></i></td>
                                    <td class="bg-danger text-white text-center" title="Davomat olinmadi" style="cursor:pointer"><i class="bi bi-dot"></i></td>
                                    <td class="bg-success text-white text-center" title="Darsga qatnashdi" style="cursor:pointer"><i class="bi bi-clipboard2-check"></i></td>
                                    <td class="bg-danger text-white text-center" title="Davomat olinmadi" style="cursor:pointer"><i class="bi bi-dot"></i></td>
                                    <td class="bg-success text-white text-center" title="Darsga qatnashdi" style="cursor:pointer"><i class="bi bi-clipboard2-check"></i></td>
                                    <td class="bg-warning text-white text-center" title="Darsga qatnashmadi" style="cursor:pointer"><i class="bi bi-clipboard-minus"></i></td>
                                    <td class="bg-success text-white text-center" title="Darsga qatnashdi" style="cursor:pointer"><i class="bi bi-clipboard2-check"></i></td>
                                    <td class="bg-warning text-white text-center" title="Darsga qatnashmadi" style="cursor:pointer"><i class="bi bi-clipboard-minus"></i></td>
                                    <td class="bg-success text-white text-center" title="Darsga qatnashdi" style="cursor:pointer"><i class="bi bi-clipboard2-check"></i></td>
                                    <td class="bg-warning text-white text-center" title="Darsga qatnashmadi" style="cursor:pointer"><i class="bi bi-clipboard-minus"></i></td>
                                    <td class="bg-success text-white text-center" title="Darsga qatnashdi" style="cursor:pointer"><i class="bi bi-clipboard2-check"></i></td>
                                    <td class="bg-danger text-white text-center" title="Davomat olinmadi" style="cursor:pointer"><i class="bi bi-dot"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card info-card sales-card">
                <div class="card-body text-center">
                    <h5 class="card-title">Test natijalari</span></h5>
                    <table class="table table-bordered" style="font-size:14px;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Talaba</th>
                            <th>Testlar soni</th>
                            <th>To'g'ri javoblar</th>
                            <th>Noto'g'ri javoblar</th>
                            <th>Ball</th>
                            <th>Test vaqti</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan=7 class="text-center">Test topshirgan talabalar mavjud emas.</td>
                        </tr>
                    </tbody>
                </table>
                </div>  
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Talabalar davomatin olish</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Yopish">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="div px-2 mb-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="q1" id="q1a" value="A">
                                <label class="form-check-label" for="q1a">A. Berlin</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="q1" id="q2a" value="A">
                                <label class="form-check-label" for="q2a">A. Berlin</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="q1" id="q3a" value="A">
                                <label class="form-check-label" for="q3a">A. Berlin</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="q1" id="q4a" value="A">
                                <label class="form-check-label" for="q4a">A. Berlin</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="q1" id="q5a" value="A">
                                <label class="form-check-label" for="q5a">A. Berlin</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="q1" id="q6a" value="A">
                                <label class="form-check-label" for="q6a">A. Berlin</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Davomatni saqlash</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="bottom-nav" style="z-index:7">
        <a href="{{ route('techer.index') }}" class="nav-link">
            <i class="bi bi-house-door"></i>
            <span>Bosh sahifa</span>
        </a>
        <a href="{{ route('techer.guruhs') }}" class="nav-link" style="color:#FFA500">
            <i class="bi bi-book"></i>
            <span>Guruhlar</span>
        </a>
        <a href="{{ route('techer.paymart') }}" class="nav-link">
            <i class="bi bi-currency-dollar"></i>
            <span>To'lovlar</span>
        </a>
        <a href="{{ route('techer.profel') }}" class="nav-link">
            <i class="bi bi-person"></i>
            <span>Profil</span>
        </a>
    </div>


@extends('layouts.techer_footer')
@endsection