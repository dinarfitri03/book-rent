@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('page-name', 'dashboard')

@section('content')
    <h1>Welcome, {{Auth::user()->username}}</h1>
    <div class="row mt-5">
        <div class="col-lg-4">
            <div class="card-data book">
                <div class="row">
                    <div class="col-6"><i class="bi bi-journal-bookmark"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Books</div>
                        <div class="card-count">{{$book_count}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-data category">
                <div class="row">
                    <div class="col-6"><i class="bi bi-list-task"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Categories</div>
                        <div class="card-count">{{$category_count}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-data user">
                <div class="row">
                    <div class="col-6"><i class="bi bi-people"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Users</div>
                        <div class="card-count">{{$user_count}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5"></div>
    <h1 align="center">Profile Admin</h1>
    <hr align="center" style="2">
    <table align="center" cellpadding="5" width="800">
        <tr>
            <td> NIM</td>
            <td>: 220101070403</td>
            <td align="center">Nama Mahasiswa : Dinar Fitri Vania Muti</td>
        </tr>
        <tr>
            <td> Tempat, Tanggal Lahir</td>
            <td>: Surabaya, 14 Desember 2002</td>
            <td rowspan="5" align="center"><img src="images/photo.jpg" width="100"></td>
        </tr>
        <tr>
            <td> Agama</td>
            <td>: Islam</td>
        </tr>
        <tr>
            <td> Jenis Kelamin</td>
            <td>: Perempuan</td>
        </tr>
        <tr>
            <td> Alamat</td>
            <td>: Surabaya</td>
        </tr>
        <tr>
            <td> Email</td>
            <td>: dinarf03@gmail.com</td>
        </tr>
    </table>
@endsection