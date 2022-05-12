@extends('Layout/user')

@section('style')
    
@endsection

@section('hero')
    <div class="container mt-5 pt-5">
        <h1 class="display-1">Choose the place :</h1>
    </div>
@endsection

@section('content')
{{-- @dump($session) --}}
<div class="container mt-5 fullscreen">
    <div class="row">
        @foreach ($data['Details'] as $place)
        <form action="/user/place" method="post" class="col-3">
            @csrf
            <input type="hidden" value="{{ $place['id'] }}" name="placeId">
            <div class="card shadow-lg p-3" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title fs-4">{{ $place['place_name'] }}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="submit"class="btn btn-primary">Choose</button>
                </div>
            </div>
        </form>
        @endforeach
    </div>
</div>
@endsection

@section('script')
    
@endsection