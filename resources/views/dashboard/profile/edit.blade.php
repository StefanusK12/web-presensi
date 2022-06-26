@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit My Profile</h1>
</div>

<div class="col-lg-4">
  <form method="post" action="/dashboard/profile/{{ auth()->user()->id }}" class="mb-5">

    @method('put')

    @csrf

    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required autofocus value="{{ old('username', auth()->user()->username) }}">
      @error('username')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    
    <div class="mb-3">
      <label for="nik" class="form-label">NIK</label>
      <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" required value="{{ old('nik', auth()->user()->nik) }}">
      @error('nik')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name',  auth()->user()->name) }}">
      @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="nohp" class="form-label">Phone Number</label>
      <input type="text" class="form-control @error('nohp') is-invalid @enderror" id="nohp" name="nohp" required value="{{ old('nohp', auth()->user()->nohp) }}">
      @error('nohp')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    
    <div class="mb-3">
      <label for="address" class="form-label">Address</label>
      <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" required value="{{ old('address', auth()->user()->address) }}">
      @error('address')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email', auth()->user()->email) }}">
      @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>


    <button type="submit" class="btn btn-primary">Update Profile</button>
    <button type="button" class="btn btn-danger">
    <a href="/dashboard/profile" class="text-light" style="text-decoration: none">Cancel</a>
    </button>

    
  </form>
</div>

@endsection