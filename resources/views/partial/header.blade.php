<header class="navbar navbar-dark bg-dark navbar-expand-lg sticky-top flex-md-nowrap p-0">
  {{--   sticky-top flex-md-nowrap p-0 shadow --}}
  <a class="navbar-brand col-md-3 col-lg-2 me-auto px-3" href="/">Online Attendance</a>
  <div class="navbar-nav"> 
    <ul class="navbar-nav ms-auto">
      @auth

        <li class="dropdown my-2">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}
          </a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>

            <li><hr class="dropdown-divider"></li>

            <li>
              <form action="/logout" method="post">

                @csrf

                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
              </form>
            </li>
          </ul>
        </li>

      @else

        <li class="nav-item">
          <a href="/login" class="nav-link me-3 fs-6"><span data-feather="log-in"></span> Login</a>
        </li>

      @endauth
    </ul>
  </div>
</header>