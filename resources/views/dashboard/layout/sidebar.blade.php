<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">

    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/profile*') ? 'active' : '' }}" href="/dashboard/profile">
          <span data-feather="user"></span>
          My Profile
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/records*') ? 'active' : '' }}" href="/dashboard/records">
          <span data-feather="calendar"></span>
          My Records
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/gaji*') ? 'active' : '' }}" href="/dashboard/gaji">
          <span data-feather="check-square"></span>
          Monthly Salary
        </a>
      </li>
    </ul>

    @can('admin')

    <h6 class="sidebar-heading d-flex justify-content-center align-items-center px-3 mt-4 mb-1 text-muted">
      <span>Administrator</span>
    </h6>

    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/admin/searchpresensi*') ? 'active' : '' }}" href="/dashboard/admin/searchpresensi">
          <span data-feather="calendar"></span>
          List Presensi Hari Ini
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/admin/listgaji*') ? 'active' : '' }}" href="/dashboard/admin/listgaji">
          <span data-feather="file-text"></span>
          List Gaji
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/admin/setjabatan') ? 'active' : '' }}" href="/dashboard/admin/listgaji">
          <span data-feather="file-plus"></span>
          Set Jabatan
        </a>
      </li>
    </ul>

    @endcan

  </div>
</nav>