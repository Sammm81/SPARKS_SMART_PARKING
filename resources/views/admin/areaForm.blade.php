@extends('Layout/admin')

@section('style')

@endsection

@section('content')
    @if ($action == 'add')
    <form action="/admin/add/area" method="POST" class="container fullscreen">
        @csrf
        <h1 class="h3 fw-lighter text-center mt-5 py-5 display-3">EDIT AREA</h1>
    
        {{-- Place_id --}}
        <div class="form-floating">
            <input type="text" name="placeId" class="form-control rounded-top" id="placeId" placeholder="placeId">
            <label for="placeId">Place Id</label>
        </div>
    
        {{-- name --}}
        <div class="form-floating">
            <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Name">
            <label for="name">Name</label>
        </div>
    
        <button class="w-100 btn btn-lg btn-primary" type="submit">SUBMIT</button>
    </form>
    @else
    <form action="/admin/edit/area" method="POST" class="container fullscreen">
        @csrf
        <h1 class="h3 fw-lighter text-center mt-5 py-5 display-3">EDIT AREA</h1>
    
        {{-- id --}}
        <div class="form-floating">
            <input type="text" disabled name="id" value="{{ $data['Details']['id'] }}" class="form-control rounded-top" id="id" placeholder="id">
            <label for="id">id</label>
        </div>

        {{-- name --}}
        <div class="form-floating">
            <input type="text" name="name" value="{{ $data['Details']['area_name'] }}" class="form-control rounded-top" id="name" placeholder="Name">
            <label for="name">Name</label>
        </div>

        {{-- full --}}
        <div class="form-floating">
            <input type="full" name="full" value="{{ $data['Details']['full'] }}" class="form-control" id="full" placeholder="1/0">
            <label for="full">Full</label>
        </div>
    
        <button class="w-100 btn btn-lg btn-primary" type="submit">SUBMIT</button>
    </form>
    @endif
@endsection