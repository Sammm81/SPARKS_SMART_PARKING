@extends('Layout/user')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/userPayment.css') }}">
@endsection

@section('hero')
    <div class="container">
        <div class="row">

        </div>
    </div>
@endsection

@section('content')
    {{-- Transaction --}}
    <div class="container-fluid bg-dark fullscreen">
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
            <a href="/user/dashboard" class="text-decoration-none btn btn-primary"><h1 class="display-4">Back to Dashboard</h1></a>
        </div>
    </div>
@endsection

@section('script')
    <script src="/js/main.js"></script>
@endsection