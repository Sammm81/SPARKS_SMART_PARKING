@extends('Layout/user')

@section('style')
    
@endsection

@section('hero')
    <div class="container d-flex justify-content-center py-5 fullscreen">
        <div class="row">
            <div class="col-4 d-flex align-items-center justify-content-center">
                <img src="{{ asset('icons/person-circle.svg') }}" alt="" class="rounded-circle" width="250px" height="250px">
            </div>
            <div class="col-8 d-flex flex-column justify-content-center">
                <h1 class="display-3">{{ $data['Details']['name'] }}</h6>
                <p class="fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ratione placeat porro veritatis saepe voluptatem minima amet ducimus id cumque.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-warning">
        <div class="container py-5">
            <div class="row d-flex justify-content-evenly align-items-center">
                <div class="col-4 text-center">
                    <img src="{{ asset('icons/cash.svg') }}" alt="" class="rounded-circle" width="250px" height="250px">
                </div>
                <div class="col-4 text-center">
                    <h1 class="display-1">Rp{{ $data['Details']['balance'] }},~</h6>
                </div>
                <div class="col-4 text-center">
                    <h1 class="display-1">Balance</h6>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    
@endsection

@section('script')
    
@endsection