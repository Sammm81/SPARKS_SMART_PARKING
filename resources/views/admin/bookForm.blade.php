@extends('Layout/admin')

@section('style')

@endsection

@section('content')
    @if ($action == 'add')
    <form action="/admin/add/book" method="POST" class="container fullscreen">
        @csrf
        <h1 class="h3 fw-lighter text-center mt-5 py-5 display-3">ADD BOOK</h1>
    
        {{-- User Id --}}
        <div class="form-floating">
            <input type="text" name="userId" class="form-control rounded-top" id="userId" placeholder="userId">
            <label for="userId">User Id</label>
        </div>

        {{-- Slot Id --}}
        <div class="form-floating">
            <input type="text" name="slotId" class="form-control rounded-top" id="slotId" placeholder="slotId">
            <label for="slotId">Slot Id</label>
        </div>
    
        <button class="w-100 btn btn-lg btn-primary" type="submit">SUBMIT</button>
    </form>
    @else
    <form action="/admin/edit/book" method="POST" class="container fullscreen">
        @csrf
        <h1 class="h3 fw-lighter text-center mt-5 py-5 display-3">EDIT BOOK</h1>

        {{-- id --}}
        <div class="form-floating">
            <input type="text" disabled name="id" value="{{ $data['Details']['id'] }}" class="form-control rounded-top" id="id" placeholder="id">
            <label for="id">id</label>
        </div>

        {{-- verified --}}
        <div class="form-floating">
            <input type="text" name="verified" value="{{ $data['Details']['verified'] }}" class="form-control rounded-top" id="verified" placeholder="verified">
            <label for="verified">verified</label>
        </div>
    
        <button class="w-100 btn btn-lg btn-primary" type="submit">SUBMIT</button>
    </form>
    @endif
@endsection 