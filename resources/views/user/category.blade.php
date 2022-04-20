@extends('Layout/user')

@section('style')
    
@endsection

@section('hero')
    <div class="container p-5 fullscreen d-flex align-items-center justify-content-center">
        <div class="row p-5">
            <div class="col-6">
                <form action="/user/category" method="post">
                    <div class="card text-center card-long">
                        @csrf
                        <input type="hidden" value="car" name="category">
                        <button type="submit" class="form-button">
                            <h1 class="display-1 shadow-lg p-5">CAR</h1>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <form action="/user/category" method="post">
                    <div class="card text-center card-long">
                        @csrf
                        <input type="hidden" value="motor" name="category">
                        <button type="submit" class="form-button">
                            <h1 class="display-1 shadow-lg p-5">MOTOR</h1>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('content')
    
@endsection

@section('script')
    
@endsection