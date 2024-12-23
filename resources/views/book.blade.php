@extends('layouts.mainlayout')

@section('title', 'Book')

@section('content')
    <h1>Book List</h1>
    <div class="mt-5 row d-flex justify-content-end">
        <div class="col-12 col-md-auto">
            <a href="book-deleted" class="btn btn-secondary me-3">View Deleted Data</a>
            <a href="book-add" class="btn btn-primary">Add Data</a>
        </div>
    </div>
    <div class="mt-5">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>
    <div class="my-5">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th class="col-sm-1">No.</th>
                    <th class="col-sm-1">Code</th>
                    <th class="col-sm-4">Title</th>
                    <th class="col-sm-2">Category</th>
                    <th class="col-sm-2">Status</th>
                    <th class="col-sm-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->book_code }}</td>
                    <td>{{ $item->title }}</td>
                    <td>
                        @foreach ($item->categories as $category)
                        {{ $category-> name }}
                        <br>
                        @endforeach
                    </td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <a href="/book-edit/{{$item->slug}}" class="btn btn-primary me-2">Edit</a>
                        <a href="/book-delete/{{$item->slug}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection