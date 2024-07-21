@extends('layouts.meneger_src')
@section('title', 'TecherForm')
@section('content')
<main class="row">
    <div class="col-lg-3 col-1"></div>
    <div class="col-lg-6 col-10">
        <div class="card">
            <div class="card-body">
                <img style="width:100%" class="mt-5" src="../../../assets/img/logos/atko.jpg">
                <h2 class="w-100 text-center mt-5">ATKO o'quv markazi </h2>
                <form action="" method="post">
                    <input type="hidden" name="markaz_id" value="">
                    <input type="hidden" name="smm" value="">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="fio" style="width:100%;text-align:left" class="mt-2 mb-1">Familyangiz</label>
                            <input type="text" name="fio" required name="fio" class="form-control">
                        </div>
                        <div class="col-lg-6">
                            <label for="ism" style="width:100%;text-align:left" class="mt-2 mb-1">Ismingiz</label>
                            <input type="text" name="ism" required name="ism" class="form-control">
                        </div>
                        <div class="col-lg-6">
                            <label for="ism" style="width:100%;text-align:left" class="mt-2 mb-1">Otangizni ismi</label>
                            <input type="text" name="ism" required name="ism" class="form-control">
                        </div>
                        <div class="col-lg-6">
                            <label for="ism" style="width:100%;text-align:left" class="mt-2 mb-1">Tug'ilgan kuningiz</label>
                            <input type="date" name="ism" required name="ism" class="form-control">
                        </div>
                        <div class="col-lg-6">
                            <label for="phone1" style="width:100%;text-align:left" class="mt-2 mb-1">Telefon raqamingiz</label>
                            <input type="text" name="phone1" required name="phone1" value="+998" class="form-control phone">
                        </div>
                        <div class="col-lg-6">
                            <label for="phone2" style="width:100%;text-align:left" class="mt-2 mb-1">Qo'shimcha telefon raqamingiz</label>
                            <input type="text" name="phone2" required name="phone2" value="+998" class="form-control phone">
                        </div>
                        <div class="col-12">
                            <label for="addres" style="width:100%;text-align:left" class="mt-2 mb-1">Yashash manzilingiz</label>
                            <textarea type="text" name="addres" required name="addres" class="form-control"></textarea>
                        </div>
                        <div class="col-12">
                            <label for="addres" style="width:100%;text-align:left" class="mt-2 mb-1">Mutahasisligingiz haqida</label>
                            <textarea type="text" name="addres" required name="addres" class="form-control"></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary w-50 mt-3">Ro'yhatdan o'tish</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection