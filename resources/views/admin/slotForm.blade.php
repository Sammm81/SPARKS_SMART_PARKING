@extends('Layout/admin')

@section('style')

@endsection

@section('content')
    @if ($action == 'add')
    <form action="/admin/add/slot" method="POST" class="container fullscreen">
        @csrf
        <h1 class="h3 fw-lighter text-center mt-5 py-5 display-3">ADD SLOT</h1>
    
        {{-- area_id --}}
        <div class="form-floating">
            <input type="text" name="areaId" class="form-control rounded-top" id="areaId" placeholder="areaId">
            <label for="areaId">Area Id</label>
        </div>
    
        {{-- name --}}
        <div class="form-floating">
            <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Name">
            <label for="name">Name</label>
        </div>
    
        <button class="w-100 btn btn-lg btn-primary" type="submit">SUBMIT</button>
    </form>
    @else
    <form action="/admin/edit/slot" method="POST" class="container fullscreen">
        @csrf
        <h1 class="h3 fw-lighter text-center mt-5 py-5 display-3">EDIT SLOT</h1>

        {{-- id --}}
        <div class="form-floating">
            <input type="text" disabled name="id" value="{{ $data['Details']['id'] }}" class="form-control rounded-top" id="id" placeholder="id">
            <label for="id">id</label>
        </div>
    
        {{-- name --}}
        <div class="form-floating">
            <input value="{{ $data['Details']['slot_name'] }}" type="text" name="name" class="form-control rounded-top" id="name" placeholder="Name">
            <label for="name">Name</label>
        </div>

        {{-- Book --}}
        <div class="form-floating">
            <input value="{{ $data['Details']['book'] }}" type="text" name="book" class="form-control rounded-top" id="book" placeholder="book">
            <label for="book">Book</label>
        </div>

        {{-- available --}}
        <div class="form-floating">
            <input value="{{ $data['Details']['available'] }}"type="text" name="available" class="form-control rounded-top" id="available" placeholder="available">
            <label for="available">available</label>
        </div>
    
        <button class="w-100 btn btn-lg btn-primary" type="submit">SUBMIT</button>
    </form>
    @endif
@endsection