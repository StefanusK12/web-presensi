@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">List Presensi Hari Ini</h1>
</div>

<div class="mt-3">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Jam Masuk</th>
        <th scope="col">Jam Keluar</th>
        <th scope="col">Jumlah Jam Kerja</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($presensi as $item)
      <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->user->name }}</td>
        <td><?php echo date_format(date_create($item->tanggal), 'd-m-Y'); ?></td>
        <td>{{ $item->jammasuk }}</td>
        <td>{{ $item->jamkeluar }}</td>
        <td>{{ $item->jamkerja }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<div class="mt-4">
  <a href="/dashboard/admin/searchpresensi" style="color: black">
    <span data-feather="arrow-left-circle"></span>
  </a>
</div>

@endsection