@extends('Layout/user')

@section('style')
    
@endsection

@section('hero')
    <div class="container mt-5 pt-5">
        <h1 class="display-1">Booking Details :</h1>
    </div>
@endsection

@section('content')
    <div class="container-fluid bg-secondary fullscreen p-5">
        <h1 class="h1 text-white">Place <span style="margin-left: 180px"> : President University</span></h1><br>
        <h1 class="h1 text-white">Area <span style="margin-left: 190px"> : Front Lobby</span></h1><br>
        <h1 class="h1 text-white">Slot <span style="margin-left: 200px"> : A1</span></h1><br>
        <h1 class="h1 text-white">Book Status <span style="margin-left: 50px"> : Waiting</span></h1>
        <a href="/user/dashboard" class="btn btn-primary mt-5"><h1 class="display-3">Back to Dashboard</h1></a>
    </div>
@endsection

@section('script')
    
@endsection