@extends('Layout/user')

@section('style')
    
@endsection

@section('hero')
    <div class="container mt-5 pt-5">
        <h1 class="display-1">Booking Details :</h1>
    </div>
@endsection

@section('content')
    <div class="container bg-dark fullscreen p-5">
        @if (is_null($data))
            <h1 class="h1 text-white">Place <span style="margin-left: 180px"> : {{ $data['Details']['place_name']}}</span></h1><br>
            <h1 class="h1 text-white">Area <span style="margin-left: 190px"> : {{ $data['Details']['area_name']}}</span></h1><br>
            <h1 class="h1 text-white">Slot <span style="margin-left: 200px"> : {{ $data['Details']['slot_name']}}</span></h1><br>
            @if ($data['Details']['verified'] == 0)
            <h1 class="h1 text-white">Book Status <span style="margin-left: 50px"> : {{ $data['Details']['book'] === '0'?'Waiting':'Booked'}}</span></h1><br>
            <h1 class="h1 text-white">Verified <span style="margin-left: 120px"> : {{ $data['Details']['verified']==='0'?'Waiting':'Verified'}}</span></h1><br>
            <form action="/user/token" method="post">
                @csrf
                <label for="token h1"><h1 class="h1 text-white">Input token <span style="margin-left: 60px">: </span></h1></label>&nbsp
                <input type="text" name="token" class="rounded" style="height: 50px" placeholder="Input token here">
                <button type="submit"class="btn btn-primary"><h1 class="fs-5 text">SEND</h1></button>
            </form>
            @else
            <h1 class="h1 text-white">Verified <span style="margin-left: 120px"> : {{ $data['Details']['verified']==='0'?'Waiting':'Verified'}}</span></h1><br>            
            @endif
            <a href="/user/dashboard" class="btn btn-primary mt-5"><h1 class="display-6">Back to Dashboard</h1></a>
        @else
            <h1 class="display-2 text-white">No Book Record need to verified, yet</h1>
            <a href="/user/dashboard" class="btn btn-primary mt-5"><h1 class="display-6">Back to Dashboard</h1></a>
        @endif
    </div>
@endsection

@section('script')
    
@endsection