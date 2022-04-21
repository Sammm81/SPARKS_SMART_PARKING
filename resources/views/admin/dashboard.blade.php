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
            <div class="col-2 d-flex align-items-center flex-column">
                <div class="card" style="width: 10rem;">
                    <div class="card-body">
                        <h5 class="card-title text-dark text-center fs-2">USER</h5>
                        <div class="d-flex flex-row justify-content-evenly pt-2">
                            <a href="/admin/users" class="text-decoration-none"><h5 class="card-title text-dark fs-5">view</h5></a>
                            <a href="/admin/add/users" class="text-decoration-none"><h5 class="card-title text-dark fs-5">add</h5></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 d-flex align-items-center flex-column">
                <div class="card" style="width: 10rem;">
                    <div class="card-body">
                        <h5 class="card-title text-dark text-center fs-2">SLOT</h5>
                        <div class="d-flex flex-row justify-content-evenly pt-2">
                            <a href="/admin/slot" class="text-decoration-none"><h5 class="card-title text-dark fs-5">view</h5></a>
                            <a href="/admin/add/slot" class="text-decoration-none"><h5 class="card-title text-dark fs-5">add</h5></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 d-flex align-items-center flex-column">
                <div class="card" style="width: 10rem;">
                    <div class="card-body">
                        <h5 class="card-title text-dark text-center fs-2">PLACE</h5>
                        <div class="d-flex flex-row justify-content-evenly pt-2">
                            <a href="/admin/place" class="text-decoration-none"><h5 class="card-title text-dark fs-5">view</h5></a>
                            <a href="/admin/add/place" class="text-decoration-none"><h5 class="card-title text-dark fs-5">add</h5></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 d-flex align-items-center flex-column">
                <div class="card" style="width: 10rem;">
                    <div class="card-body">
                        <h5 class="card-title text-dark text-center fs-2">AREA</h5>
                        <div class="d-flex flex-row justify-content-evenly pt-2">
                            <a href="/admin/area" class="text-decoration-none"><h5 class="card-title text-dark fs-5">view</h5></a>
                            <a href="/admin/add/area" class="text-decoration-none"><h5 class="card-title text-dark fs-5">add</h5></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 d-flex align-items-center flex-column">
                <div class="card" style="width: 12rem;">
                    <div class="card-body">
                        <h5 class="card-title text-dark text-center fs-2">PAYMENT</h5>
                        <div class="d-flex flex-row justify-content-evenly pt-2">
                            <a href="/admin/payment" class="text-decoration-none"><h5 class="card-title text-dark fs-5">view</h5></a>
                            <a href="/admin/add/payment" class="text-decoration-none"><h5 class="card-title text-dark fs-5">add</h5></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 d-flex align-items-center flex-column">
                <div class="card" style="width: 11rem;">
                    <div class="card-body">
                        <h5 class="card-title text-dark text-center fs-2">BOOK</h5>
                        <div class="d-flex flex-row justify-content-evenly pt-2">
                            <a href="/admin/book" class="text-decoration-none"><h5 class="card-title text-dark fs-5">view</h5></a>
                            <a href="/admin/add/book" class="text-decoration-none"><h5 class="card-title text-dark fs-5">add</h5></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluidtext-center bg-warning halfscreen d-flex align-items-center justify-content-center">
        <a href="#" class="link text-decoration-none text-dark"><h1 class="display-1">--------</h1></a>
    </div>
@endsection

@section('script')
    <script src="/js/main.js"></script>
@endsection