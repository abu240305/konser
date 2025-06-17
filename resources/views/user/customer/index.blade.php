@extends('user.layout.index')
@section('content')
<div class="container mt-5 mb-5">
    <h1 class="text-center">My Profile</h1>
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">Profile Informasi</h5>
            <p><strong>nama:</strong>{{$dataCustomer->nama_222086}}</p>
            <p><strong>alamat:</strong>{{$dataCustomer->alamat_222086}}</p>
            <p><strong>jenis kelamin:</strong>{{$dataCustomer->jenisKelamin_222086}}</p>
            <p><strong>tanggal lahir:</strong>{{$dataCustomer->tanggalLahir_222086}}</p>
            <p><strong>Email:</strong>{{$dataCustomer->email_222086}}</p>
            <div class="d-flex gap-2 mt-3">
                <form action="/customer/edit" method="post">
                    @csrf
                    <input type="hidden" name="idcustomer" value="{{ $dataCustomer->id }}">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>

                <a href="/logout" class="btn btn-secondary">Logout</a>
            </div>
        </div>
    </div>
</div>
@endsection