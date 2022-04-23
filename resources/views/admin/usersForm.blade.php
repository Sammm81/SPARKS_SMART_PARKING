@extends('Layout/admin')

@section('style')

@endsection

@section('content')
    @if ($action == 'add')
    <form action="/admin/add/users" method="POST" class="container fullscreen">
        @csrf
        <h1 class="h3 fw-lighter text-center mt-5 py-5 display-3">ADD USER</h1>
    
        {{-- name --}}
        <div class="form-floating">
            <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Name">
            <label for="name">Name</label>
        </div>
    
        {{-- email --}}
        <div class="form-floating">
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
            <label for="email">Email address</label>
        </div>
    
        {{-- password --}}
        <div class="form-floating">
            <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
            <label for="password">Password</label>
        </div>
    
        <button class="w-100 btn btn-lg btn-primary" type="submit">SUBMIT</button>
    </form>
    @else
    <form action="/admin/edit/users" method="POST" class="container fullscreen">
        @csrf

        <h1 class="h3 fw-lighter text-center mt-5 py-5 display-3">EDIT USER</h1>

        {{-- id --}}
        <div class="form-floating">
            <input type="hidden" name="id" value="{{ $data['Details']['id'] }}" class="form-control rounded-top" id="id" placeholder="id">
            <label for="id">id</label>
        </div>

        {{-- name --}}
        <div class="form-floating">
            <input type="text" name="name" value="{{ $data['Details']['name'] }}" class="form-control rounded-top" id="name" placeholder="Name">
            <label for="name">Name</label>
        </div>
    
        {{-- email --}}
        <div class="form-floating">
            <input type="email" name="email" value="{{ $data['Details']['email'] }}" class="form-control" id="email" placeholder="name@example.com">
            <label for="email">Email address</label>
        </div>

        {{-- Admin --}}
        <div class="form-floating">
            <input type="admin" name="admin" value="{{ $data['Details']['admin'] }}" class="form-control" id="admin" placeholder="1/0">
            <label for="admin">Admin</label>
        </div>

        {{-- Balance --}}
        <div class="form-floating">
            <input type="balance" name="balance" value="{{ $data['Details']['balance'] }}" class="form-control" id="balance" placeholder="name@example.com">
            <label for="balance">Balance</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">SUBMIT</button>
    </form>
    @endif
@endsection