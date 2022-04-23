@extends('Layout/admin')

@section('style')

@endsection

@section('content')
    @if ($action == 'add')
    <form action="/admin/add/payment" method="POST" class="container fullscreen">
        @csrf
        <h1 class="h3 fw-lighter text-center mt-5 py-5 display-3">ADD PAYMENT</h1>
    
        {{-- Book Id --}}
        <div class="form-floating">
            <input type="text" name="bookId" class="form-control rounded-top" id="bookId" placeholder="bookId">
            <label for="bookId">Book Id</label>
        </div>
    
        <button class="w-100 btn btn-lg btn-primary" type="submit">SUBMIT</button>
    </form>
    @else
    <form action="/admin/edit/payment" method="POST" class="container fullscreen">
        @csrf
        <h1 class="h3 fw-lighter text-center mt-5 py-5 display-3">EDIT PAYMENT</h1>
    
        {{-- id --}}
        <div class="form-floating">
            <input type="hidden" name="id" value="{{ $data['Details']['id'] }}" class="form-control rounded-top" id="id" placeholder="id">
            <label for="id">id</label>
        </div>

        {{-- paid --}}
        <div class="form-floating">
            <input type="text" name="paid" value="{{ $data['Details']['paid'] }}" class="form-control rounded-top" paid="paid" placeholder="paid">
            <label for="paid">paid</label>
        </div>
    
        <button class="w-100 btn btn-lg btn-primary" type="submit">SUBMIT</button>
    </form>
    @endif
@endsection