@extends('Layout/user')

@section('style')
    
@endsection

@section('hero')
    <div class="container mt-5 pt-5">
        <h1 class="display-1">Choose the slot :</h1>
    </div>
@endsection

@section('content')
<div class="container mt-5 fullscreen">
    <form action="/user/slot" method="post">
        @csrf
        <input type="hidden" value="placeId" name="placeId">
        <div class="card shadow-lg p-3" style="width: 10rem;">
            <div class="card-body">
                <h5 class="card-title text-center fs-2">A1</h5>
                <button type="submit"class="btn btn-primary">Choose</button>
            </div>
        </div>
    </form>
</div>
@endsection

@section('script')
    
@endsection