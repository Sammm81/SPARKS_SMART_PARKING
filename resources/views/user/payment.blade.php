@extends('Layout/user')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/userPayment.css') }}">
@endsection

@section('hero')

@endsection

@section('content')
    {{-- Top up --}}

    <div class="container-fluid bg-dark halfscreen py-5">
        <h1 class="display-1 text-white text-center py-5">TOP UP</h1>
        <div class="container">
            <div class="row">
                <form action="/user/topup" method="POST" class="col-4">
                    @csrf
                    <div class="card pt-3">
                        <input type="hidden" name="topup" value="50000">
                        <h1 class="h1 text-center">50.000</h1>
                        <button type="submit" class="btn btn-primary">TOP UP</button>
                    </div>
                </form>
                <form action="/user/topup" method="POST" class="col-4">
                    @csrf
                    <div class="card pt-3">
                        <input type="hidden" name="topup" value="100000">
                        <h1 class="h1 text-center">100.000</h1>
                        <button type="submit" class="btn btn-primary">TOP UP</button>
                    </div>
                </form>
                <form action="/user/topup" method="POST" class="col-4">
                    @csrf
                    <div class="card pt-3">
                        <input type="hidden" name="topup" value="150000">
                        <h1 class="h1 text-center">150.000</h1>
                        <button type="submit" class="btn btn-primary">TOP UP</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($payments['Details'] as $data)
                        <tr>
                            <th scope="row"><h6 class="h6 text-center">{{ $data['place_name'] }}</h6></th>
                            <td><h6 class="h6 text-center">{{ $data['area_name'] }}</h6></td>
                            <td><h6 class="h6 text-center">{{ $data['slot_name'] }}</h6></td>
                            @if ($data['verified'] == 0)
                                <td><a href="/user/book/"><h6 class="h6 text-center btn btn-warning">Verify NOW</h6></a></td>
                            @else
                                <td><h6 class="h6 text-center btn btn-success">VERIFIED</h6></td>
                            @endif
                            @if ($data['paid'] == 0)
                                <td><a href="/user/payment/{{ $data['id'] }}"><h6 class="h6 text-center btn btn-warning">PAY NOW</h6></a></td>
                            @else
                                <td><h6 class="h6 text-center btn btn-success">PAID</h6></td>
                            @endif
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