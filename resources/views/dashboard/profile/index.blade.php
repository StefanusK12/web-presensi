@extends('dashboard.layout.main')

@section('container')

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Profile</h1>
  </div>
  
  @if (session()->has('success'))
  
  <div class="alert alert-success alert-dismissible fade show col-lg-2" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
      
  @endif

  <div class="container ms-0 fs-6">
    @foreach ($profile as $item)
        
    @endforeach
    <div class="row align-items-start ms-3 mt-1">
      <div class="col-sm-2">
        Username
      </div>
      <div class="col-sm-auto">
        : {{ $item->username }}
      </div>
    </div>
    
    <div class="row align-items-start ms-3 mt-1">
      <div class="col-sm-2">
        NIK
      </div>
      <div class="col-sm-auto">
        : {{ $item->nik }}
      </div>
    </div>

    <div class="row align-items-start ms-3 mt-1">
      <div class="col-sm-2">
        Name
      </div>
      <div class="col-sm-auto">
        : {{ $item->name }}
      </div>
    </div>

    <div class="row align-items-start ms-3 mt-1">
      <div class="col-sm-2">
        Phone Number
      </div>
      <div class="col-sm-auto">
        : {{ $item->nohp }}
      </div>
    </div>

    <div class="row align-items-start ms-3 mt-1">
      <div class="col-sm-2">
        Address
      </div>
      <div class="col-sm-auto">
        : {{ $item->address }}
      </div>
    </div>

    <div class="row align-items-start ms-3 mt-1">
      <div class="col-sm-2">
        Email
      </div>
      <div class="col-sm-auto">
        : {{ $item->email }}
      </div>
    </div>
    
    <div class="row align-items-start ms-3 mt-1">
      <div class="col-sm-2">
        Jabatan
      </div>
      <div class="col-sm-auto">
        : {{ $item->jabatan->name }}
      </div>

    </div>
    <a href="/dashboard/profile/{{ auth()->user()->id }}/edit" class="btn btn-dark btn-md mt-3 ms-4"><span data-feather="edit"></span> Edit Profile</a>
  </div>

  @endsection