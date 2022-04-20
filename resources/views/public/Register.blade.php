@extends('Layout/public')

@section('style')
  <link href="{{ asset('css/register.css') }}" rel="stylesheet" >
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
    <form action="/register" method="POST">
      @csrf
      <h1 class="h3 fw-normal text-center mt-5 py-5">Register Here</h1>

      {{-- name --}}
      <div class="form-floating">
        <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name">
        <label for="name">Name</label>
        @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      {{-- email --}}
      <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com">
        <label for="email">Email address</label>
        @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      {{-- password --}}
      <div class="form-floating">
        <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password">
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
      <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
      <p class="mt-3 mb-3 text-muted text-center">Already Registered? <a href="/login">Login here!</a></p>
      <p class="mt-5 mb-3 text-muted text-center">&copy; SPARKS - Copyright</p>
    </form>
  </main>
@endsection

@section('content')
    
@endsection