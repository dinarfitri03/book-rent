@extends('layouts.mainlayout')

@section('title', 'Users')

@section('content')
    <h1>User List</h1>

    @if (session('status'))
        <div class="alert alert-success mt-5">
            {{ session('status') }}
        </div>
        @if (Session::get('message'))
            <div class="alert alert-warning" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif
    @endif

    <div class="mt-5 row d-flex justify-content-end">
        <div class="col-12 col-md-auto">
            <a href="/user-banned" class="btn btn-info">Show Banned Data</a>
            <a href="/registered-users" class="btn btn-primary me-4">New Registered User</a>
        </div>
    </div>

    <div class="my-5">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th class="col-sm-1">No.</th>
                    <th class="col-sm-5">Username</th>
                    <th class="col-sm-3">Phone</th>
                    <th class="col-sm-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->username }}</td>
                        <td>
                            @if ($item->phone)
                                {{ $item->phone }}
                            @else
                                -
                            @endif
                        </td>
                    <td>
                        <a href="user-detail/{{ $item->slug }}" class="btn btn-primary me-2">Detail</a>
                        <a href="/user-ban/{{ $item->slug }}" class="btn btn-danger">Ban User</a>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection