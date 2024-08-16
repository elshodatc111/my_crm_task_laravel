<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ route('meneger.home') }}" class="logo d-flex align-items-center">
        <span class=" w-100 text-center">
          <h3 class="d-none d-lg-block w-100 pt-2" style="font-weight:900">EDU MENEGER</h3>
          <img src="{{ env('CDN_LINK_TECHER')}}assets/img/logo/logo_icon.png" class="d-lg-none d-block">
        </span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item ">
          <a class="nav-link nav-icon" href="{{ route('eslatma') }}" title="Eslatmalar">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">@include('layouts.alert.eslatma')</span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link nav-icon" href="{{ route('tkun') }}" title="Tug'ilgan kunlar">
            <i class="bi bi-gift"></i>
            <span class="badge bg-primary badge-number">@include('layouts.alert.tkun')</span>
          </a>
        </li>
        <!--
        <li class="nav-item">
          <a class="nav-link nav-icon" href="{{ route('murojat') }}" title="Murojatlar">
            <i class="bi bi-chat-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a>
        </li>
        -->
        <li class="nav-item">
          <a class="nav-link nav-icon" href="{{ route('form') }}" title="Form">
            <i class="bi bi-card-checklist"></i>
            <span class="badge bg-warning badge-number">@include('layouts.alert.form')</span>
          </a>
        </li>
        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ env('CDN_LINK_TECHER')}}assets/img/logo/user.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->role->name }}</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ auth()->user()->name }}</h6>
              <span>{{ auth()->user()->email }}</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('meneger_profel') }}">
                <i class="bi bi-person"></i>
                <span>Kabinet</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="nav-item dropdown">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right"></i>
                <span>Chiqish</span>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>