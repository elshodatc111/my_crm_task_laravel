@extends('layouts.meneger_src')
@section('title', 'Kirish')
@section('content')
@extends('layouts.meneger_header')
@extends('layouts.meneger_menu')


  
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Qarzdorlar</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('meneger.all_tashrif') }}">Bosh sahifa</a></li>
          <li class="breadcrumb-item active">Qarzdorlar</li>
        </ol>
      </nav>
    </div>

    <section class="section dashboard"> 
      
      <div class="row mb-2">
        <div class="col-lg-3 mt-lg-0 mt-2">
          <a href="{{ route('meneger.all_tashrif') }}" class="btn btn-secondary w-100">Tashriflar</a>
        </div>
        <div class="col-lg-3 mt-lg-0 mt-2">
          <a href="{{ route('meneger.all_debet') }}" class="btn btn-primary w-100">Qarzdorlar</a>
        </div>
        <div class="col-lg-3 mt-lg-0 mt-2">
          <a href="{{ route('dars_jadval') }}" class="btn btn-secondary w-100">Dars jadvali</a>
        </div>
        <div class="col-lg-3 mt-lg-0 mt-2">
          <a href="{{ route('meneger.all_create') }}" class="btn btn-secondary w-100">Yangi tashrif</a>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h5 class="card-title w-100 text-center">Qarzdorlar</h5>
          <input type="text" id="search" class="form-control mb-2" placeholder="Qidiruv...">
          <div id="userTable">
            <div class="table-responsive">
                @include('meneger.students.pagination_data', ['users' => $users])
            </div>
          </div>
          <script>

            $(document).on('keyup', '#search', function() {
                let query = $(this).val();
                fetch_data(1, query);
            });

            $(document).on('click', '.pagination a', function(event) {
                event.preventDefault();
                let page = $(this).attr('href').split('page=')[1];
                let query = $('#search').val();
                fetch_data(page, query);
            });

            function fetch_data(page, query) {
                $.ajax({
                    url: "{{ route('meneger.all_debet_search') }}" + "?page=" + page + "&query=" + query,
                    success: function(data) {
                        $('#userTable').html(data);
                    }
                });
            }
          </script>
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