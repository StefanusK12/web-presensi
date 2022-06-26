@extends('dashboard.layout.main')

@section('container')
    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Monthly Salary Reports</h1>
</div>

<div class="container">
  @foreach ($salary as $item)
  <div class="row mt-5">
    <div class="col col-lg-8 border-bottom">
      <h1 class="text-center">PT XYZ</h1>
      <p class="text-center">Jl. Pawiyatan Luhur Sel. IV No.1, Bendan Duwur, Kec. Gajahmungkur, Kota Semarang, Jawa Tengah 50234 </p>
    </div>
    <div class="fs-6">
      <div class="row align-items-start ms-3 mt-3 fw-bold">
        <div class="col-sm-1">
          Periode
        </div>
        <div class="col-sm-auto">
          : {{ date('M Y', strtotime($item->tanggal)) }}
        </div>
      </div>
      <div class="row align-items-start ms-3 mt-1">
        <div class="col-sm-1">
          Nama
        </div>
        <div class="col-sm-auto">
          : {{ $item->user->name }}
        </div>
      </div>
      <div class="row align-items-start ms-3 mt-1">
        <div class="col-sm-1">
          NIK
        </div>
        <div class="col-sm-auto">
          : {{ $item->user->nik }}
        </div>
      </div>
      <div class="row align-items-start ms-3 mt-1">
        <div class="col-sm-1">
          Jabatan
        </div>
        <div class="col-sm-auto">
          : {{ $item->user->jabatan->name }}
        </div>
      </div>
    </div>
  </div>

  <div class="col col-lg-5 mt-3 fs-6">
    <table class="table table-hover table-bordered" align="center">
      <thead>
        <td class="fw-bold text-center" colspan="2">Rincian</td>
      </thead>
      <tbody>
        <tr>
          <td>Gaji Pokok</td>
          <td>@currency($item->user->jabatan->gaji_pokok)</td>
        </tr>
        <tr>
          <td>Tunjangan</td>
          <td>@currency($item->tunjangan)</td>
        </tr>
        <tr>
          <td>Potongan</td>
          <td>@currency($item->potongan)</td>
        </tr>
        <tr>
          <td>Gaji Lembur</td>
          <td>@currency($item->gaji_lembur)</td>
        </tr>
        <tr>
          <td>Bonus</td>
          <td>@currency($item->bonus)</td>
        </tr>
        <tr>
          <td class="fw-bold">Total</td>
          <td class="fw-bold">@currency(($item->user->jabatan->gaji_pokok) + ($item->tunjangan)- ($item->potongan) + ($item->gaji_lembur) + ($item->bonus))</td>
        </tr>
      </tbody>
    </table>

    <div class="container">
      <div class="row">
        Semarang, {{ date('d M Y', strtotime($item->tanggal)) }}
      </div><br><br>
      <div class="row">
        HRD Dept.
      </div>
    </div>
  </div>
  
  @endforeach  

  <div class="mt-5 mb-3">
    <a href="/dashboard/gaji" style="color: black">
      <span data-feather="arrow-left-circle"></span>
    </a>
  </div>
</div>

@endsection