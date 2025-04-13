@extends('user.layout.index')
@section('content')
<div class="container mt-5 mb-5">
    <h2>Edit Profile</h2>
    <form action="#" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" >
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="nama" name="nama" >
        </div>
        <div class="form-group">
            <label for="jenisKelamin">Jenis kelamin</label>
            <input type="text" class="form-control" id="nama" name="nama" >
        </div>
        <div class="form-group">
            <label for="Tanggal Lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="nama" name="nama" >
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" >
        </div>
        <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
    </form>
</div>
@endsection
