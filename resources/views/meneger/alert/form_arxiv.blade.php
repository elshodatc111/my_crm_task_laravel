@extends('layouts.meneger_src')
@section('title', 'Balans')
@section('content')
@extends('layouts.meneger_header')
@extends('layouts.meneger_menu')

<main id="main" class="main">

<div class="pagetitle">
  <h1>Form</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('meneger.home') }}">Bosh sahifa</a></li>
      <li class="breadcrumb-item active">Arxiv</li>
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
        <div class="col-lg-3 col-6 pt-2">
            <a href="{{ route('form') }}" class="btn btn-secondary w-100">Form Murojat</a>
        </div>
        <div class="col-lg-3 col-6 pt-2">
            <a href="{{ route('form_techer') }}" class="btn btn-secondary w-100">Form Statistika</a>
        </div>
        <div class="col-lg-3 col-6 pt-2">
            <a href="{{ route('form_arxiv') }}" class="btn btn-primary w-100">Arxiv</a>
        </div>
        <div class="col-lg-3 col-6 pt-2">
            <a href="{{ route('form_url') }}" class="btn btn-secondary w-100">Form Manzil</a>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            <h2 class="card-title w-100 text-center">Form orqali kelib tushgan murojatlar arxivi</h2>
            <div class="table-responsive">
                <table class="table table-bordered text-center datatable" style="font-size:14px">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Type</th>
                            <th>FIO</th>
                            <th>Telefon raqami</th>
                            <th>Yashash manzili</th>
                            <th>Murojat vaqti</th>
                            <th>Holati</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($Form as $item)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>
                                @if($item['type']=='User')
                                    <b class="p-0 m-0">Talaba</b>
                                @else 
                                    <b class="p-0 m-0">O'qituvchi</b>
                                @endif
                            </td>
                            <td style="text-align:left">{{ $item['name'] }}</td>
                            <td>{{ $item['phone1'] }}</td>
                            <td>{{ $item['addres'] }}</td>
                            <td>{{ $item['created_at'] }}</td>
                            <td>{{ $item['status'] }}</td>
                            <td>
                                <a href="{{ route('form_murojat_show',$item['id']) }}" class="btn btn-info py-1 px-1 text-white"><i class="bi bi-eye"></i></a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan=7 class="text-center">Aktiv murojatlar mavjud emas</td>
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