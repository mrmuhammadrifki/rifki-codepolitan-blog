@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-4 col-md-7">
      <div class="card card-bg rounded-0 p-3">
          <div class="card-body">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('loginError') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <h5 class="card-title mb-4 title">Login</h5>
            <form action="/login" method="post">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label label">Email</label>
                <input type="email" class="form-control p-2 @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" autofocus required>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-4">
                <label for="password" class="form-label label">Password</label>
                <input type="password" class="form-control p-2" id="password" name="password" required>
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
                  <button type="submit" class="btn btn-login">LOGIN</button>
              </div>
            </form>
            <small class="text-white d-block text-center mt-4">Not Registered? <a href="/register" style="color: #4267b2">Register Now</a></small>
          </div>
        </div>
  </div>
</div>
@endsection