@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Data Gaji Pegawai</h1>
</div>

@if (session()->has('success'))

    <div class="alert alert-success alert-dismissible fade show col-lg-3" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
@elseif (session()->has('success1'))
  <div class="alert alert-success alert-dismissible fade show col-lg-3" role="alert">
    {{ session('success1') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<div class="col col-lg-auto">

  <a href="/dashboard/admin/tambahgaji" class="btn btn-dark mb-3">
    <span data-feather="plus"></span>
    Add new salary
  </a>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama Pegawai</th>
        <th scope="col">Periode</th>
        <th scope="col">Gaji Pokok</th>
        <th scope="col">Tunjangan</th>
        <th scope="col">Potongan</th>
        <th scope="col">Gaji Lembur</th>
        <th scope="col">Bonus</th>
        <th scope="col">Total Gaji</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pegawai as $item)
      <tr>
        <td>{{ $item->user->id }}</td>
        <td>{{ $item->user->name }}</td>
        <td>{{ date('M Y', strtotime($item->tanggal)) }}</td>
        <td>@currency($item->user->jabatan->gaji_pokok)</td>
        <td>@currency($item->tunjangan)</td>
        <td>@currency($item->potongan)</td>
        <td>@currency($item->gaji_lembur)</td>
        <td>@currency($item->bonus)</td>
        <td>
          @currency(($item->user->jabatan->gaji_pokok) + ($item->tunjangan)- ($item->potongan) + ($item->gaji_lembur) + ($item->bonus))
        </td>
        <td>
          <a href="/dashboard/admin/editgaji/{{ $item->id }}" class="badge bg-info">
            <span data-feather="edit"></span>
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
</div>
    
@endsection