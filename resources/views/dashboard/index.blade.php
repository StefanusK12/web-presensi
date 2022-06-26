@extends('dashboard.layout.main')

@section('container')

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome to Dashboard, {{ auth()->user()->name }}</h1>
  </div>

  <div class="col-lg-7 fs-6">
    <a href="/dashboard/presensi/masuk" style="text-decoration:none" class="btn btn-dark text-light">Check In</a>
  </div>

  <div class="col-lg-7 fs-6 mt-2">
    <a href="/dashboard/presensi/keluar" style="text-decoration:none" class="btn btn-dark text-light">Check Out</a>
  </div>

@endsection