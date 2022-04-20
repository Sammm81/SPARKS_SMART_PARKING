@extends('Layout/user')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/userDashboard.css') }}">
@endsection

@section('hero')
    <div class="container py-5 mt-5">

        {{-- Top Section --}}
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 py-5">WELCOME USER!</h1>
            </div>
            <div class="d-flex justify-content-center col-4 shadow-lg rounded">
                <i class="bi bi-book-half" style="font-size: 20rem;"></i>
            </div>
            <div class="d-flex align-items-center p-5 col-8 ">
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias quos provident aliquam eum unde error suscipit similique amet consectetur ad?</p>
            </div>
        </div>
    </div>
@endsection

@section('content')
    {{-- Promo Section --}}
    <div class="container-fluid bg-secondary text-white py-5">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 text-dark p-5 mx-4">GET THE PROMO NOW!</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3 d-flex align-items-center flex-column">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Cashback up to 10%!</h5>
                        <p class="card-text text-dark">claim this promo to get discount on your parking fee!</p>
                        <a href="#" class="card-link text-decoration none">Claim Now</a>
                        <a href="#" class="card-link text-decoration none">Not interested</a>
                    </div>
                </div>
            </div>
            <div class="col-3 d-flex align-items-center flex-column">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Cashback up to 10%!</h5>
                        <p class="card-text text-dark">claim this promo to get discount on your parking fee!</p>
                        <a href="#" class="card-link text-decoration none">Claim Now</a>
                        <a href="#" class="card-link text-decoration none">Not interested</a>
                    </div>
                </div>
            </div>
            <div class="col-3 d-flex align-items-center flex-column">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Cashback up to 10%!</h5>
                        <p class="card-text text-dark">claim this promo to get discount on your parking fee!</p>
                        <a href="#" class="card-link text-decoration none">Claim Now</a>
                        <a href="#" class="card-link text-decoration none">Not interested</a>
                    </div>
                </div>
            </div>
            <div class="col-3 d-flex align-items-center flex-column">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Cashback up to 10%!</h5>
                        <p class="card-text text-dark">claim this promo to get discount on your parking fee!</p>
                        <a href="#" class="card-link text-decoration none">Claim Now</a>
                        <a href="#" class="card-link text-decoration none">Not interested</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-5 text-center bg-warning">
        <a href="/user/category" class="link text-decoration-none text-dark"><h1 class="display-1">BOOK NOW</h1></a>
    </div>

    {{-- Place Section --}}
    <div class="container-fluid text-white py-5">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 text-dark p-5 mx-4">PLACE NEARBY</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3 d-flex align-items-center flex-column">
                <div class="card shadow-lg" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-dark">President University</h5>
                        <p class="card-text text-dark">claim this promo to get discount on your parking fee!</p>
                        <a href="#" class="card-link text-decoration none">Claim Now</a>
                        <a href="#" class="card-link text-decoration none">Add Favorites</a>
                    </div>
                </div>
            </div>
            <div class="col-3 d-flex align-items-center flex-column">
                <div class="card shadow-lg" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Living Plaza Jababeka</h5>
                        <p class="card-text text-dark">claim this promo to get discount on your parking fee!</p>
                        <a href="#" class="card-link text-decoration none">Claim Now</a>
                        <a href="#" class="card-link text-decoration none">Add Favorites</a>
                    </div>
                </div>
            </div>
            <div class="col-3 d-flex align-items-center flex-column">
                <div class="card shadow-lg" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-dark">District I Meikarta</h5>
                        <p class="card-text text-dark">claim this promo to get discount on your parking fee!</p>
                        <a href="#" class="card-link text-decoration none">Claim Now</a>
                        <a href="#" class="card-link text-decoration none">Add Favorites</a>
                    </div>
                </div>
            </div>
            <div class="col-3 d-flex align-items-center flex-column">
                <div class="card shadow-lg" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Mall Lippo Cikarang</h5>
                        <p class="card-text text-dark">claim this promo to get discount on your parking fee!</p>
                        <a href="#" class="card-link text-decoration-none">Book</a>
                        <a href="#" class="card-link text-decoration-none">Add Favorites</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container d-flex flex-row justify-content-center">
            <h3 class="h3 text-center text-dark mt-5 pt-5">More <img src="{{ asset('icons/chevron-down.svg') }}" alt=""></h3>
        </div>
    </div>
@endsection

@section('script')
    <script src="/js/main.js"></script>
@endsection