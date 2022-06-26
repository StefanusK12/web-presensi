@extends('dashboard.layout.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome, {{ auth()->user()->name }}</h1>
  </div>

  
  @if (session()->has('existsci'))
            
      <div class="alert alert-danger alert-dismissible fade show col-lg-2" role="alert">
        {{ session('existsci') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        
  @elseif (session()->has('checkin'))

      <div class="alert alert-success alert-dismissible fade show col-lg-3" role="alert">
        {{ session('checkin') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

  @endif

  <div class="col-lg-5">
    <form action="/dashboard/presensi/masuk" method="post">

      @csrf

      <div class="mt-3">
        <button class="btn btn-primary btn-dark" type="submit">
          Check In
        </button>
      </div>

      <div class="mt-4">
        <a href="/dashboard" style="color: black">
          <span data-feather="arrow-left-circle"></span>
        </a>
      </div>
      
    </form>
  </div>

@endsection