@extends('user.layout.index')
@section('content')
<div class="container mt-5 mb-5">
    <h1 class="text-center">My Profile</h1>
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">Profile Informasi</h5>
            <p><strong>nama:</strong>abu</p>
            <p><strong>alamat:</strong>makassar</p>
            <p><strong>jenis kelamin:</strong>L</p>
            <p><strong>tanggal lahir:</strong>24-05-2025</p>
            <p><strong>Email:</strong>123222@gmail.com</p>
            <a href="/customer/edit" class="btn btn-primary">Edit Profile</a>
        </div>
    </div>
</div>
@endsection