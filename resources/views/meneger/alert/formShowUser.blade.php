@extends('layouts.meneger_src')
@section('title', 'UserForm')
@section('content')
<main class="row">
    <div class="col-lg-3 col-1"></div>
    <div class="col-lg-6 col-10">
        <div class="card">
            <div class="card-body">
                <img style="width:100%" class="mt-5" src="{{ env('MARKAZLOGOLINK') }}/{{ $Markaz['image'] }}">
                <h2 class="w-100 text-center mt-5">{{ $Markaz['name'] }} o'quv markazi</h2>
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
                <form action="{{ route('form_post') }}" method="post">
                    @csrf 
                    <input type="hidden" name="markaz_id" value="{{ $Markaz['id'] }}">
                    <input type="hidden" name="smm" value="{{ $smm }}">
                    <input type="hidden" name="type" value="User">
                    <input type="hidden" value="111" name="about">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="fio" style="width:100%;text-align:left" class="mt-2 mb-1">Familyangiz...</label>
                            <input type="text" name="fio" required class="form-control">
                        </div>
                        <div class="col-lg-6">
                            <label for="ism" style="width:100%;text-align:left" class="mt-2 mb-1">Ismingiz</label>
                            <input type="text" name="ism" required class="form-control">
                        </div>
                        <div class="col-lg-6">
                            <label for="ota" style="width:100%;text-align:left" class="mt-2 mb-1">Otangizni ismi</label>
                            <input type="text" name="ota" required class="form-control">
                        </div>
                        <div class="col-lg-6">
                            <label for="tkun" style="width:100%;text-align:left" class="mt-2 mb-1">Tug'ilgan kuningiz</label>
                            <input type="date" name="tkun" required class="form-control">
                        </div>
                        <div class="col-lg-6">
                            <label for="phone1" style="width:100%;text-align:left" class="mt-2 mb-1">Telefon raqamingiz</label>
                            <input type="text" name="phone1" required value="+998" class="form-control phone">
                        </div>
                        <div class="col-lg-6">
                            <label for="phone2" style="width:100%;text-align:left" class="mt-2 mb-1">Qo'shimcha telefon raqamingiz</label>
                            <input type="text" name="phone2" required value="+998" class="form-control phone">
                        </div>
                        <div class="col-12">
                            <label for="addres" style="width:100%;text-align:left" class="mt-2 mb-1">Yashash manzilingiz</label>
                            <textarea type="text" name="addres" required class="form-control"></textarea>
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