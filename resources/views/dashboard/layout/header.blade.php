<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-lg-2 px-3" href="">Online Attendance</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="w-100"></div>
  <div class="navbar-nav d-flex">
    
    <div class="nav-item text-nowrap">
      <form action="/logout" method="post">

        @csrf

        <button type="submit" class="nav-link px-3 bg-dark border-0">Logout <span data-feather="log-out"></span></button>
      </form>
    </div>
  </div>
</header>