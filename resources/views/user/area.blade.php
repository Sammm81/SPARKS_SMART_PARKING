@extends('Layout/user')

@section('style')
    
@endsection

@section('hero')
    <div class="container mt-5 pt-5">
        <h1 class="display-1">Choose the area :</h1>
    </div>
@endsection

@section('content')
<div class="container mt-5 fullscreen">
    <form action="/user/area" method="post">
        @csrf
        <input type="hidden" value="placeId" name="placeId">
        <div class="card shadow-lg p-3" style="width: 20rem;">
            <div class="card-body">
                <h5 class="card-title fs-4">Front Lobby</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="submit"class="btn btn-primary">Choose</button>
            </div>
        </div>
    </form>
</div>
@endsection

@section('script')
    
@endsection