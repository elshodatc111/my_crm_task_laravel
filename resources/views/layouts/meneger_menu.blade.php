<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('meneger.home') }}">
          <i class="bi bi-people"></i>
          <span>Tashriflar</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('meneger_groups') }}">
          <i class="bi bi-diagram-3"></i>
          <span>Guruhlar</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('meneger_moliya_home') }}">
          <i class="bi bi-collection"></i>
          <span>Kassa</span>
        </a>
      </li>
      @if(auth()->user()->role_id!=4)
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('meneger.hodim') }}">
          <i class="bi bi-person-check"></i>
          <span>Hodimlar</span>
        </a>
      </li>
      @endif
      @if(auth()->user()->role_id==2)
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('chart_days') }}">
          <i class="bi bi-graph-up"></i>
          <span>Statistika</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('meneger_balans_home') }}">
          <i class="bi bi-coin"></i>
          <span>Moliya</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('report_student') }}">
          <i class="bi bi-files-alt"></i>
          <span>Hisobot</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('meneger.rooms') }}">
          <i class="bi bi-gear"></i>
          <span>Sozlamalar</span>
        </a>
      </li>
      @endif
    </ul>
  </aside>