<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Buku | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="main d-flex flex-column justify-content-between">
        <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">Rental Buku</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <div class="body-content h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarTogglerDemo03">
                    @if (Auth::user())
                        @if (Auth::user()->role_id == 1)
                            <a href="/dashboard" @if(request()->route()->url == 'dashboard') class='active' @endif>Dashboard</a>
                            <a href="/books" @if(request()->route()->url == 'books') class='active' @endif>Books</a>
                            <a href="/categories" @if(request()->route()->url == 'categories' || request()->route()
                            ->url == 'category-add' || request()->route()->url == 'category-deleted' ||
                            request()->route()->url == 'category-edit/{slug}' || request()->route()->url ==
                            'category-delete/{slug}') class='active' @endif>Categories</a>
                            <a href="/users" @if(request()->route()->url == 'users') class='active' @endif>Users</a>
                            <a href="/rent-logs" @if(request()->route()->url == 'rent-log') class='active' @endif>Rent Log</a>
                            <a href="/" @if(request()->route()->url == '/') class='active' @endif>Book List</a>
                            <a href="/book-rent" @if(request()->route()->url == 'book-rent') class='active' @endif>Book Rent</a>
                            <a href="/book-return" @if(request()->route()->url == 'book-return') class='active' @endif>Book Return</a>
                            <a href="/logout" >Logout</a>
                        @else
                            <a href="/profile" @if(request()->route()->url == 'profile') class='active' @endif>Profile</a>
                            <a href="/" @if(request()->route()->url == '/') class='active' @endif>Book List</a>
                            <a href="/logout">Logout</a>
                        @endif
                    @else
                        <a href="/login">Login</a>
                    @endif
                </div>
                <div class="content p-5 col-lg-10">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>