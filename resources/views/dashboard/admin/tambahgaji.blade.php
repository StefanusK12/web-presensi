@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Tambah Data Gaji Pegawai</h1>
</div> 

@if (session()->has('exists'))

    <div class="alert alert-danger alert-dismissible fade show col-lg-3" role="alert">
      {{ session('exists') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@endif


<div class="col-lg-8">
  <form method="post" action="{{ route('simpangaji') }}" class="mb-5">

    @csrf

    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <select class="form-select" name="nama">

        @foreach ($pegawai as $item)
          @if (old('id') == $item->id)
            <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
          @else
            <option value="{{ $item->id }}">{{ $item->name }}</option>
          @endif
        @endforeach

      </select>
    </div>
    
    <div class="mb-3">
      <label for="tunjangan" class="form-label">Tunjangan</label>
      <input type="text" class="form-control @error('tunjangan') is-invalid @enderror" id="tunjangan" name="tunjangan" value="{{ old('tunjangan') }}">
      @error('tunjangan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    
    <div class="mb-3">
      <label for="potongan" class="form-label">Potongan</label>
      <input type="text" class="form-control @error('potongan') is-invalid @enderror" id="potongan" name="potongan" value="{{ old('potongan') }}">
      @error('potongan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    
    <div class="mb-3">
      <label for="gaji_lembur" class="form-label">Gaji Lembur</label>
      <input type="text" class="form-control @error('gaji_lembur') is-invalid @enderror" id="gaji_lembur" name="gaji_lembur" value="{{ old('gaji_lembur') }}">
      @error('gaji_lembur')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    
    <div class="mb-3">
      <label for="bonus" class="form-label">Bonus</label>
      <input type="text" class="form-control @error('bonus') is-invalid @enderror" id="bonus" name="bonus" value="{{ old('bonus') }}">
      @error('bonus')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <p class="text-danger">* tulis 0, jika tidak ada nominal yang dimasukan</p>
    </div>

    <button type="submit" class="btn btn-primary">Add</button>
  </form>
</div>

@endsection