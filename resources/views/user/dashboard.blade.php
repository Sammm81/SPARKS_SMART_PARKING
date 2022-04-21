@extends('Layout/user')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/userDashboard.css') }}">
@endsection

@section('hero')
    <div class="container py-5 mt-5">

        {{-- Top Section --}}
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 py-5">Welcome {{ $session_data['name']}}!</h1>
            </div>
            <img src="{{ asset('icons/calendar2-check.svg') }}" alt="" width="200px" height="200px" class="col-2 offset-1 rounded">
            <div class="d-flex align-items-center p-5 offset-1 col-8 ">
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias quos provident aliquam eum unde error suscipit similique amet consectetur ad?</p>
            </div>
        </div>
    </div>
@endsection

@section('content')
@dump($session_data)
    {{-- Promo Section --}}
    <div class="container-fluid bg-dark text-white py-5">
        <div class="row">
            <div class="col-12">
                <h1 class="display-3 text-white p-5 mx-4">GET THE PROMO NOW!</h1>
            </div>
        </div>
        <div class="row py-3 mb-5">
            <div class="col-3 d-flex align-items-center flex-column">
                <div class="card p-3" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Cashback up to 10%!</h5>
                        <p class="card-text text-dark">claim this promo to get discount on your parking fee!</p>
                        <a href="#" class="card-link text-decoration none">Claim Now</a>
                        <a href="#" class="card-link text-decoration none">Not interested</a>
                    </div>
                </div>
            </div>
            <div class="col-3 d-flex align-items-center flex-column">
                <div class="card p-3" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Voucher up to 50%!</h5>
                        <p class="card-text text-dark">Parking on hotel? claim this voucher to get discount</p>
                        <a href="#" class="card-link text-decoration none">Claim Now</a>
                        <a href="#" class="card-link text-decoration none">Not interested</a>
                    </div>
                </div>
            </div>
            <div class="col-3 d-flex align-items-center flex-column">
                <div class="card p-3" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title text-dark">National Holiday Package!</h5>
                        <p class="card-text text-dark">claim this promo to get discount on your parking fee!</p>
                        <a href="#" class="card-link text-decoration none">Claim Now</a>
                        <a href="#" class="card-link text-decoration none">Not interested</a>
                    </div>
                </div>
            </div>
            <div class="col-3 d-flex align-items-center flex-column">
                <div class="card p-3" style="width: 20rem;">
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
        <div class="row container">
            <div class="col-12">
                <h1 class="display-3 text-dark p-5 mx-4">PLACE NEARBY</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            @for ($i = 0; $i < 4; $i++)
            <div class="card col-4 p-5 m-5 shadow-lg" style="width: 20rem;">
                <h5 class="card-title text-dark fs-5">{{ $places['Details'][$i]['place_name'] }}</h5>
                <div class="d-flex flex-row">
                    <a href="/user/category" class="card-link text-decoration-none">Book Now</a>
                    <a href="#" class="card-link text-decoration-none">Add to Favorites</a>
                </div>
            </div>
            @endfor
        </div>
        <div class="container d-flex flex-row justify-content-center">
            <h3 class="h3 text-center text-dark pt-5">More <img src="{{ asset('icons/chevron-down.svg') }}" alt=""></h3>
        </div>
    </div>

    {{-- Transaction --}}
    <div class="container-fluid bg-dark">
        <div class="container p-5">
            <a href="/user/payments" class="text-decoration-none"><h1 class="display-3 text-center text-white py-5">TRANSACTIONS</h1></a>
            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th scope="col"><h6 class="h6 text-center">Place</h4></th>
                        <th scope="col"><h6 class="h6 text-center">Area</h6></th>
                        <th scope="col"><h6 class="h6 text-center">Slot</h6></th>
                        <th scope="col"><h6 class="h6 text-center">Verified</h6></th>
                        <th scope="col"><h6 class="h6 text-center">Paid</h6></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($payments['Details'] as $data)
                        <tr>
                            <th scope="row"><h6 class="h6 text-center">{{ $data['place_name'] }}</h6></th>
                            <td><h6 class="h6 text-center">{{ $data['area_name'] }}</h6></td>
                            <td><h6 class="h6 text-center">{{ $data['slot_name'] }}</h6></td>
                            <td><h6 class="h6 text-center">{{ $data['verified'] }}</h6></td>
                            <td><h6 class="h6 text-center">{{ $data['paid'] }}</h6></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('script')
    <script src="/js/main.js"></script>
@endsection