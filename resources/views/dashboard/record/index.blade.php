@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Records</h1>
</div>

@if (session()->has('fail'))
  <div class="alert alert-danger alert-dismissible fade show col-md-2" role="alert">
  {{ session('fail') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

@if (session()->has('none'))
  <div class="alert alert-danger alert-dismissible fade show col-md-2" role="alert">
  {{ session('none') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif


<div class="col col-lg-3">
  <div class="row justify-content-center">
    <form action="/dashboard/records/{{ auth()->user()->id }}">
      <div class="form-group">
          <label for="tglawal">Tanggal Awal</label>
          <input type="date" name="tglawal" class="form-control" required>
      </div>
      <div class="form-group mt-2">
          <label for="tglakhir">Tanggal Akhir</label>
          <input type="date" name="tglakhir" class="form-control" required>
      </div>
      <div class="form-group mt-3">
        <button type="submit" class="btn btn-dark" >
          <span data-feather="search"></span>
          Search
        </button>
      </div>
    </form>
  </div>
</div>






@endsection