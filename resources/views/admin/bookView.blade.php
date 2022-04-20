@extends('Layout/admin')

@section('style')
    
@endsection

@section('content')
    <div class="container mt-5 pt-5">
        <h1 class="display-1">ALL BOOK</h1>
    </div>
    <div class="container fullscreen">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">User_id</th>
                    <th scope="col">Slot_id</th>
                    <th scope="col">Token</th>
                    <th scope="col">Verified</th>
                    <th scope="col">Record</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas['Details'] as $data)
                    <tr>
                        <th scope="row">{{ $data['id'] }}</th>
                        <td>{{ $data['user_id'] }}</td>
                        <td>{{ $data['slot_id'] }}</td>
                        <td>{{ $data['token'] }}</td>
                        <td>{{ $data['verified'] }}</td>
                        <td>{{ $data['record'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container">
        <a href="/admin/dashboard" class="btn btn-primary text-decoration-none">Back to Dashboard</a>
    </div>
@endsection

@section('script')
    
@endsection