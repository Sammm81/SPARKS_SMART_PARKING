@extends('Layout/public')

@section('style')
  <link href="{{ asset('css/login.css') }}" rel="stylesheet" >
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
@endsection

@section('hero')
  <main class="form-signin fullscreen">

    @if(session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif
    @if(session()->has('loginError'))
      <div class="alert alert-danger" role="alert">
        {{ session('loginError') }}
      </div>
    @endif

    <form action="/login" method="POST">
      @csrf
      <h1 class="h3 mb-3 fw-normal text-center pt-5 pb-3">Login Here</h1>

      <div class="form-floating">
        <input type="email" name="email" class="form-control" @error('email') is-invalid @enderror id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
        <label for="email">Email</label>
        @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>            
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" @error('password') is-invalid @enderror id="password" placeholder="Password" required>
        <label for="password">Password</label>
        @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>            
        @enderror
      </div>

      {{-- <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div> --}}
      <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
      <p class="mt-3 mb-3 text-muted text-center">Not Registered? <a href="/register">Register Now!</a></p>
      <p class="mt-5 mb-3 text-muted text-center">&copy; Smart Parking - Copyright</p>
    </form>
  </main>
@endsection