@extends('dashboard.layout.main')

@section('container')
  
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Data Gaji Pegawai</h1>
</div> 

<div class="col-lg-8">
  <form method="post" action="{{ route('updategaji') }}" class="mb-5">

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
      <input type="text" class="form-control" id="tunjangan" name="tunjangan"">
    </div>
    
    <div class="mb-3">
      <label for="potongan" class="form-label">Potongan</label>
      <input type="text" class="form-control " id="potongan" name="potongan"">
    </div>
    
    <div class="mb-3">
      <label for="gaji_lembur" class="form-label">Gaji Lembur</label>
      <input type="text" class="form-control" id="gaji_lembur" name="gaji_lembur"">
    </div>
    
    <div class="mb-3">
      <label for="bonus" class="form-label">Bonus</label>
      <input type="text" class="form-control" id="bonus" name="bonus"">
    </div>

    <div class="mb-3">
      <p class="text-danger">* tulis 0, jika tidak ada nominal yang dimasukan</p>
    </div>

    <button type="submit" class="btn btn-primary">Update Salary</button>
  </form>
</div>

@endsection