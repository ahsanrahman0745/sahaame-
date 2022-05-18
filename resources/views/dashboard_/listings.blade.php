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
                <th scope="col">Business Name</th>
                <th scope="col">Business type</th>
                <th scope="col">Country</th>
                <th scope="col">City</th>
                <th scope="col">Categories</th>
                <th scope="col">Tags</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            @foreach ( $listings as $lists )

            <tr>
                <td>{{ $lists->id }}</td>
                <td>{{ $lists->name }}</td>
                <td>{{ $lists->type_of_bus }}</td>
                <td>{{ $lists->country }}</td>
                <td>{{ $lists->city }}</td>
                <td>{{ $lists->categories }}</td>
                <td>{{ $lists->tags }}</td>
                <td><a href="/listings/{{$lists->id}}/delete" style="color:red;"><i class="fas fa-trash"></i></a></td>
                <td><a href="/dashboard/listings/{{$lists->id}}/edit" style="color:blue;"><i
                            class="fas fa-edit"></i></a></td>
            </tr>

            @endforeach

        </tbody>
    </table>
</div>
@endsection