@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">List Presensi Hari Ini</h1>
</div>

<div class="d-flex justify-content-start">
  <div class="form-group">
    <form action="/dashboard/admin/searchpresensi/list">
      <label for="date">Masukan Tanggal</label>
      <input type="date" name="date" id="date" class="form-control" required>
      <button type="submit" class="btn btn-dark mt-3" >
        <span data-feather="search"></span>
        Search
      </button>
    </form>
  </div>
</div>

@endsection