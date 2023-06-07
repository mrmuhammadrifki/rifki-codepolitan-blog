@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-md-8 col-lg-5">
      <div class="card card-bg rounded-0 p-3">
          <div class="card-body">
            <h5 class="card-title mb-4 title fs-1">Registration Form</h5>
            <form class="form-registration" action="/register" method="post">
                @csrf
              <div class="mb-3">
                <label for="name" class="form-label label">Nama</label>
                <input type="text" class="form-control p-2 @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">
                   {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="username" class="form-label label">Username</label>
                <input type="text" class="form-control p-2 @error('username') is-invalid @enderror" id="username" name="username"  value="{{ old('username') }}">
                @error('username')
                <div class="invalid-feedback">
                   {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="email" class="form-label label">Email</label>
                <input type="email" class="form-control p-2 @error('email') is-invalid @enderror" id="email" name="email"  value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                   {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-4">
                <label for="password" class="form-label label">Password</label>
                <input type="password" class="form-control p-2 @error('password') is-invalid @enderror" id="password" name="password">
                @error('password')
                <div class="invalid-feedback">
                   {{ $message }}
                </div>
                @enderror
              </div>
              <div class="row mb-3">
                  <div class="col-md-6  mb-3 mb-md-0">
                      <button type="button" class="btn btn-custom btn-facebook w-100 rounded-pill">Facebook</button>
                  </div>
                  <div class="col-md-6">
                      <button type="button" class="btn btn-custom btn-warning w-100 rounded-pill">Google</button>
                  </div>
              </div>
              <div class="d-grid">
                  <button type="submit" class="btn btn-login">REGISTER</button>
              </div>
            </form>
            <small class="text-white d-block text-center mt-4">Already Registered? <a href="/login" style="color: #4267b2">Login</a></small>
          </div>
        </div>
  </div>
</div>
@endsection


