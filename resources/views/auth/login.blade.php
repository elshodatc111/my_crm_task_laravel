@extends('layouts.login_src')
@section('title', 'Kirish')
@section('content')

    <main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
            <img src="{{ env('CDN_LINK_TECHER')}}assets/img/logo/banner.png" style="width:70%">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Kirish</h5>
                    @if ($errors->all())
                      <p class="text-center text-danger small">Login yoki parol xato</p>
                    @endif
                  </div>
                  <form class="row g-3 needs-validation" action="{{ route('login') }}" method="POST" novalidate>
                  @csrf
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Login</label>
                      <div class="input-group has-validation">
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                        <div class="invalid-feedback">Login kiritish majburiy.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Parol kiritish majburiy!</div>
                    </div>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="remember_me">
                        <label class="form-check-label" for="remember_me">Parolni eslab qolish</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Kirish</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
@endsection
