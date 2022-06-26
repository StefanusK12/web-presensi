@extends('login.main')

@section('container')

  <div class="row justify-content-center">
    <div class="col-lg-5">
      <main class="form-registration">
        <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>

        <form action="/register" method="post">

          @csrf

          <div class="form-floating">
            <input type="text" name="nik" class="form-control rounded-top @error('nik') is-invalid @enderror" id="nik" placeholder="nik" required value="{{ old('nik') }}">
            <label for="nik">NIK</label>

            @error('nik')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-floating">
            <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
            <label for="name">Name</label>

            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-floating">
            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Name" required value="{{ old('address') }}">
            <label for="address">Address</label>

            @error('address')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-floating">
            <input type="text" name="nohp" class="form-control @error('nohp') is-invalid @enderror" id="nohp" placeholder="Name" required value="{{ old('nohp') }}">
            <label for="nohp">Phone Number</label>

            @error('nohp')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-floating">
            <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="name@example.com" required value="{{ old('username') }}">
            <label for="username">Username</label>

            @error('username')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          
          <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
            <label for="email">Email address</label>

            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-floating">
            <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
            <label for="password">Password</label>

            @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
        </form>

        <p class="d-block text-center mt-3">
          Already registered? <a href="/login" style="text-decoration:none">Login</a>
        </p>
      </main>
    </div>
  </div>

@endsection