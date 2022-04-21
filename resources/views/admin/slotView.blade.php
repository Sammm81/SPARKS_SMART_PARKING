@extends('Layout/admin')

@section('style')
    
@endsection

@section('content')
    <div class="container mt-5 pt-5">
        <h1 class="display-1">ALL SLOT</h1>
    </div>
    <div class="container fullscreen">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">area_id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Book</th>
                    <th scope="col">Available</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas['Details'] as $data)
                    <tr>
                        <th scope="row">{{ $data['id'] }}</th>
                        <td>{{ $data['area_id'] }}</td>
                        <td>{{ $data['name'] }}</td>
                        <td>{{ $data['book'] }}</td>
                        <td>{{ $data['available'] }}</td>
                        <td><a href="/admin/edit/slot/{{ $data['id'] }}" class="btn btn-warning">EDIT</a></td>
                        <td><a href="/admin/delete/slot/{{ $data['id'] }}" class="btn btn-danger">DELETE</a></td>
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