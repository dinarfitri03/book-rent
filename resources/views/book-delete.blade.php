@extends('layouts.mainlayout')

@section('title', 'Delete Book')

@section('content')
    <form action="/book-destroy/{{ $book->slug }}" method="GET"
        class="mx-auto card shadow col-6 d-flex justify-content-center align-items-center">
        @csrf
        @method('DELETE')
        <h3 class="card-title m-5 text-center">
            Are you sure to delete book <b>{{ $book->title }}</b>?</h3>

        <div class="card-body mb-5">
            <button class="btn btn-danger me-5" type="submit">Sure Delete</button>
            <a href="/books" class="btn btn-light">Cancel</a>
        </div>
    </form>
@endsection