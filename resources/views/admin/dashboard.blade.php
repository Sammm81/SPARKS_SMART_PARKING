@extends('Layout/admin')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/userDashboard.css') }}">
@endsection



@section('content')
    <div class="container py-5 mt-5">
        {{-- Top Section --}}
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 py-5 text-center">WELCOME ADMIN!</h1>
            </div>
        </div>
    </div>

    {{-- View Section --}}
    <div class="container-fluid bg-secondary text-white py-5">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 text-dark p-5 mx-4">VIEW DATA :</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-2 d-flex align-items-center flex-column">
                <div class="card" style="width: 10rem;">
                    <div class="card-body">
                        <a href="/admin/users" class="text-decoration-none"><h5 class="card-title text-dark text-center fs-3">USER</h5></a>
                    </div>
                </div>
            </div>
            <div class="col-2 d-flex align-items-center flex-column">
                <div class="card" style="width: 10rem;">
                    <div class="card-body">
                        <a href="/admin/slots" class="text-decoration-none"><h5 class="card-title text-dark text-center fs-3">SLOT</h5></a>
                    </div>
                </div>
            </div>
            <div class="col-2 d-flex align-items-center flex-column">
                <div class="card" style="width: 10rem;">
                    <div class="card-body">
                        <a href="/admin/places" class="text-decoration-none"><h5 class="card-title text-dark text-center fs-3">PLACE</h5></a>
                    </div>
                </div>
            </div>
            <div class="col-2 d-flex align-items-center flex-column">
                <div class="card" style="width: 10rem;">
                    <div class="card-body">
                        <a href="/admin/areas" class="text-decoration-none"><h5 class="card-title text-dark text-center fs-3">AREA</h5></a>
                    </div>
                </div>
            </div>
            <div class="col-2 d-flex align-items-center flex-column">
                <div class="card" style="width: 11rem;">
                    <div class="card-body">
                        <a href="/admin/payments" class="text-decoration-none"><h5 class="card-title text-dark text-center fs-3">PAYMENT</h5></a>
                    </div>
                </div>
            </div>
            <div class="col-2 d-flex align-items-center flex-column">
                <div class="card" style="width: 11rem;">
                    <div class="card-body">
                        <a href="/admin/books" class="text-decoration-none"><h5 class="card-title text-dark text-center fs-3">BOOK</h5></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-5 text-center bg-warning">
        <a href="#" class="link text-decoration-none text-dark"><h1 class="display-1">--------</h1></a>
    </div>
@endsection

@section('script')
    <script src="/js/main.js"></script>
@endsection