@extends('dashboard.index')
@section('content')
<div class="container py-5 shadow p-3 mb-5 bg-white rounded rounded m-5">
    <div class="row justify-content-center">
        <div class="col mt-2">
            <h1> Registered a Businesses</h1>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Business Name</th>
                <th scope="col">Postal Code</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Email</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            @foreach ( $listings as $lists )

            <tr>
                <td>{{ $lists->id }}</td>
                <td>{{ $lists->name }}</td>
                <td>{{ $lists->last_name }}</td>
                <td>{{ $lists->name }}</td>
                <td>{{ $lists->zip_code }}</td>
                <td>{{ $lists->number }}</td>
                <td>{{ $lists->b_email }}</td>
                <td><a href="/listings/{{$lists->id}}/delete" style="color:red;"><i class="fas fa-trash"></i></a></td>
            </tr>

            @endforeach

        </tbody>
    </table>
</div>
@endsection